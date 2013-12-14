<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{tax_rule}}
 * @property integer $tax_rule_id
 * @property integer $tax_class_id
 * @property integer $tax_rate_id
 * @property string $based
 * @property integer $priority
 *
 * Relations
 * @property OcTaxRate $taxRate
 * @property OcTaxClass $taxClass
 *
 * @see CActiveRecord
 * @method OcTaxRule find() find($condition, array $params = array())
 * @method OcTaxRule findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcTaxRule findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcTaxRule findBySql() findBySql($sql, array $params = array())
 * @method OcTaxRule[] findAll() findAll($condition = '', array $params = array())
 * @method OcTaxRule[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcTaxRule[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcTaxRule[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcTaxRule with() with()
 *
 * --- END GenerateProperties ---
 */

class OcTaxRule extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcTaxRule the static model class
     */
    public static function model($className=__CLASS__)
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
            'taxRate' => array(self::BELONGS_TO, 'OcTaxRate', 'tax_rate_id'),
            'taxClass' => array(self::BELONGS_TO, 'OcTaxClass', 'tax_class_id'),
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

