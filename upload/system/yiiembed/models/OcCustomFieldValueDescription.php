<?php
/**
 * OcCustomFieldValueDescription
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcCustomFieldValueDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomFieldValueDescription the static model class
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
        return '{{custom_field_value_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'custom_field_value_id' => Yii::t('app', 'Custom Field Value'),
            'language_id' => Yii::t('app', 'Language'),
            'custom_field_id' => Yii::t('app', 'Custom Field'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

