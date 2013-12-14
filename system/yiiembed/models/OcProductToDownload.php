<?php
/**
 * OcProductToDownload
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_to_download}}
 * @property integer $product_id
 * @property integer $download_id
 *
 * @see CActiveRecord
 * @method OcProductToDownload find() find($condition, array $params = array())
 * @method OcProductToDownload findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductToDownload findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductToDownload findBySql() findBySql($sql, array $params = array())
 * @method OcProductToDownload[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductToDownload[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductToDownload[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductToDownload[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductToDownload with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcProductToDownload extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductToDownload the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{product_to_download}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'download_id' => Yii::t('app', 'Download'),
        );
    }

}

