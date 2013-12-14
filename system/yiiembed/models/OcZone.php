<?php
/**
 * OcZone
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{zone}}
 * @property integer $zone_id
 * @property integer $country_id
 * @property string $name
 * @property string $code
 * @property integer $status
 *
 * Relations
 * @property OcAffiliate[] $affiliates
 * @property OcOrder[] $orders
 * @property OcOrder[] $orders1
 * @property OcCountry $country
 * @property OcZoneToGeoZone[] $zoneToGeoZones
 *
 * @see CActiveRecord
 * @method OcZone find() find($condition, array $params = array())
 * @method OcZone findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcZone findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcZone findBySql() findBySql($sql, array $params = array())
 * @method OcZone[] findAll() findAll($condition = '', array $params = array())
 * @method OcZone[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcZone[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcZone[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcZone with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
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
            'affiliates' => array(self::HAS_MANY, 'OcAffiliate', 'zone_id'),
            'orders' => array(self::HAS_MANY, 'OcOrder', 'payment_zone_id'),
            'orders1' => array(self::HAS_MANY, 'OcOrder', 'shipping_zone_id'),
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

