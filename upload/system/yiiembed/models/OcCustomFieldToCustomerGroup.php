<?php
/**
 * OcCustomFieldToCustomerGroup
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{custom_field_to_customer_group}}
 * @property integer $custom_field_id
 * @property integer $customer_group_id
 *
 * @see CActiveRecord
 * @method OcCustomFieldToCustomerGroup find() find($condition, array $params = array())
 * @method OcCustomFieldToCustomerGroup findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldToCustomerGroup findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldToCustomerGroup findBySql() findBySql($sql, array $params = array())
 * @method OcCustomFieldToCustomerGroup[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomFieldToCustomerGroup[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldToCustomerGroup[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldToCustomerGroup[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomFieldToCustomerGroup with() with()
 *
 * --- END GenerateProperties ---
 */

class OcCustomFieldToCustomerGroup extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomFieldToCustomerGroup the static model class
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
        return '{{custom_field_to_customer_group}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'custom_field_id' => Yii::t('app', 'Custom Field'),
            'customer_group_id' => Yii::t('app', 'Customer Group'),
        );
    }

}

