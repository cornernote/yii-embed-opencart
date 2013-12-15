<?php
/**
 * OcProductImage
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_image}}
 * @property integer $product_image_id
 * @property integer $product_id
 * @property string $image
 * @property integer $sort_order
 *
 * Relations
 * @property OcProduct $product
 *
 * @see CActiveRecord
 * @method OcProductImage find() find($condition, array $params = array())
 * @method OcProductImage findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductImage findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductImage findBySql() findBySql($sql, array $params = array())
 * @method OcProductImage[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductImage[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductImage[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductImage[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductImage with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProductImage extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductImage the static model class
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
        return '{{product_image}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_image_id' => Yii::t('app', 'Product Image'),
            'product_id' => Yii::t('app', 'Product'),
            'image' => Yii::t('app', 'Image'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

