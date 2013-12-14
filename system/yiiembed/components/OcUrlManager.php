<?php
/**
 * OcUrlManager manages the URLs of Yii within OpenCart.
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 */
class OcUrlManager extends CUrlManager
{

    /**
     * @var string Set to 'route' for OpenCart
     */
    public $routeVar = 'route';

    /**
     * Constructs a URL.
     * @param string $route
     * @param array $params
     * @param string $ampersand
     * @return string
     *
     * Overrides the parent with the following features:
     * - Automatically adds the admin token into the url.
     */
    public function createUrl($route, $params = array(), $ampersand = '&')
    {
        $url = parent::createUrl($route, $params, $ampersand);
        if (!empty($_GET['token'])) {
            $join = strpos($url, '?') ? '&' : '?';
            $token = 'token=' . $_GET['token'];
            $url = $url . $join . $token;
        }
        return $url;
    }

}
