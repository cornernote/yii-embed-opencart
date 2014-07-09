<?php
/**
 * OcOptionValueDescription
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcOptionValueDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOptionValueDescription the static model class
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
        return '{{option_value_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'option_value_id' => Yii::t('app', 'Option Value'),
            'language_id' => Yii::t('app', 'Language'),
            'option_id' => Yii::t('app', 'Option'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

