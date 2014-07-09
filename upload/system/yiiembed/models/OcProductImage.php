<?php
/**
 * OcProductImage
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{product_image}}
 * @property integer $product_image_id
 * @property integer $product_id
 * @property string $image
 * @property integer $sort_order
 *
 * Relations
 * @property \OcProduct $product
 *
 * @see \CActiveRecord
 * @method \OcProductImage find($condition = '', array $params = array())
 * @method \OcProductImage findByPk($pk, $condition = '', array $params = array())
 * @method \OcProductImage findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductImage findBySql($sql, array $params = array())
 * @method \OcProductImage[] findAll($condition = '', array $params = array())
 * @method \OcProductImage[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcProductImage[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductImage[] findAllBySql($sql, array $params = array())
 * @method \OcProductImage with()
 * @method \OcProductImage together()
 * @method \OcProductImage cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcProductImage resetScope($resetDefault = true)
 * @method \OcProductImage populateRecord($attributes, $callAfterFind = true)
 * @method \OcProductImage[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcProductImage extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductImage the static model class
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

