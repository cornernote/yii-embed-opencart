<?php
/**
 * OcFilterDescription
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcFilterDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcFilterDescription the static model class
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
        return '{{filter_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'filter_id' => Yii::t('app', 'Filter'),
            'language_id' => Yii::t('app', 'Language'),
            'filter_group_id' => Yii::t('app', 'Filter Group'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

