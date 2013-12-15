<?php
/**
 * OcCustomer
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer}}
 * @property integer $customer_id
 * @property integer $store_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $telephone
 * @property string $fax
 * @property string $password
 * @property string $salt
 * @property string $cart
 * @property string $wishlist
 * @property integer $newsletter
 * @property integer $address_id
 * @property integer $customer_group_id
 * @property string $ip
 * @property integer $status
 * @property integer $approved
 * @property string $token
 * @property string $date_added
 *
 * Relations
 * @property OcAddress[] $addresses
 * @property OcCouponHistory[] $couponHistories
 * @property OcStore $store
 * @property OcAddress $address
 * @property OcCustomerGroup $customerGroup
 * @property OcCustomerField[] $customerFields
 * @property OcCustomerHistory[] $customerHistories
 * @property OcCustomerIp[] $customerIps
 * @property OcCustomerOnline[] $customerOnlines
 * @property OcCustomerReward[] $customerRewards
 * @property OcCustomerTransaction[] $customerTransactions
 * @property OcOrder[] $orders
 * @property OcOrderFraud[] $orderFrauds
 * @property OcReturn[] $returns
 * @property OcReview[] $reviews
 *
 * @see CActiveRecord
 * @method OcCustomer find() find($condition, array $params = array())
 * @method OcCustomer findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomer findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomer findBySql() findBySql($sql, array $params = array())
 * @method OcCustomer[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomer[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomer[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomer[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomer with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCustomer extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomer the static model class
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
        return '{{customer}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'addresses' => array(self::HAS_MANY, 'OcAddress', 'customer_id'),
            'couponHistories' => array(self::HAS_MANY, 'OcCouponHistory', 'customer_id'),
            'store' => array(self::BELONGS_TO, 'OcStore', 'store_id'),
            'address' => array(self::BELONGS_TO, 'OcAddress', 'address_id'),
            'customerGroup' => array(self::BELONGS_TO, 'OcCustomerGroup', 'customer_group_id'),
            'customerFields' => array(self::HAS_MANY, 'OcCustomerField', 'customer_id'),
            'customerHistories' => array(self::HAS_MANY, 'OcCustomerHistory', 'customer_id'),
            'customerIps' => array(self::HAS_MANY, 'OcCustomerIp', 'customer_id'),
            'customerOnlines' => array(self::HAS_MANY, 'OcCustomerOnline', 'customer_id'),
            'customerRewards' => array(self::HAS_MANY, 'OcCustomerReward', 'customer_id'),
            'customerTransactions' => array(self::HAS_MANY, 'OcCustomerTransaction', 'customer_id'),
            'orders' => array(self::HAS_MANY, 'OcOrder', 'customer_id'),
            'orderFrauds' => array(self::HAS_MANY, 'OcOrderFraud', 'customer_id'),
            'returns' => array(self::HAS_MANY, 'OcReturn', 'customer_id'),
            'reviews' => array(self::HAS_MANY, 'OcReview', 'customer_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'customer_id' => Yii::t('app', 'Customer'),
            'store_id' => Yii::t('app', 'Store'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'email' => Yii::t('app', 'Email'),
            'telephone' => Yii::t('app', 'Telephone'),
            'fax' => Yii::t('app', 'Fax'),
            'password' => Yii::t('app', 'Password'),
            'salt' => Yii::t('app', 'Salt'),
            'cart' => Yii::t('app', 'Cart'),
            'wishlist' => Yii::t('app', 'Wishlist'),
            'newsletter' => Yii::t('app', 'Newsletter'),
            'address_id' => Yii::t('app', 'Address'),
            'customer_group_id' => Yii::t('app', 'Customer Group'),
            'ip' => Yii::t('app', 'Ip'),
            'status' => Yii::t('app', 'Status'),
            'approved' => Yii::t('app', 'Approved'),
            'token' => Yii::t('app', 'Token'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

