<?php
/**
 * OcGeoZone
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{geo_zone}}
 * @property integer $geo_zone_id
 * @property string $name
 * @property string $description
 * @property string $date_modified
 * @property string $date_added
 *
 * Relations
 * @property \OcTaxRate[] $taxRates
 * @property \OcZoneToGeoZone[] $zoneToGeoZones
 *
 * @see \CActiveRecord
 * @method \OcGeoZone find($condition = '', array $params = array())
 * @method \OcGeoZone findByPk($pk, $condition = '', array $params = array())
 * @method \OcGeoZone findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcGeoZone findBySql($sql, array $params = array())
 * @method \OcGeoZone[] findAll($condition = '', array $params = array())
 * @method \OcGeoZone[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcGeoZone[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcGeoZone[] findAllBySql($sql, array $params = array())
 * @method \OcGeoZone with()
 * @method \OcGeoZone together()
 * @method \OcGeoZone cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcGeoZone resetScope($resetDefault = true)
 * @method \OcGeoZone populateRecord($attributes, $callAfterFind = true)
 * @method \OcGeoZone[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcGeoZone extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcGeoZone the static model class
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
        return '{{geo_zone}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'taxRates' => array(self::HAS_MANY, 'OcTaxRate', 'geo_zone_id'),
            'zoneToGeoZones' => array(self::HAS_MANY, 'OcZoneToGeoZone', 'geo_zone_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'geo_zone_id' => Yii::t('app', 'Geo Zone'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'date_modified' => Yii::t('app', 'Date Modified'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

