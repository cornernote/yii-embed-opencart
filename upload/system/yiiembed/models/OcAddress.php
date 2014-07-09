<?php
/**
 * OcAddress
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{address}}
 * @property integer $address_id
 * @property integer $customer_id
 * @property string $firstname
 * @property string $lastname
 * @property string $company
 * @property string $company_id
 * @property string $tax_id
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $postcode
 * @property integer $country_id
 * @property integer $zone_id
 *
 * Relations
 * @property \OcCustomer $customer
 * @property \OcCountry $country
 * @property \OcZone $zone
 * @property \OcCustomer[] $customers
 *
 * @see \CActiveRecord
 * @method \OcAddress find($condition = '', array $params = array())
 * @method \OcAddress findByPk($pk, $condition = '', array $params = array())
 * @method \OcAddress findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcAddress findBySql($sql, array $params = array())
 * @method \OcAddress[] findAll($condition = '', array $params = array())
 * @method \OcAddress[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcAddress[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcAddress[] findAllBySql($sql, array $params = array())
 * @method \OcAddress with()
 * @method \OcAddress together()
 * @method \OcAddress cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcAddress resetScope($resetDefault = true)
 * @method \OcAddress populateRecord($attributes, $callAfterFind = true)
 * @method \OcAddress[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
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
            'country' => array(self::BELONGS_TO, 'OcCountry', 'country_id'),
            'zone' => array(self::BELONGS_TO, 'OcZone', 'zone_id'),
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
            'company_id' => Yii::t('app', 'Company'),
            'tax_id' => Yii::t('app', 'Tax'),
            'address_1' => Yii::t('app', 'Address 1'),
            'address_2' => Yii::t('app', 'Address 2'),
            'city' => Yii::t('app', 'City'),
            'postcode' => Yii::t('app', 'Postcode'),
            'country_id' => Yii::t('app', 'Country'),
            'zone_id' => Yii::t('app', 'Zone'),
        );
    }

}

