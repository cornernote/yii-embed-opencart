<?php
/**
 * OcDownloadDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{download_description}}
 * @property integer $download_id
 * @property integer $language_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcDownloadDescription find() find($condition, array $params = array())
 * @method OcDownloadDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcDownloadDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcDownloadDescription findBySql() findBySql($sql, array $params = array())
 * @method OcDownloadDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcDownloadDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcDownloadDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcDownloadDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcDownloadDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcDownloadDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcDownloadDescription the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{download_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'download_id' => Yii::t('app', 'Download'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

