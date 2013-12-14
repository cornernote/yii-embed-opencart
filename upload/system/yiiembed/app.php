<?php
/**
 * OcWebApplication is a Yii Application for embedding Yii into OpenCart.
 *
 * It can be used in all the same ways as a normal Yii application with the
 * exception of not using Yii's routing and controllers to handle actions.
 *
 *
 * ## Features
 *
 * - Yii is available from anywhere in OpenCart using Yii::app() or Yii::foobar
 * - Autoload any of your Yii models and components
 * - Widgets can be rendered and will auto-include their stylesheet and javascript files
 * - Controllers and Modules are handled by the OpenCart not_found.php controller
 * - Fancy error messages with stack dump
 *
 * The following Yii components are pre-configured to work in your OpenCart:
 * - Yii::app()->assetManager - CAssetManager
 * - Yii::app()->clientScript - CClientScript
 * - Yii::app()->controller - CController
 * - Yii::app()->db - CDbConnection
 * - Yii::app()->session - CHttpSession
 * - Yii::app()->urlManager - CUrlManager
 *
 *
 * ## Installation
 *
 * Add to system/startup.php at the bottom:
 * <pre>
 * require_once(DIR_SYSTEM . 'yii/framework/yii.php');
 * require_once(DIR_SYSTEM . 'yiiembed/app.php');
 * </pre>
 *
 * Add to system/engine/front.php in the __construct() function, after "$this->registry = $registry;":
 * <pre>
 * Yii::createApplication('OcWebApplication');
 * // or pass in a Yii config array, see Configuration section
 * //Yii::createApplication('OcWebApplication', require(DIR_SYSTEM . 'yiiembed/config/main.php'));
 * </pre>
 *
 * Add to system/library/response.php in the output() function, before "echo $ouput;":
 * <pre>
 * Yii::app()->clientScript->render($ouput);
 * </pre>
 *
 *
 * ## Yii Controllers (optional)
 *
 * Add to catalog/controller/error/not_found.php and admin/controller/error/permission.php at the
 * top of the index() function, after "public function index() {":
 * <pre>
 * Yii::app()->runController();
 * </pre>
 *
 * ## Configuration (optional)
 *
 * Create a new Yii config file, for example "system/yiiembed/config/main.php":
 * <pre>
 * return array(
 *     'id' => 'My OpenCart Yii App',
 *     'preload' => array('log'),
 *     'components' => array( ... ),
 * );
 * </pre>
 *
 * Add Yii constants to your OpenCart config.php, defaults shown below:
 * <pre>
 * define('YII_DEBUG', false); // set to true for fancy error messages
 * define('YII_TRACE_LEVEL', 0);
 * define('YII_ENABLE_EXCEPTION_HANDLER', true);
 * define('YII_ENABLE_ERROR_HANDLER', true);
 * </pre>
 *
 *
 * ## Examples
 *
 * Render Yii partial views:
 * <pre>
 * Yii::app()->controller->renderPartial('/site/index');
 * </pre>
 *
 * Render Yii widgets:
 * <pre>
 * Yii::app()->controller->widget('zii.widgets.CDetailView', array(
 *     'data' => array('hello' => 'world'),
 * ));
 * </pre>
 *
 * Find and save a Customer:
 * <pre>
 * $customer = OcCustomer::model()->findByPk($this->customer->getId());
 * if ($customer) {
 *     $customer->firstname = 'Foo';
 *     $customer->lastname = 'Bar';
 *     $customer->save();
 * }
 * </pre>
 *
 *
 * ## Class Information
 *
 * @method static OcWebApplication app()
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
     * Constructor.
     * @param mixed $config application configuration.
     *
     * Overrides parent with the following features:
     * - Sets the application basePath to a folder named "yiiembed" inside your OpenCart application directory.
	 * - If not provided $config will be loaded from yiiembed/config/main.php in your application.
     */
    public function __construct($config = null)
    {
		if ($config === null)
			$config = require(DIR_APPLICATION . 'yiiembed/config/main.php');
        if (is_string($config))
            $config = require($config);
        if (empty($config['basePath']))
            $config['basePath'] = DIR_APPLICATION . 'yiiembed';
        parent::__construct($config);
    }
	
    /**
     * Initializes the application.
     *
     * Overrides parent with the following features:
     * - Sets an alias to yiiembed.
     * - Adds yiiembed.components and yiiembed.models to the import list.
     * - Creates a new controller that may be used to render widgets and partial views.
     */
    protected function init()
    {
        parent::init();
        Yii::setPathOfAlias('yiiembed', dirname(__FILE__));
        Yii::import('yiiembed.components.*');
        Yii::import('yiiembed.models.*');
        $this->setController(new CController('site'));
    }

    /**
     * Creates the controller and performs an action based on the OpenCart route.
     *
     * Overrides parent with the following features:
     * - If controller action does not exist then do not throw an exception, let OpenCart handle it.
     */
    public function runController()
    {
        // get route
        $routeVar = $this->urlManager->routeVar;
        $route = isset($_GET[$routeVar]) ? $_GET[$routeVar] : '';

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
        $dbHost = $dbHost[0] . (!empty($host[1]) ? ';port=' . $dbHost[1] : '');
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
                'baseUrl' => dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR . 'assets',
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
        );
        $this->setComponents($components);
    }

}
