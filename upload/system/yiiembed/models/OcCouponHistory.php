<?php
/**
 * OcCouponHistory
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{coupon_history}}
 * @property integer $coupon_history_id
 * @property integer $coupon_id
 * @property integer $order_id
 * @property integer $customer_id
 * @property number $amount
 * @property string $date_added
 *
 * Relations
 * @property \OcCoupon $coupon
 * @property \OcOrder $order
 * @property \OcCustomer $customer
 *
 * @see \CActiveRecord
 * @method \OcCouponHistory find($condition = '', array $params = array())
 * @method \OcCouponHistory findByPk($pk, $condition = '', array $params = array())
 * @method \OcCouponHistory findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCouponHistory findBySql($sql, array $params = array())
 * @method \OcCouponHistory[] findAll($condition = '', array $params = array())
 * @method \OcCouponHistory[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCouponHistory[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCouponHistory[] findAllBySql($sql, array $params = array())
 * @method \OcCouponHistory with()
 * @method \OcCouponHistory together()
 * @method \OcCouponHistory cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCouponHistory resetScope($resetDefault = true)
 * @method \OcCouponHistory populateRecord($attributes, $callAfterFind = true)
 * @method \OcCouponHistory[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCouponHistory extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCouponHistory the static model class
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
        return '{{coupon_history}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'coupon' => array(self::BELONGS_TO, 'OcCoupon', 'coupon_id'),
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'customer' => array(self::BELONGS_TO, 'OcCustomer', 'customer_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'coupon_history_id' => Yii::t('app', 'Coupon History'),
            'coupon_id' => Yii::t('app', 'Coupon'),
            'order_id' => Yii::t('app', 'Order'),
            'customer_id' => Yii::t('app', 'Customer'),
            'amount' => Yii::t('app', 'Amount'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

