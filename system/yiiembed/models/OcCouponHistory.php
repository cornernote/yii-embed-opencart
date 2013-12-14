<?php
/**
 * OcCouponHistory
 *
 * --- BEGIN GenerateProperties ---
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
 * @property OcAddress $customer
 * @property OcCoupon $coupon
 * @property OcOrder $order
 *
 * @see CActiveRecord
 * @method OcCouponHistory find() find($condition, array $params = array())
 * @method OcCouponHistory findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCouponHistory findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCouponHistory findBySql() findBySql($sql, array $params = array())
 * @method OcCouponHistory[] findAll() findAll($condition = '', array $params = array())
 * @method OcCouponHistory[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCouponHistory[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCouponHistory[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCouponHistory with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
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
            'customer' => array(self::BELONGS_TO, 'OcAddress', 'customer_id'),
            'coupon' => array(self::BELONGS_TO, 'OcCoupon', 'coupon_id'),
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
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

