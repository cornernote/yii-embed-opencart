<?php
/**
 * OcCouponProduct
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{coupon_product}}
 * @property integer $coupon_product_id
 * @property integer $coupon_id
 * @property integer $product_id
 *
 * Relations
 * @property \OcCoupon $coupon
 * @property \OcProduct $product
 *
 * @see \CActiveRecord
 * @method \OcCouponProduct find($condition = '', array $params = array())
 * @method \OcCouponProduct findByPk($pk, $condition = '', array $params = array())
 * @method \OcCouponProduct findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCouponProduct findBySql($sql, array $params = array())
 * @method \OcCouponProduct[] findAll($condition = '', array $params = array())
 * @method \OcCouponProduct[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCouponProduct[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCouponProduct[] findAllBySql($sql, array $params = array())
 * @method \OcCouponProduct with()
 * @method \OcCouponProduct together()
 * @method \OcCouponProduct cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCouponProduct resetScope($resetDefault = true)
 * @method \OcCouponProduct populateRecord($attributes, $callAfterFind = true)
 * @method \OcCouponProduct[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCouponProduct extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCouponProduct the static model class
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
        return '{{coupon_product}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'coupon' => array(self::BELONGS_TO, 'OcCoupon', 'coupon_id'),
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'coupon_product_id' => Yii::t('app', 'Coupon Product'),
            'coupon_id' => Yii::t('app', 'Coupon'),
            'product_id' => Yii::t('app', 'Product'),
        );
    }

}

