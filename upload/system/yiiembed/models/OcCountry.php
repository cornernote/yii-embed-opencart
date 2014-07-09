<?php
/**
 * OcCountry
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{country}}
 * @property integer $country_id
 * @property string $name
 * @property string $iso_code_2
 * @property string $iso_code_3
 * @property string $address_format
 * @property integer $postcode_required
 * @property integer $status
 *
 * Relations
 * @property \OcAddress[] $addresses
 * @property \OcAffiliate[] $affiliates
 * @property \OcZone[] $zones
 * @property \OcZoneToGeoZone[] $zoneToGeoZones
 *
 * @see \CActiveRecord
 * @method \OcCountry find($condition = '', array $params = array())
 * @method \OcCountry findByPk($pk, $condition = '', array $params = array())
 * @method \OcCountry findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCountry findBySql($sql, array $params = array())
 * @method \OcCountry[] findAll($condition = '', array $params = array())
 * @method \OcCountry[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCountry[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCountry[] findAllBySql($sql, array $params = array())
 * @method \OcCountry with()
 * @method \OcCountry together()
 * @method \OcCountry cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCountry resetScope($resetDefault = true)
 * @method \OcCountry populateRecord($attributes, $callAfterFind = true)
 * @method \OcCountry[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCountry extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCountry the static model class
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
        return '{{country}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'addresses' => array(self::HAS_MANY, 'OcAddress', 'country_id'),
            'affiliates' => array(self::HAS_MANY, 'OcAffiliate', 'country_id'),
            'zones' => array(self::HAS_MANY, 'OcZone', 'country_id'),
            'zoneToGeoZones' => array(self::HAS_MANY, 'OcZoneToGeoZone', 'country_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'country_id' => Yii::t('app', 'Country'),
            'name' => Yii::t('app', 'Name'),
            'iso_code_2' => Yii::t('app', 'Iso Code 2'),
            'iso_code_3' => Yii::t('app', 'Iso Code 3'),
            'address_format' => Yii::t('app', 'Address Format'),
            'postcode_required' => Yii::t('app', 'Postcode Required'),
            'status' => Yii::t('app', 'Status'),
        );
    }

}

