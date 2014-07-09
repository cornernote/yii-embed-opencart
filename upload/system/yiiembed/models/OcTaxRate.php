<?php
/**
 * OcTaxRate
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{tax_rate}}
 * @property integer $tax_rate_id
 * @property integer $geo_zone_id
 * @property string $name
 * @property number $rate
 * @property string $type
 * @property string $date_added
 * @property string $date_modified
 *
 * Relations
 * @property \OcGeoZone $geoZone
 * @property \OcCustomerGroup[] $customerGroups
 * @property \OcTaxRule[] $taxRules
 *
 * @see \CActiveRecord
 * @method \OcTaxRate find($condition = '', array $params = array())
 * @method \OcTaxRate findByPk($pk, $condition = '', array $params = array())
 * @method \OcTaxRate findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcTaxRate findBySql($sql, array $params = array())
 * @method \OcTaxRate[] findAll($condition = '', array $params = array())
 * @method \OcTaxRate[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcTaxRate[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcTaxRate[] findAllBySql($sql, array $params = array())
 * @method \OcTaxRate with()
 * @method \OcTaxRate together()
 * @method \OcTaxRate cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcTaxRate resetScope($resetDefault = true)
 * @method \OcTaxRate populateRecord($attributes, $callAfterFind = true)
 * @method \OcTaxRate[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcTaxRate extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcTaxRate the static model class
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
        return '{{tax_rate}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'geoZone' => array(self::BELONGS_TO, 'OcGeoZone', 'geo_zone_id'),
            'customerGroups' => array(self::MANY_MANY, 'OcCustomerGroup', '{{tax_rate_to_customer_group}}(tax_rate_id, customer_group_id)'),
            'taxRules' => array(self::HAS_MANY, 'OcTaxRule', 'tax_rate_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'tax_rate_id' => Yii::t('app', 'Tax Rate'),
            'geo_zone_id' => Yii::t('app', 'Geo Zone'),
            'name' => Yii::t('app', 'Name'),
            'rate' => Yii::t('app', 'Rate'),
            'type' => Yii::t('app', 'Type'),
            'date_added' => Yii::t('app', 'Date Added'),
            'date_modified' => Yii::t('app', 'Date Modified'),
        );
    }

}

