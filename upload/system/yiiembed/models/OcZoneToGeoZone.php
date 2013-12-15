<?php
/**
 * OcZoneToGeoZone
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{zone_to_geo_zone}}
 * @property integer $zone_to_geo_zone_id
 * @property integer $country_id
 * @property integer $zone_id
 * @property integer $geo_zone_id
 * @property string $date_added
 * @property string $date_modified
 *
 * Relations
 * @property OcCountry $country
 * @property OcZone $zone
 * @property OcGeoZone $geoZone
 *
 * @see CActiveRecord
 * @method OcZoneToGeoZone find() find($condition, array $params = array())
 * @method OcZoneToGeoZone findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcZoneToGeoZone findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcZoneToGeoZone findBySql() findBySql($sql, array $params = array())
 * @method OcZoneToGeoZone[] findAll() findAll($condition = '', array $params = array())
 * @method OcZoneToGeoZone[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcZoneToGeoZone[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcZoneToGeoZone[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcZoneToGeoZone with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcZoneToGeoZone extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcZoneToGeoZone the static model class
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
        return '{{zone_to_geo_zone}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'country' => array(self::BELONGS_TO, 'OcCountry', 'country_id'),
            'zone' => array(self::BELONGS_TO, 'OcZone', 'zone_id'),
            'geoZone' => array(self::BELONGS_TO, 'OcGeoZone', 'geo_zone_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'zone_to_geo_zone_id' => Yii::t('app', 'Zone To Geo Zone'),
            'country_id' => Yii::t('app', 'Country'),
            'zone_id' => Yii::t('app', 'Zone'),
            'geo_zone_id' => Yii::t('app', 'Geo Zone'),
            'date_added' => Yii::t('app', 'Date Added'),
            'date_modified' => Yii::t('app', 'Date Modified'),
        );
    }

}

