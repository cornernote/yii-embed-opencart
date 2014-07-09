<?php
return array(
    'language' => $config['registry']->get('config')->get('config_admin_language'),
    'preload' => array('log'),
    'components' => array(),
    'modules' => array(
        'gii' => array(
            'class' => 'yiiembed.modules.gii.OcGiiModule',
            'ipFilters' => array('127.0.0.1'),
            'password' => false,
        ),
    ),
);
