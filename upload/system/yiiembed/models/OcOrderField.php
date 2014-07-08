<?php
/**
 * OcOrderField
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{order_field}}
 * @property integer $order_id
 * @property integer $custom_field_id
 * @property integer $custom_field_value_id
 * @property integer $name
 * @property string $value
 * @property integer $sort_order
 *
 * Relations
 * @property OcOrder $order
 * @property OcCustomField $customField
 * @property OcCustomFieldValue $customFieldValue
 *
 * @see CActiveRecord
 * @method OcOrderField find() find($condition, array $params = array())
 * @method OcOrderField findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOrderField findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderField findBySql() findBySql($sql, array $params = array())
 * @method OcOrderField[] findAll() findAll($condition = '', array $params = array())
 * @method OcOrderField[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOrderField[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderField[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOrderField with() with()
 *
 * --- END GenerateProperties ---
 */

class OcOrderField extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderField the static model class
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
        return '{{order_field}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'customField' => array(self::BELONGS_TO, 'OcCustomField', 'custom_field_id'),
            'customFieldValue' => array(self::BELONGS_TO, 'OcCustomFieldValue', 'custom_field_value_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_id' => Yii::t('app', 'Order'),
            'custom_field_id' => Yii::t('app', 'Custom Field'),
            'custom_field_value_id' => Yii::t('app', 'Custom Field Value'),
            'name' => Yii::t('app', 'Name'),
            'value' => Yii::t('app', 'Value'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

