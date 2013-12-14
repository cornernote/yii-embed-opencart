<?php
/**
 * OcTaxRate
 *
 * --- BEGIN GenerateProperties ---
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
 * @property OcGeoZone $geoZone
 * @property OcCustomerGroup[] $customerGroups
 * @property OcTaxRule[] $taxRules
 *
 * @see CActiveRecord
 * @method OcTaxRate find() find($condition, array $params = array())
 * @method OcTaxRate findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcTaxRate findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcTaxRate findBySql() findBySql($sql, array $params = array())
 * @method OcTaxRate[] findAll() findAll($condition = '', array $params = array())
 * @method OcTaxRate[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcTaxRate[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcTaxRate[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcTaxRate with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
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

