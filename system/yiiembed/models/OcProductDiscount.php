<?php
/**
 * OcProductDiscount
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_discount}}
 * @property integer $product_discount_id
 * @property integer $product_id
 * @property integer $customer_group_id
 * @property integer $quantity
 * @property integer $priority
 * @property number $price
 * @property string $date_start
 * @property string $date_end
 *
 * Relations
 * @property OcProduct $product
 * @property OcCustomerGroup $customerGroup
 *
 * @see CActiveRecord
 * @method OcProductDiscount find() find($condition, array $params = array())
 * @method OcProductDiscount findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductDiscount findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductDiscount findBySql() findBySql($sql, array $params = array())
 * @method OcProductDiscount[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductDiscount[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductDiscount[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductDiscount[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductDiscount with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcProductDiscount extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductDiscount the static model class
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
        return '{{product_discount}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'customerGroup' => array(self::BELONGS_TO, 'OcCustomerGroup', 'customer_group_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_discount_id' => Yii::t('app', 'Product Discount'),
            'product_id' => Yii::t('app', 'Product'),
            'customer_group_id' => Yii::t('app', 'Customer Group'),
            'quantity' => Yii::t('app', 'Quantity'),
            'priority' => Yii::t('app', 'Priority'),
            'price' => Yii::t('app', 'Price'),
            'date_start' => Yii::t('app', 'Date Start'),
            'date_end' => Yii::t('app', 'Date End'),
        );
    }

}

