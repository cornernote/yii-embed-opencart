<?php
/**
 * OcCustomFieldValue
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{custom_field_value}}
 * @property integer $custom_field_value_id
 * @property integer $custom_field_id
 * @property integer $sort_order
 *
 * Relations
 * @property OcCustomField $customField
 * @property OcLanguage[] $languages
 * @property OcCustomerField[] $customerFields
 * @property OcOrderField[] $orderFields
 *
 * @see CActiveRecord
 * @method OcCustomFieldValue find() find($condition, array $params = array())
 * @method OcCustomFieldValue findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldValue findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldValue findBySql() findBySql($sql, array $params = array())
 * @method OcCustomFieldValue[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomFieldValue[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldValue[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldValue[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomFieldValue with() with()
 *
 * --- END GenerateProperties ---
 */

class OcCustomFieldValue extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomFieldValue the static model class
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
        return '{{custom_field_value}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'customField' => array(self::BELONGS_TO, 'OcCustomField', 'custom_field_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{custom_field_value_description}}(custom_field_value_id, language_id)'),
            'customerFields' => array(self::HAS_MANY, 'OcCustomerField', 'custom_field_value_id'),
            'orderFields' => array(self::HAS_MANY, 'OcOrderField', 'custom_field_value_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'custom_field_value_id' => Yii::t('app', 'Custom Field Value'),
            'custom_field_id' => Yii::t('app', 'Custom Field'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

