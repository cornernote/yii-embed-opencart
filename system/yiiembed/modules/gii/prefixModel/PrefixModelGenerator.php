<?php

/**
 * PrefixModelGenerator
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 */
class PrefixModelGenerator extends CCodeGenerator
{
    /**
     * @var string
     */
    public $codeModel = 'yiiembed.modules.gii.prefixmodel.PrefixModelCode';

    /**
     * Provides autocomplete table names
     * @param string $db the database connection component id
     * @throws CHttpException
     * @return string the json array of tablenames that contains the entered term $q
     */
    public function actionGetTableNames($db)
    {
        if (Yii::app()->getRequest()->getIsAjaxRequest()) {
            $all = array();
            if (!empty($db) && Yii::app()->hasComponent($db) !== false && (Yii::app()->getComponent($db) instanceof CDbConnection))
                $all = array_keys(Yii::app()->{$db}->schema->getTables());

            echo json_encode($all);
        }
        else
            throw new CHttpException(404, 'The requested page does not exist.');
    }
}