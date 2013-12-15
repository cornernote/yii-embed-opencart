<?php
/**
 * OcOrderFraud
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{order_fraud}}
 * @property integer $order_id
 * @property integer $customer_id
 * @property string $country_match
 * @property string $country_code
 * @property string $high_risk_country
 * @property integer $distance
 * @property string $ip_region
 * @property string $ip_city
 * @property number $ip_latitude
 * @property number $ip_longitude
 * @property string $ip_isp
 * @property string $ip_org
 * @property integer $ip_asnum
 * @property string $ip_user_type
 * @property string $ip_country_confidence
 * @property string $ip_region_confidence
 * @property string $ip_city_confidence
 * @property string $ip_postal_confidence
 * @property string $ip_postal_code
 * @property integer $ip_accuracy_radius
 * @property string $ip_net_speed_cell
 * @property integer $ip_metro_code
 * @property integer $ip_area_code
 * @property string $ip_time_zone
 * @property string $ip_region_name
 * @property string $ip_domain
 * @property string $ip_country_name
 * @property string $ip_continent_code
 * @property string $ip_corporate_proxy
 * @property string $anonymous_proxy
 * @property integer $proxy_score
 * @property string $is_trans_proxy
 * @property string $free_mail
 * @property string $carder_email
 * @property string $high_risk_username
 * @property string $high_risk_password
 * @property string $bin_match
 * @property string $bin_country
 * @property string $bin_name_match
 * @property string $bin_name
 * @property string $bin_phone_match
 * @property string $bin_phone
 * @property string $customer_phone_in_billing_location
 * @property string $ship_forward
 * @property string $city_postal_match
 * @property string $ship_city_postal_match
 * @property number $score
 * @property string $explanation
 * @property number $risk_score
 * @property integer $queries_remaining
 * @property string $maxmind_id
 * @property string $error
 * @property string $date_added
 *
 * Relations
 * @property OcOrder $order
 * @property OcCustomer $customer
 *
 * @see CActiveRecord
 * @method OcOrderFraud find() find($condition, array $params = array())
 * @method OcOrderFraud findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOrderFraud findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderFraud findBySql() findBySql($sql, array $params = array())
 * @method OcOrderFraud[] findAll() findAll($condition = '', array $params = array())
 * @method OcOrderFraud[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOrderFraud[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderFraud[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOrderFraud with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcOrderFraud extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderFraud the static model class
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
        return '{{order_fraud}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
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
            'order_id' => Yii::t('app', 'Order'),
            'customer_id' => Yii::t('app', 'Customer'),
            'country_match' => Yii::t('app', 'Country Match'),
            'country_code' => Yii::t('app', 'Country Code'),
            'high_risk_country' => Yii::t('app', 'High Risk Country'),
            'distance' => Yii::t('app', 'Distance'),
            'ip_region' => Yii::t('app', 'Ip Region'),
            'ip_city' => Yii::t('app', 'Ip City'),
            'ip_latitude' => Yii::t('app', 'Ip Latitude'),
            'ip_longitude' => Yii::t('app', 'Ip Longitude'),
            'ip_isp' => Yii::t('app', 'Ip Isp'),
            'ip_org' => Yii::t('app', 'Ip Org'),
            'ip_asnum' => Yii::t('app', 'Ip Asnum'),
            'ip_user_type' => Yii::t('app', 'Ip User Type'),
            'ip_country_confidence' => Yii::t('app', 'Ip Country Confidence'),
            'ip_region_confidence' => Yii::t('app', 'Ip Region Confidence'),
            'ip_city_confidence' => Yii::t('app', 'Ip City Confidence'),
            'ip_postal_confidence' => Yii::t('app', 'Ip Postal Confidence'),
            'ip_postal_code' => Yii::t('app', 'Ip Postal Code'),
            'ip_accuracy_radius' => Yii::t('app', 'Ip Accuracy Radius'),
            'ip_net_speed_cell' => Yii::t('app', 'Ip Net Speed Cell'),
            'ip_metro_code' => Yii::t('app', 'Ip Metro Code'),
            'ip_area_code' => Yii::t('app', 'Ip Area Code'),
            'ip_time_zone' => Yii::t('app', 'Ip Time Zone'),
            'ip_region_name' => Yii::t('app', 'Ip Region Name'),
            'ip_domain' => Yii::t('app', 'Ip Domain'),
            'ip_country_name' => Yii::t('app', 'Ip Country Name'),
            'ip_continent_code' => Yii::t('app', 'Ip Continent Code'),
            'ip_corporate_proxy' => Yii::t('app', 'Ip Corporate Proxy'),
            'anonymous_proxy' => Yii::t('app', 'Anonymous Proxy'),
            'proxy_score' => Yii::t('app', 'Proxy Score'),
            'is_trans_proxy' => Yii::t('app', 'Is Trans Proxy'),
            'free_mail' => Yii::t('app', 'Free Mail'),
            'carder_email' => Yii::t('app', 'Carder Email'),
            'high_risk_username' => Yii::t('app', 'High Risk Username'),
            'high_risk_password' => Yii::t('app', 'High Risk Password'),
            'bin_match' => Yii::t('app', 'Bin Match'),
            'bin_country' => Yii::t('app', 'Bin Country'),
            'bin_name_match' => Yii::t('app', 'Bin Name Match'),
            'bin_name' => Yii::t('app', 'Bin Name'),
            'bin_phone_match' => Yii::t('app', 'Bin Phone Match'),
            'bin_phone' => Yii::t('app', 'Bin Phone'),
            'customer_phone_in_billing_location' => Yii::t('app', 'Customer Phone In Billing Location'),
            'ship_forward' => Yii::t('app', 'Ship Forward'),
            'city_postal_match' => Yii::t('app', 'City Postal Match'),
            'ship_city_postal_match' => Yii::t('app', 'Ship City Postal Match'),
            'score' => Yii::t('app', 'Score'),
            'explanation' => Yii::t('app', 'Explanation'),
            'risk_score' => Yii::t('app', 'Risk Score'),
            'queries_remaining' => Yii::t('app', 'Queries Remaining'),
            'maxmind_id' => Yii::t('app', 'Maxmind'),
            'error' => Yii::t('app', 'Error'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

