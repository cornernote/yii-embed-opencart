<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{banner_image}}
 * @property integer $banner_image_id
 * @property integer $banner_id
 * @property string $link
 * @property string $image
 * @property integer $sort_order
 *
 * Relations
 * @property OcBanner $banner
 *
 * @see CActiveRecord
 * @method OcBannerImage find() find($condition, array $params = array())
 * @method OcBannerImage findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcBannerImage findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcBannerImage findBySql() findBySql($sql, array $params = array())
 * @method OcBannerImage[] findAll() findAll($condition = '', array $params = array())
 * @method OcBannerImage[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcBannerImage[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcBannerImage[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcBannerImage with() with()
 *
 * --- END GenerateProperties ---
 */

class OcBannerImage extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcBannerImage the static model class
     */
    public static function model($className=__CLASS__)
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
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

