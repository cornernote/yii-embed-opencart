<?php
/**
 * OcWebApplication is a lightweight Yii application embedded into OpenCart.
 *
 * @property string $version
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcWebApplication extends CWebApplication
{

    /**
     * @var Front Contains OpenCart's controller.
     */
    public $front;

    /**
     * @var Registry Contains OpenCart's registry.
     */
    public $registry;

    /**
     * @var string Contains the current version of Yii-Embed for OpenCart.
     * @see getVersion
     */
    private $_version = 'dev';

    /**
     * @return string The current version of Yii-Embed for OpenCart.
     */
    public function getVersion()
    {
        if ($this->_version)
            return $this->_version;
        return $this->_version = trim(file_get_contents(__FILE__ . DIRECTORY_SEPARATOR . 'version.txt'));
    }

    /**
     * Constructor.
     * @param mixed $config application configuration.
     *
     * Overrides parent with the following features:
     * - Sets the application basePath to a folder named "yiiembed" inside your OpenCart application directory.
     * - If not provided $config will be loaded from yiiembed/config/main.php in your application.
     */
    public function __construct($config = null)
    {
        $app = require(DIR_APPLICATION . 'yiiembed/config/main.php');
        if (empty($app['basePath']))
            $app['basePath'] = DIR_APPLICATION . 'yiiembed';
        $app['front'] = $config['front'];
        $app['registry'] = $config['registry'];
        parent::__construct($app);
    }

     /**
     * Initializes the application.
     *
     * Overrides parent with the following features:
     * - Sets an alias to yiiembed.
     * - Adds application.components and application.models to the import list.
     * - Adds yiiembed.components and yiiembed.models to the import list.
     * - Creates a new controller that may be used to render widgets and partial views.
     * - Sets the site name to be the same as the OpenCart store.
     * - Adds the token into the homeUrl for admin token requests.
     */
    protected function init()
    {
        parent::init();
        Yii::setPathOfAlias('yiiembed', dirname(__FILE__));
        Yii::import('application.components.*');
        Yii::import('application.models.*');
        Yii::import('yiiembed.components.*');
        Yii::import('yiiembed.models.*');
        list($c, $a) = array('site', 'index');
        if (!empty($_GET[Yii::app()->urlManager->routeVar])) {
            $route = explode('/', urldecode($_GET['route']));
            $c = $route[0];
            if (isset($route[1]))
                $a = $route[1];
        }
        $this->setController(new CController($c));
        $this->controller->setAction(new CViewAction($this->controller, $a));
        if ($this->name === null)
            $this->name = $this->registry->get('config')->get('config_name');
        if (isset($_GET['token']))
            $this->setHomeUrl($this->getHomeUrl() . '?token=' . $_GET['token']);
    }

    /**
     * Creates the controller and performs an action based on the OpenCart route.
     *
     * Overrides parent with the following features:
     * - If controller action does not exist then do not throw an exception, let OpenCart handle it.
     *
     * @param string $route the route of the current request. Leave empty to get route from url.
     * @throws Exception on any parent exception except 404 errors
     */
    public function runController($route = null)
    {
        // get route
        if (!$route) {
            $routeVar = $this->getUrlManager()->routeVar;
            $route = isset($_GET[$routeVar]) ? urldecode($_GET[$routeVar]) : '';
        }

        try {
            // run the controller
            parent::runController($route);
            $this->end();
        } catch (Exception $e) {
            // we expect it to fail if controller does not exist
            // otherwise, rethrow the error
            if (!isset($e->statusCode) || $e->statusCode != 404)
                throw $e;
        }
    }

    /**
     * Runs the OpenCart controller and performs the specified action.
     * @param $route
     */
    public function runOcController($route)
    {
        $this->front->dispatch(new Action($route), new Action('error/not_found'));
        $this->registry->get('response')->output();
        Yii::app()->end();
    }

    /**
     * Returns the OpenCart controller child action.
     * @param $route
     * @param array $args
     * @throws CException
     * @return string
     */
    public function getOcControllerOutput($route, $args = array())
    {
        $action = new Action($route, $args);
        if (!file_exists($action->getFile()))
            throw new CException('Error: Could not load controller ' . $route . '!');

        require_once($action->getFile());
        // create a class that extends the controller to allow access to protected methods and properties
        $className = 'Oc' . $action->getClass();
        if (!class_exists($className, false))
            eval('class ' . $className . ' extends ' . $action->getClass() . ' {
                public function ' . $action->getMethod() . '(){ parent::' . $action->getMethod() . '(); }
                public function getOutput(){ return $this->output; }
            }');
        $controller = new $className($this->registry);
        $controller->{$action->getMethod()}($action->getArgs());
        return $controller->getOutput();
    }

    /**
     * Registers the core application components.
     *
     * Overrides parent with the following features:
     * - DbConnection is configured using OpenCart DB_* constants defined in config.php.
     * - AssetManager path and url are configured using the $_SERVER['SCRIPT_*'] superglobals.
     * - ClientScript has jquery disabled to prevent conflicts.
     * - UrlManager routeVar is set to the same as OpenCart.
     */
    protected function registerCoreComponents()
    {
        parent::registerCoreComponents();
        $dbHost = explode(':', DB_HOSTNAME);
        $dbHost = $dbHost[0] . (!empty($dbHost[1]) ? ';port=' . $dbHost[1] : '');
        $components = array(
            'db' => array(
                'class' => 'CDbConnection',
                'connectionString' => 'mysql:host=' . $dbHost . ';dbname=' . DB_DATABASE,
                'username' => DB_USERNAME,
                'password' => DB_PASSWORD,
                'tablePrefix' => DB_PREFIX,
                'emulatePrepare' => true,
                'charset' => 'utf8',
                'schemaCachingDuration' => 3600,
                'enableParamLogging' => YII_DEBUG,
            ),
            'assetManager' => array(
                'class' => 'CAssetManager',
                'basePath' => dirname($_SERVER['SCRIPT_FILENAME']) . DIRECTORY_SEPARATOR . 'assets',
                'baseUrl' => dirname($_SERVER['SCRIPT_NAME']) . '/assets',
            ),
            'clientScript' => array(
                'class' => 'CClientScript',
                'scriptMap' => array(
                    'jquery.js' => false,
                    'jquery.min.js' => false,
                ),
            ),
            'urlManager' => array(
                'class' => 'OcUrlManager',
            ),
            'widgetFactory' => array(
                'class' => 'CWidgetFactory',
                'widgets' => array(
                    'CActiveForm' => array(
                        'htmlOptions' => array('encode' => false),
                    ),
                ),
            ),
            'errorHandler' => array(
                'class' => 'CErrorHandler',
                'errorAction' => 'site/error',
            ),
        );
        $this->setComponents($components);
    }

}
