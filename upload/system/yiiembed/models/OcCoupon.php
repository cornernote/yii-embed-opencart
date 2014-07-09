<?php
/**
 * OcCoupon
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{coupon}}
 * @property integer $coupon_id
 * @property string $name
 * @property string $code
 * @property string $type
 * @property number $discount
 * @property integer $logged
 * @property integer $shipping
 * @property number $total
 * @property string $date_start
 * @property string $date_end
 * @property integer $uses_total
 * @property string $uses_customer
 * @property integer $status
 * @property string $date_added
 *
 * Relations
 * @property \OcCategory[] $categories
 * @property \OcCouponHistory[] $couponHistories
 * @property \OcCouponProduct[] $couponProducts
 *
 * @see \CActiveRecord
 * @method \OcCoupon find($condition = '', array $params = array())
 * @method \OcCoupon findByPk($pk, $condition = '', array $params = array())
 * @method \OcCoupon findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCoupon findBySql($sql, array $params = array())
 * @method \OcCoupon[] findAll($condition = '', array $params = array())
 * @method \OcCoupon[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCoupon[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCoupon[] findAllBySql($sql, array $params = array())
 * @method \OcCoupon with()
 * @method \OcCoupon together()
 * @method \OcCoupon cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCoupon resetScope($resetDefault = true)
 * @method \OcCoupon populateRecord($attributes, $callAfterFind = true)
 * @method \OcCoupon[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCoupon extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCoupon the static model class
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
        return '{{coupon}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'categories' => array(self::MANY_MANY, 'OcCategory', '{{coupon_category}}(coupon_id, category_id)'),
            'couponHistories' => array(self::HAS_MANY, 'OcCouponHistory', 'coupon_id'),
            'couponProducts' => array(self::HAS_MANY, 'OcCouponProduct', 'coupon_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'coupon_id' => Yii::t('app', 'Coupon'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'Code'),
            'type' => Yii::t('app', 'Type'),
            'discount' => Yii::t('app', 'Discount'),
            'logged' => Yii::t('app', 'Logged'),
            'shipping' => Yii::t('app', 'Shipping'),
            'total' => Yii::t('app', 'Total'),
            'date_start' => Yii::t('app', 'Date Start'),
            'date_end' => Yii::t('app', 'Date End'),
            'uses_total' => Yii::t('app', 'Uses Total'),
            'uses_customer' => Yii::t('app', 'Uses Customer'),
            'status' => Yii::t('app', 'Status'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

