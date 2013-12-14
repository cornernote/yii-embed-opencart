<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{order}}
 * @property integer $order_id
 * @property integer $invoice_no
 * @property string $invoice_prefix
 * @property integer $store_id
 * @property string $store_name
 * @property string $store_url
 * @property integer $customer_id
 * @property integer $customer_group_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $telephone
 * @property string $fax
 * @property string $custom_field
 * @property string $payment_firstname
 * @property string $payment_lastname
 * @property string $payment_company
 * @property string $payment_address_1
 * @property string $payment_address_2
 * @property string $payment_city
 * @property string $payment_postcode
 * @property string $payment_country
 * @property integer $payment_country_id
 * @property string $payment_zone
 * @property integer $payment_zone_id
 * @property string $payment_address_format
 * @property string $payment_custom_field
 * @property string $payment_method
 * @property string $payment_code
 * @property string $shipping_firstname
 * @property string $shipping_lastname
 * @property string $shipping_company
 * @property string $shipping_address_1
 * @property string $shipping_address_2
 * @property string $shipping_city
 * @property string $shipping_postcode
 * @property string $shipping_country
 * @property integer $shipping_country_id
 * @property string $shipping_zone
 * @property integer $shipping_zone_id
 * @property string $shipping_address_format
 * @property string $shipping_custom_field
 * @property string $shipping_method
 * @property string $shipping_code
 * @property string $comment
 * @property number $total
 * @property integer $order_status_id
 * @property integer $affiliate_id
 * @property number $commission
 * @property integer $marketing_id
 * @property string $tracking
 * @property integer $language_id
 * @property integer $currency_id
 * @property string $currency_code
 * @property number $currency_value
 * @property string $ip
 * @property string $forwarded_ip
 * @property string $user_agent
 * @property string $accept_language
 * @property string $date_added
 * @property string $date_modified
 *
 * Relations
 * @property OcAffiliateTransaction[] $affiliateTransactions
 * @property OcCouponHistory[] $couponHistories
 * @property OcCustomerTransaction[] $customerTransactions
 * @property OcCurrency $currency
 * @property OcStore $store
 * @property OcMarketing $marketing
 * @property OcLanguage $language
 * @property OcCustomer $customer
 * @property OcCustomerGroup $customerGroup
 * @property OcCountry $paymentCountry
 * @property OcZone $paymentZone
 * @property OcCountry $shippingCountry
 * @property OcZone $shippingZone
 * @property OcOrderStatus $orderStatus
 * @property OcAffiliate $affiliate
 * @property OcOrderFraud $orderFraud
 * @property OcOrderHistory[] $orderHistories
 * @property OcOrderOption[] $orderOptions
 * @property OcOrderProduct[] $orderProducts
 * @property OcOrderTotal[] $orderTotals
 * @property OcOrderVoucher[] $orderVouchers
 * @property OcReturn[] $returns
 * @property OcVoucher[] $vouchers
 * @property OcVoucherHistory[] $voucherHistories
 *
 * @see CActiveRecord
 * @method OcOrder find() find($condition, array $params = array())
 * @method OcOrder findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOrder findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrder findBySql() findBySql($sql, array $params = array())
 * @method OcOrder[] findAll() findAll($condition = '', array $params = array())
 * @method OcOrder[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOrder[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrder[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOrder with() with()
 *
 * --- END GenerateProperties ---
 */

class OcOrder extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrder the static model class
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
        return '{{order}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'affiliateTransactions' => array(self::HAS_MANY, 'OcAffiliateTransaction', 'order_id'),
            'couponHistories' => array(self::HAS_MANY, 'OcCouponHistory', 'order_id'),
            'customerTransactions' => array(self::HAS_MANY, 'OcCustomerTransaction', 'order_id'),
            'currency' => array(self::BELONGS_TO, 'OcCurrency', 'currency_id'),
            'store' => array(self::BELONGS_TO, 'OcStore', 'store_id'),
            'marketing' => array(self::BELONGS_TO, 'OcMarketing', 'marketing_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
            'customer' => array(self::BELONGS_TO, 'OcCustomer', 'customer_id'),
            'customerGroup' => array(self::BELONGS_TO, 'OcCustomerGroup', 'customer_group_id'),
            'paymentCountry' => array(self::BELONGS_TO, 'OcCountry', 'payment_country_id'),
            'paymentZone' => array(self::BELONGS_TO, 'OcZone', 'payment_zone_id'),
            'shippingCountry' => array(self::BELONGS_TO, 'OcCountry', 'shipping_country_id'),
            'shippingZone' => array(self::BELONGS_TO, 'OcZone', 'shipping_zone_id'),
            'orderStatus' => array(self::BELONGS_TO, 'OcOrderStatus', 'order_status_id'),
            'affiliate' => array(self::BELONGS_TO, 'OcAffiliate', 'affiliate_id'),
            'orderFraud' => array(self::HAS_ONE, 'OcOrderFraud', 'order_id'),
            'orderHistories' => array(self::HAS_MANY, 'OcOrderHistory', 'order_id'),
            'orderOptions' => array(self::HAS_MANY, 'OcOrderOption', 'order_id'),
            'orderProducts' => array(self::HAS_MANY, 'OcOrderProduct', 'order_id'),
            'orderTotals' => array(self::HAS_MANY, 'OcOrderTotal', 'order_id'),
            'orderVouchers' => array(self::HAS_MANY, 'OcOrderVoucher', 'order_id'),
            'returns' => array(self::HAS_MANY, 'OcReturn', 'order_id'),
            'vouchers' => array(self::HAS_MANY, 'OcVoucher', 'order_id'),
            'voucherHistories' => array(self::HAS_MANY, 'OcVoucherHistory', 'order_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_id' => Yii::t('app', 'Order'),
            'invoice_no' => Yii::t('app', 'Invoice No'),
            'invoice_prefix' => Yii::t('app', 'Invoice Prefix'),
            'store_id' => Yii::t('app', 'Store'),
            'store_name' => Yii::t('app', 'Store Name'),
            'store_url' => Yii::t('app', 'Store Url'),
            'customer_id' => Yii::t('app', 'Customer'),
            'customer_group_id' => Yii::t('app', 'Customer Group'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'email' => Yii::t('app', 'Email'),
            'telephone' => Yii::t('app', 'Telephone'),
            'fax' => Yii::t('app', 'Fax'),
            'custom_field' => Yii::t('app', 'Custom Field'),
            'payment_firstname' => Yii::t('app', 'Payment Firstname'),
            'payment_lastname' => Yii::t('app', 'Payment Lastname'),
            'payment_company' => Yii::t('app', 'Payment Company'),
            'payment_address_1' => Yii::t('app', 'Payment Address 1'),
            'payment_address_2' => Yii::t('app', 'Payment Address 2'),
            'payment_city' => Yii::t('app', 'Payment City'),
            'payment_postcode' => Yii::t('app', 'Payment Postcode'),
            'payment_country' => Yii::t('app', 'Payment Country'),
            'payment_country_id' => Yii::t('app', 'Payment Country'),
            'payment_zone' => Yii::t('app', 'Payment Zone'),
            'payment_zone_id' => Yii::t('app', 'Payment Zone'),
            'payment_address_format' => Yii::t('app', 'Payment Address Format'),
            'payment_custom_field' => Yii::t('app', 'Payment Custom Field'),
            'payment_method' => Yii::t('app', 'Payment Method'),
            'payment_code' => Yii::t('app', 'Payment Code'),
            'shipping_firstname' => Yii::t('app', 'Shipping Firstname'),
            'shipping_lastname' => Yii::t('app', 'Shipping Lastname'),
            'shipping_company' => Yii::t('app', 'Shipping Company'),
            'shipping_address_1' => Yii::t('app', 'Shipping Address 1'),
            'shipping_address_2' => Yii::t('app', 'Shipping Address 2'),
            'shipping_city' => Yii::t('app', 'Shipping City'),
            'shipping_postcode' => Yii::t('app', 'Shipping Postcode'),
            'shipping_country' => Yii::t('app', 'Shipping Country'),
            'shipping_country_id' => Yii::t('app', 'Shipping Country'),
            'shipping_zone' => Yii::t('app', 'Shipping Zone'),
            'shipping_zone_id' => Yii::t('app', 'Shipping Zone'),
            'shipping_address_format' => Yii::t('app', 'Shipping Address Format'),
            'shipping_custom_field' => Yii::t('app', 'Shipping Custom Field'),
            'shipping_method' => Yii::t('app', 'Shipping Method'),
            'shipping_code' => Yii::t('app', 'Shipping Code'),
            'comment' => Yii::t('app', 'Comment'),
            'total' => Yii::t('app', 'Total'),
            'order_status_id' => Yii::t('app', 'Order Status'),
            'affiliate_id' => Yii::t('app', 'Affiliate'),
            'commission' => Yii::t('app', 'Commission'),
            'marketing_id' => Yii::t('app', 'Marketing'),
            'tracking' => Yii::t('app', 'Tracking'),
            'language_id' => Yii::t('app', 'Language'),
            'currency_id' => Yii::t('app', 'Currency'),
            'currency_code' => Yii::t('app', 'Currency Code'),
            'currency_value' => Yii::t('app', 'Currency Value'),
            'ip' => Yii::t('app', 'Ip'),
            'forwarded_ip' => Yii::t('app', 'Forwarded Ip'),
            'user_agent' => Yii::t('app', 'User Agent'),
            'accept_language' => Yii::t('app', 'Accept Language'),
            'date_added' => Yii::t('app', 'Date Added'),
            'date_modified' => Yii::t('app', 'Date Modified'),
        );
    }

}

