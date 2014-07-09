<?php
/**
 * OcCustomFieldToCustomerGroup
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
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

