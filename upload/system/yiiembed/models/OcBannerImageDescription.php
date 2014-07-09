<?php
/**
 * OcBannerImageDescription
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcBannerImageDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcBannerImageDescription the static model class
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
        return '{{banner_image_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'banner_image_id' => Yii::t('app', 'Banner Image'),
            'language_id' => Yii::t('app', 'Language'),
            'banner_id' => Yii::t('app', 'Banner'),
            'title' => Yii::t('app', 'Title'),
        );
    }

}

