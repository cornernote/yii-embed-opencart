<?php
/**
 * OcProductDiscount
 *
 * --- BEGIN ModelDoc ---
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
 * @property \OcProduct $product
 * @property \OcCustomerGroup $customerGroup
 *
 * @see \CActiveRecord
 * @method \OcProductDiscount find($condition = '', array $params = array())
 * @method \OcProductDiscount findByPk($pk, $condition = '', array $params = array())
 * @method \OcProductDiscount findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductDiscount findBySql($sql, array $params = array())
 * @method \OcProductDiscount[] findAll($condition = '', array $params = array())
 * @method \OcProductDiscount[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcProductDiscount[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductDiscount[] findAllBySql($sql, array $params = array())
 * @method \OcProductDiscount with()
 * @method \OcProductDiscount together()
 * @method \OcProductDiscount cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcProductDiscount resetScope($resetDefault = true)
 * @method \OcProductDiscount populateRecord($attributes, $callAfterFind = true)
 * @method \OcProductDiscount[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
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

