<?php
/**
 * OcTaxRateToCustomerGroup
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
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

