<?php
/**
 * OcWeightClassDescription
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcWeightClassDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcWeightClassDescription the static model class
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
        return '{{weight_class_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'weight_class_id' => Yii::t('app', 'Weight Class'),
            'language_id' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'unit' => Yii::t('app', 'Unit'),
        );
    }

}

