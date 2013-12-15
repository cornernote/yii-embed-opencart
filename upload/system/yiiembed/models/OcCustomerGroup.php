<?php
/**
 * OcCustomerGroup
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer_group}}
 * @property integer $customer_group_id
 * @property integer $approval
 * @property integer $company_id_display
 * @property integer $company_id_required
 * @property integer $tax_id_display
 * @property integer $tax_id_required
 * @property integer $sort_order
 *
 * Relations
 * @property OcCustomField[] $customFields
 * @property OcCustomer[] $customers
 * @property OcLanguage[] $languages
 * @property OcOrder[] $orders
 * @property OcProductDiscount[] $productDiscounts
 * @property OcProductProfile[] $productProfiles
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
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCustomerGroup extends CActiveRecord
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
            'customFields' => array(self::MANY_MANY, 'OcCustomField', '{{custom_field_to_customer_group}}(customer_group_id, custom_field_id)'),
            'customers' => array(self::HAS_MANY, 'OcCustomer', 'customer_group_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{customer_group_description}}(customer_group_id, language_id)'),
            'orders' => array(self::HAS_MANY, 'OcOrder', 'customer_group_id'),
            'productDiscounts' => array(self::HAS_MANY, 'OcProductDiscount', 'customer_group_id'),
            'productProfiles' => array(self::HAS_MANY, 'OcProductProfile', 'customer_group_id'),
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
            'company_id_display' => Yii::t('app', 'Company Id Display'),
            'company_id_required' => Yii::t('app', 'Company Id Required'),
            'tax_id_display' => Yii::t('app', 'Tax Id Display'),
            'tax_id_required' => Yii::t('app', 'Tax Id Required'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

