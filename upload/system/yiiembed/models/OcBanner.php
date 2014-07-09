<?php
/**
 * OcBanner
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{banner}}
 * @property integer $banner_id
 * @property string $name
 * @property integer $status
 *
 * Relations
 * @property \OcBannerImage[] $bannerImages
 *
 * @see \CActiveRecord
 * @method \OcBanner find($condition = '', array $params = array())
 * @method \OcBanner findByPk($pk, $condition = '', array $params = array())
 * @method \OcBanner findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcBanner findBySql($sql, array $params = array())
 * @method \OcBanner[] findAll($condition = '', array $params = array())
 * @method \OcBanner[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcBanner[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcBanner[] findAllBySql($sql, array $params = array())
 * @method \OcBanner with()
 * @method \OcBanner together()
 * @method \OcBanner cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcBanner resetScope($resetDefault = true)
 * @method \OcBanner populateRecord($attributes, $callAfterFind = true)
 * @method \OcBanner[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcBanner extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcBanner the static model class
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
        return '{{banner}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'bannerImages' => array(self::HAS_MANY, 'OcBannerImage', 'banner_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'banner_id' => Yii::t('app', 'Banner'),
            'name' => Yii::t('app', 'Name'),
            'status' => Yii::t('app', 'Status'),
        );
    }

}

