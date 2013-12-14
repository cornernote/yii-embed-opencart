<?php
/**
 * OcGeoZone
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{geo_zone}}
 * @property integer $geo_zone_id
 * @property string $name
 * @property string $description
 * @property string $date_modified
 * @property string $date_added
 *
 * Relations
 * @property OcTaxRate[] $taxRates
 * @property OcZoneToGeoZone[] $zoneToGeoZones
 *
 * @see CActiveRecord
 * @method OcGeoZone find() find($condition, array $params = array())
 * @method OcGeoZone findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcGeoZone findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcGeoZone findBySql() findBySql($sql, array $params = array())
 * @method OcGeoZone[] findAll() findAll($condition = '', array $params = array())
 * @method OcGeoZone[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcGeoZone[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcGeoZone[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcGeoZone with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
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

