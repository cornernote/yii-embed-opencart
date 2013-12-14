<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer_group}}
 * @property integer $customer_group_id
 * @property integer $approval
 * @property integer $sort_order
 *
 * Relations
 * @property OcCustomFieldCustomerGroup[] $customFieldCustomerGroups
 * @property OcCustomer[] $customers
 * @property OcLanguage[] $languages
 * @property OcOrder[] $orders
 * @property OcProductDiscount[] $productDiscounts
 * @property OcProductReward[] $productRewards
 * @property OcProductSpecial[] $productSpecials
 * @property OcTaxRate[] $taxRates
 *
 * @see CActiveRecord
 * @method OcCustomerGroup find() find($condition, array $params = array())
 * @method OcCustomerGroup findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerGroup findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerGroup findBySql() findBySql($sql, array $params = array())
 * @method OcCustomerGroup[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomerGroup[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerGroup[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerGroup[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomerGroup with() with()
 *
 * --- END GenerateProperties ---
 */

class OcCustomerGroup extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerGroup the static model class
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
        return '{{customer_group}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'customFieldCustomerGroups' => array(self::HAS_MANY, 'OcCustomFieldCustomerGroup', 'customer_group_id'),
            'customers' => array(self::HAS_MANY, 'OcCustomer', 'customer_group_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{customer_group_description}}(customer_group_id, language_id)'),
            'orders' => array(self::HAS_MANY, 'OcOrder', 'customer_group_id'),
            'productDiscounts' => array(self::HAS_MANY, 'OcProductDiscount', 'customer_group_id'),
            'productRewards' => array(self::HAS_MANY, 'OcProductReward', 'customer_group_id'),
            'productSpecials' => array(self::HAS_MANY, 'OcProductSpecial', 'customer_group_id'),
            'taxRates' => array(self::MANY_MANY, 'OcTaxRate', '{{tax_rate_to_customer_group}}(customer_group_id, tax_rate_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'customer_group_id' => Yii::t('app', 'Customer Group'),
            'approval' => Yii::t('app', 'Approval'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

