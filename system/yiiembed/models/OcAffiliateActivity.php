<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{affiliate_activity}}
 * @property integer $activity_id
 * @property integer $affiliate_id
 * @property string $key
 * @property string $data
 * @property string $ip
 * @property string $date_added
 *
 * Relations
 * @property OcAffiliate $affiliate
 *
 * @see CActiveRecord
 * @method OcAffiliateActivity find() find($condition, array $params = array())
 * @method OcAffiliateActivity findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcAffiliateActivity findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAffiliateActivity findBySql() findBySql($sql, array $params = array())
 * @method OcAffiliateActivity[] findAll() findAll($condition = '', array $params = array())
 * @method OcAffiliateActivity[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcAffiliateActivity[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAffiliateActivity[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcAffiliateActivity with() with()
 *
 * --- END GenerateProperties ---
 */

class OcAffiliateActivity extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcAffiliateActivity the static model class
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
        return '{{affiliate_activity}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'affiliate' => array(self::BELONGS_TO, 'OcAffiliate', 'affiliate_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'activity_id' => Yii::t('app', 'Activity'),
            'affiliate_id' => Yii::t('app', 'Affiliate'),
            'key' => Yii::t('app', 'Key'),
            'data' => Yii::t('app', 'Data'),
            'ip' => Yii::t('app', 'Ip'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

