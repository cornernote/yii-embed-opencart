<?php
/**
 * OcCustomerField
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer_field}}
 * @property integer $customer_id
 * @property integer $custom_field_id
 * @property integer $custom_field_value_id
 * @property integer $name
 * @property string $value
 * @property integer $sort_order
 *
 * Relations
 * @property OcCustomer $customer
 * @property OcCustomField $customField
 * @property OcCustomFieldValue $customFieldValue
 *
 * @see CActiveRecord
 * @method OcCustomerField find() find($condition, array $params = array())
 * @method OcCustomerField findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerField findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerField findBySql() findBySql($sql, array $params = array())
 * @method OcCustomerField[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomerField[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerField[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerField[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomerField with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCustomerField extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerField the static model class
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
        return '{{customer_field}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'customer' => array(self::BELONGS_TO, 'OcCustomer', 'customer_id'),
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
            'customer_id' => Yii::t('app', 'Customer'),
            'custom_field_id' => Yii::t('app', 'Custom Field'),
            'custom_field_value_id' => Yii::t('app', 'Custom Field Value'),
            'name' => Yii::t('app', 'Name'),
            'value' => Yii::t('app', 'Value'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

