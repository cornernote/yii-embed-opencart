<?php
/**
 * OcBannerImage
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{banner_image}}
 * @property integer $banner_image_id
 * @property integer $banner_id
 * @property string $link
 * @property string $image
 *
 * Relations
 * @property \OcBanner $banner
 * @property \OcLanguage[] $languages
 *
 * @see \CActiveRecord
 * @method \OcBannerImage find($condition = '', array $params = array())
 * @method \OcBannerImage findByPk($pk, $condition = '', array $params = array())
 * @method \OcBannerImage findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcBannerImage findBySql($sql, array $params = array())
 * @method \OcBannerImage[] findAll($condition = '', array $params = array())
 * @method \OcBannerImage[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcBannerImage[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcBannerImage[] findAllBySql($sql, array $params = array())
 * @method \OcBannerImage with()
 * @method \OcBannerImage together()
 * @method \OcBannerImage cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcBannerImage resetScope($resetDefault = true)
 * @method \OcBannerImage populateRecord($attributes, $callAfterFind = true)
 * @method \OcBannerImage[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcBannerImage extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcBannerImage the static model class
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
        return '{{banner_image}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'banner' => array(self::BELONGS_TO, 'OcBanner', 'banner_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{banner_image_description}}(banner_image_id, language_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'banner_image_id' => Yii::t('app', 'Banner Image'),
            'banner_id' => Yii::t('app', 'Banner'),
            'link' => Yii::t('app', 'Link'),
            'image' => Yii::t('app', 'Image'),
        );
    }

}

