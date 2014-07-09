<?php
/**
 * OcFilterGroup
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{filter_group}}
 * @property integer $filter_group_id
 * @property integer $sort_order
 *
 * Relations
 * @property \OcFilter[] $filters
 * @property \OcLanguage[] $languages
 *
 * @see \CActiveRecord
 * @method \OcFilterGroup find($condition = '', array $params = array())
 * @method \OcFilterGroup findByPk($pk, $condition = '', array $params = array())
 * @method \OcFilterGroup findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcFilterGroup findBySql($sql, array $params = array())
 * @method \OcFilterGroup[] findAll($condition = '', array $params = array())
 * @method \OcFilterGroup[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcFilterGroup[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcFilterGroup[] findAllBySql($sql, array $params = array())
 * @method \OcFilterGroup with()
 * @method \OcFilterGroup together()
 * @method \OcFilterGroup cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcFilterGroup resetScope($resetDefault = true)
 * @method \OcFilterGroup populateRecord($attributes, $callAfterFind = true)
 * @method \OcFilterGroup[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcFilterGroup extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcFilterGroup the static model class
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
        return '{{filter_group}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'filters' => array(self::HAS_MANY, 'OcFilter', 'filter_group_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{filter_group_description}}(filter_group_id, language_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'filter_group_id' => Yii::t('app', 'Filter Group'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

