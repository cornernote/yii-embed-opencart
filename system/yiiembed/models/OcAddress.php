<?php
/**
 * OcAddress
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{address}}
 * @property integer $address_id
 * @property integer $customer_id
 * @property string $firstname
 * @property string $lastname
 * @property string $company
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $postcode
 * @property integer $country_id
 * @property integer $zone_id
 * @property string $custom_field
 *
 * Relations
 * @property OcCustomer $customer
 * @property OcCouponHistory[] $couponHistories
 * @property OcCustomer[] $customers
 *
 * @see CActiveRecord
 * @method OcAddress find() find($condition, array $params = array())
 * @method OcAddress findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcAddress findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAddress findBySql() findBySql($sql, array $params = array())
 * @method OcAddress[] findAll() findAll($condition = '', array $params = array())
 * @method OcAddress[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcAddress[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAddress[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcAddress with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcAddress extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcAddress the static model class
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
        return '{{address}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'customer' => array(self::BELONGS_TO, 'OcCustomer', 'customer_id'),
            'couponHistories' => array(self::HAS_MANY, 'OcCouponHistory', 'customer_id'),
            'customers' => array(self::HAS_MANY, 'OcCustomer', 'address_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'address_id' => Yii::t('app', 'Address'),
            'customer_id' => Yii::t('app', 'Customer'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'company' => Yii::t('app', 'Company'),
            'address_1' => Yii::t('app', 'Address 1'),
            'address_2' => Yii::t('app', 'Address 2'),
            'city' => Yii::t('app', 'City'),
            'postcode' => Yii::t('app', 'Postcode'),
            'country_id' => Yii::t('app', 'Country'),
            'zone_id' => Yii::t('app', 'Zone'),
            'custom_field' => Yii::t('app', 'Custom Field'),
        );
    }

}

