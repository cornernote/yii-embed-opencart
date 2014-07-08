<?php

/**
 * Yii Embed Loader
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 */

if (class_exists('VQMod', false)) { 
    require_once(VQMod::modCheck(DIR_SYSTEM . 'yiiembed/yii.php'));
    require_once(VQMod::modCheck(DIR_SYSTEM . 'yiiembed/app.php'));
}
else {
    require_once(DIR_SYSTEM . 'yiiembed/yii.php');
    require_once(DIR_SYSTEM . 'yiiembed/app.php');
}
