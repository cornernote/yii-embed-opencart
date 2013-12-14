<?php
/**
 * OcAffiliate
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{affiliate}}
 * @property integer $affiliate_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $telephone
 * @property string $fax
 * @property string $password
 * @property string $salt
 * @property string $company
 * @property string $website
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $postcode
 * @property integer $country_id
 * @property integer $zone_id
 * @property string $code
 * @property number $commission
 * @property string $tax
 * @property string $payment
 * @property string $cheque
 * @property string $paypal
 * @property string $bank_name
 * @property string $bank_branch_number
 * @property string $bank_swift_code
 * @property string $bank_account_name
 * @property string $bank_account_number
 * @property string $ip
 * @property integer $status
 * @property integer $approved
 * @property string $date_added
 *
 * Relations
 * @property OcZone $zone
 * @property OcCountry $country
 * @property OcAffiliateActivity[] $affiliateActivities
 * @property OcAffiliateTransaction[] $affiliateTransactions
 * @property OcOrder[] $orders
 *
 * @see CActiveRecord
 * @method OcAffiliate find() find($condition, array $params = array())
 * @method OcAffiliate findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcAffiliate findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAffiliate findBySql() findBySql($sql, array $params = array())
 * @method OcAffiliate[] findAll() findAll($condition = '', array $params = array())
 * @method OcAffiliate[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcAffiliate[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAffiliate[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcAffiliate with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcAffiliate extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcAffiliate the static model class
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
        return '{{affiliate}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'zone' => array(self::BELONGS_TO, 'OcZone', 'zone_id'),
            'country' => array(self::BELONGS_TO, 'OcCountry', 'country_id'),
            'affiliateActivities' => array(self::HAS_MANY, 'OcAffiliateActivity', 'affiliate_id'),
            'affiliateTransactions' => array(self::HAS_MANY, 'OcAffiliateTransaction', 'affiliate_id'),
            'orders' => array(self::HAS_MANY, 'OcOrder', 'affiliate_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'affiliate_id' => Yii::t('app', 'Affiliate'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'email' => Yii::t('app', 'Email'),
            'telephone' => Yii::t('app', 'Telephone'),
            'fax' => Yii::t('app', 'Fax'),
            'password' => Yii::t('app', 'Password'),
            'salt' => Yii::t('app', 'Salt'),
            'company' => Yii::t('app', 'Company'),
            'website' => Yii::t('app', 'Website'),
            'address_1' => Yii::t('app', 'Address 1'),
            'address_2' => Yii::t('app', 'Address 2'),
            'city' => Yii::t('app', 'City'),
            'postcode' => Yii::t('app', 'Postcode'),
            'country_id' => Yii::t('app', 'Country'),
            'zone_id' => Yii::t('app', 'Zone'),
            'code' => Yii::t('app', 'Code'),
            'commission' => Yii::t('app', 'Commission'),
            'tax' => Yii::t('app', 'Tax'),
            'payment' => Yii::t('app', 'Payment'),
            'cheque' => Yii::t('app', 'Cheque'),
            'paypal' => Yii::t('app', 'Paypal'),
            'bank_name' => Yii::t('app', 'Bank Name'),
            'bank_branch_number' => Yii::t('app', 'Bank Branch Number'),
            'bank_swift_code' => Yii::t('app', 'Bank Swift Code'),
            'bank_account_name' => Yii::t('app', 'Bank Account Name'),
            'bank_account_number' => Yii::t('app', 'Bank Account Number'),
            'ip' => Yii::t('app', 'Ip'),
            'status' => Yii::t('app', 'Status'),
            'approved' => Yii::t('app', 'Approved'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

