<?php
/**
 * OcProductOptionValue
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_option_value}}
 * @property integer $product_option_value_id
 * @property integer $product_option_id
 * @property integer $product_id
 * @property integer $option_id
 * @property integer $option_value_id
 * @property integer $quantity
 * @property integer $subtract
 * @property number $price
 * @property string $price_prefix
 * @property integer $points
 * @property string $points_prefix
 * @property number $weight
 * @property string $weight_prefix
 *
 * Relations
 * @property OcOrderOption[] $orderOptions
 * @property OcProductOption $productOption
 * @property OcProduct $product
 * @property OcOption $option
 * @property OcOptionValue $optionValue
 *
 * @see CActiveRecord
 * @method OcProductOptionValue find() find($condition, array $params = array())
 * @method OcProductOptionValue findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductOptionValue findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductOptionValue findBySql() findBySql($sql, array $params = array())
 * @method OcProductOptionValue[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductOptionValue[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductOptionValue[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductOptionValue[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductOptionValue with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProductOptionValue extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductOptionValue the static model class
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
        return '{{product_option_value}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orderOptions' => array(self::HAS_MANY, 'OcOrderOption', 'product_option_value_id'),
            'productOption' => array(self::BELONGS_TO, 'OcProductOption', 'product_option_id'),
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'option' => array(self::BELONGS_TO, 'OcOption', 'option_id'),
            'optionValue' => array(self::BELONGS_TO, 'OcOptionValue', 'option_value_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_option_value_id' => Yii::t('app', 'Product Option Value'),
            'product_option_id' => Yii::t('app', 'Product Option'),
            'product_id' => Yii::t('app', 'Product'),
            'option_id' => Yii::t('app', 'Option'),
            'option_value_id' => Yii::t('app', 'Option Value'),
            'quantity' => Yii::t('app', 'Quantity'),
            'subtract' => Yii::t('app', 'Subtract'),
            'price' => Yii::t('app', 'Price'),
            'price_prefix' => Yii::t('app', 'Price Prefix'),
            'points' => Yii::t('app', 'Points'),
            'points_prefix' => Yii::t('app', 'Points Prefix'),
            'weight' => Yii::t('app', 'Weight'),
            'weight_prefix' => Yii::t('app', 'Weight Prefix'),
        );
    }

}

