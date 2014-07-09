<?php
/**
 * OcZone
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{zone}}
 * @property integer $zone_id
 * @property integer $country_id
 * @property string $name
 * @property string $code
 * @property integer $status
 *
 * Relations
 * @property \OcAddress[] $addresses
 * @property \OcAffiliate[] $affiliates
 * @property \OcCountry $country
 * @property \OcZoneToGeoZone[] $zoneToGeoZones
 *
 * @see \CActiveRecord
 * @method \OcZone find($condition = '', array $params = array())
 * @method \OcZone findByPk($pk, $condition = '', array $params = array())
 * @method \OcZone findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcZone findBySql($sql, array $params = array())
 * @method \OcZone[] findAll($condition = '', array $params = array())
 * @method \OcZone[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcZone[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcZone[] findAllBySql($sql, array $params = array())
 * @method \OcZone with()
 * @method \OcZone together()
 * @method \OcZone cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcZone resetScope($resetDefault = true)
 * @method \OcZone populateRecord($attributes, $callAfterFind = true)
 * @method \OcZone[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcZone extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcZone the static model class
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
        return '{{zone}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'addresses' => array(self::HAS_MANY, 'OcAddress', 'zone_id'),
            'affiliates' => array(self::HAS_MANY, 'OcAffiliate', 'zone_id'),
            'country' => array(self::BELONGS_TO, 'OcCountry', 'country_id'),
            'zoneToGeoZones' => array(self::HAS_MANY, 'OcZoneToGeoZone', 'zone_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'zone_id' => Yii::t('app', 'Zone'),
            'country_id' => Yii::t('app', 'Country'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'Code'),
            'status' => Yii::t('app', 'Status'),
        );
    }

}

