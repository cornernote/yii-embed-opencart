<?php
/**
 * OcCustomFieldCustomerGroup
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{custom_field_customer_group}}
 * @property integer $custom_field_id
 * @property string $location
 * @property integer $customer_group_id
 * @property integer $required
 *
 * Relations
 * @property OcCustomerGroup $customerGroup
 *
 * @see CActiveRecord
 * @method OcCustomFieldCustomerGroup find() find($condition, array $params = array())
 * @method OcCustomFieldCustomerGroup findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldCustomerGroup findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldCustomerGroup findBySql() findBySql($sql, array $params = array())
 * @method OcCustomFieldCustomerGroup[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomFieldCustomerGroup[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldCustomerGroup[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldCustomerGroup[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomFieldCustomerGroup with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCustomFieldCustomerGroup extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomFieldCustomerGroup the static model class
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
        return '{{custom_field_customer_group}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'customerGroup' => array(self::BELONGS_TO, 'OcCustomerGroup', 'customer_group_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'custom_field_id' => Yii::t('app', 'Custom Field'),
            'location' => Yii::t('app', 'Location'),
            'customer_group_id' => Yii::t('app', 'Customer Group'),
            'required' => Yii::t('app', 'Required'),
        );
    }

}

