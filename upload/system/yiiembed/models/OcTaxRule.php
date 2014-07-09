<?php
/**
 * OcTaxRule
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{tax_rule}}
 * @property integer $tax_rule_id
 * @property integer $tax_class_id
 * @property integer $tax_rate_id
 * @property string $based
 * @property integer $priority
 *
 * Relations
 * @property \OcTaxClass $taxClass
 * @property \OcTaxRate $taxRate
 *
 * @see \CActiveRecord
 * @method \OcTaxRule find($condition = '', array $params = array())
 * @method \OcTaxRule findByPk($pk, $condition = '', array $params = array())
 * @method \OcTaxRule findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcTaxRule findBySql($sql, array $params = array())
 * @method \OcTaxRule[] findAll($condition = '', array $params = array())
 * @method \OcTaxRule[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcTaxRule[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcTaxRule[] findAllBySql($sql, array $params = array())
 * @method \OcTaxRule with()
 * @method \OcTaxRule together()
 * @method \OcTaxRule cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcTaxRule resetScope($resetDefault = true)
 * @method \OcTaxRule populateRecord($attributes, $callAfterFind = true)
 * @method \OcTaxRule[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcTaxRule extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcTaxRule the static model class
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
        return '{{tax_rule}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'taxClass' => array(self::BELONGS_TO, 'OcTaxClass', 'tax_class_id'),
            'taxRate' => array(self::BELONGS_TO, 'OcTaxRate', 'tax_rate_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'tax_rule_id' => Yii::t('app', 'Tax Rule'),
            'tax_class_id' => Yii::t('app', 'Tax Class'),
            'tax_rate_id' => Yii::t('app', 'Tax Rate'),
            'based' => Yii::t('app', 'Based'),
            'priority' => Yii::t('app', 'Priority'),
        );
    }

}

