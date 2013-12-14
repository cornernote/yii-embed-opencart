<?php
Yii::import('system.gii.GiiModule');

/**
 * OcGiiModule allows generation of code via the OpenCart administration.
 *
 * ## Installation
 *
 * Add to your Yii config for your admin app:
 * <pre>
 * return array(
 *     'modules' => array(
 *         'gii' => array(
 *             'class' => 'yiiembed.modules.gii.OcGiiModule',
 *             'ipFilters' => array('127.0.0.1'),
 *             'password' => false,
 *         ),
 *     ),
 * );
 * </pre>
 *
 * To generate code visit the following URL in your store admin:
 * https://www.dom.ain/admin/index.php?route=gii
 *
 *
 * ## Class Information
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcGiiModule extends GiiModule
{

    /**
     * Initializes the gii module.
     *
     * Overrides parent with the following features:
     * - Sets the base path to allow use of GiiModule templates.
     * - Uses WidgetFactory to set CCodeForm::encode=false to allow admin token to be passed correctly.
     */
    public function init()
    {
        parent::init();
        $this->setBasePath(Yii::getPathOfAlias('system.gii'));
        Yii::app()->setComponents(array(
            'widgetFactory' => array(
                'class' => 'CWidgetFactory',
                'widgets' => array(
                    'CCodeForm' => array(
                        'htmlOptions' => array('encode' => false),
                    ),
                ),
            ),
        ));
    }

}
