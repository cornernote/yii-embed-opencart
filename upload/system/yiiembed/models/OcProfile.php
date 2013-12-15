<?php
/**
 * OcProfile
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{profile}}
 * @property integer $profile_id
 * @property integer $sort_order
 * @property integer $status
 * @property number $price
 * @property string $frequency
 * @property string $duration
 * @property string $cycle
 * @property integer $trial_status
 * @property number $trial_price
 * @property string $trial_frequency
 * @property string $trial_duration
 * @property string $trial_cycle
 *
 * Relations
 * @property OcOrderRecurring[] $orderRecurrings
 * @property OcProductProfile[] $productProfiles
 * @property OcLanguage[] $languages
 *
 * @see CActiveRecord
 * @method OcProfile find() find($condition, array $params = array())
 * @method OcProfile findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProfile findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProfile findBySql() findBySql($sql, array $params = array())
 * @method OcProfile[] findAll() findAll($condition = '', array $params = array())
 * @method OcProfile[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProfile[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProfile[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProfile with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProfile extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProfile the static model class
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
        return '{{profile}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orderRecurrings' => array(self::HAS_MANY, 'OcOrderRecurring', 'profile_id'),
            'productProfiles' => array(self::HAS_MANY, 'OcProductProfile', 'profile_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{profile_description}}(profile_id, language_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'profile_id' => Yii::t('app', 'Profile'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
            'price' => Yii::t('app', 'Price'),
            'frequency' => Yii::t('app', 'Frequency'),
            'duration' => Yii::t('app', 'Duration'),
            'cycle' => Yii::t('app', 'Cycle'),
            'trial_status' => Yii::t('app', 'Trial Status'),
            'trial_price' => Yii::t('app', 'Trial Price'),
            'trial_frequency' => Yii::t('app', 'Trial Frequency'),
            'trial_duration' => Yii::t('app', 'Trial Duration'),
            'trial_cycle' => Yii::t('app', 'Trial Cycle'),
        );
    }

}

