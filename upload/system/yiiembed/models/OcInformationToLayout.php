<?php
/**
 * OcInformationToLayout
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcInformationToLayout extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcInformationToLayout the static model class
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
        return '{{information_to_layout}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'information_id' => Yii::t('app', 'Information'),
            'store_id' => Yii::t('app', 'Store'),
            'layout_id' => Yii::t('app', 'Layout'),
        );
    }

}

