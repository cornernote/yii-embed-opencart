<?php
/**
 * OcTaxRateToCustomerGroup
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{tax_rate_to_customer_group}}
 * @property integer $tax_rate_id
 * @property integer $customer_group_id
 *
 * @see CActiveRecord
 * @method OcTaxRateToCustomerGroup find() find($condition, array $params = array())
 * @method OcTaxRateToCustomerGroup findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcTaxRateToCustomerGroup findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcTaxRateToCustomerGroup findBySql() findBySql($sql, array $params = array())
 * @method OcTaxRateToCustomerGroup[] findAll() findAll($condition = '', array $params = array())
 * @method OcTaxRateToCustomerGroup[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcTaxRateToCustomerGroup[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcTaxRateToCustomerGroup[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcTaxRateToCustomerGroup with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcTaxRateToCustomerGroup extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcTaxRateToCustomerGroup the static model class
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
        return '{{tax_rate_to_customer_group}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'tax_rate_id' => Yii::t('app', 'Tax Rate'),
            'customer_group_id' => Yii::t('app', 'Customer Group'),
        );
    }

}

