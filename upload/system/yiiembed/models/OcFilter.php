<?php
/**
 * OcFilter
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{filter}}
 * @property integer $filter_id
 * @property integer $filter_group_id
 * @property integer $sort_order
 *
 * Relations
 * @property \OcCategory[] $categories
 * @property \OcFilterGroup $filterGroup
 * @property \OcLanguage[] $languages
 * @property \OcProduct[] $products
 *
 * @see \CActiveRecord
 * @method \OcFilter find($condition = '', array $params = array())
 * @method \OcFilter findByPk($pk, $condition = '', array $params = array())
 * @method \OcFilter findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcFilter findBySql($sql, array $params = array())
 * @method \OcFilter[] findAll($condition = '', array $params = array())
 * @method \OcFilter[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcFilter[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcFilter[] findAllBySql($sql, array $params = array())
 * @method \OcFilter with()
 * @method \OcFilter together()
 * @method \OcFilter cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcFilter resetScope($resetDefault = true)
 * @method \OcFilter populateRecord($attributes, $callAfterFind = true)
 * @method \OcFilter[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcFilter extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcFilter the static model class
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
        return '{{filter}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'categories' => array(self::MANY_MANY, 'OcCategory', '{{category_filter}}(filter_id, category_id)'),
            'filterGroup' => array(self::BELONGS_TO, 'OcFilterGroup', 'filter_group_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{filter_description}}(filter_id, language_id)'),
            'products' => array(self::MANY_MANY, 'OcProduct', '{{product_filter}}(filter_id, product_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'filter_id' => Yii::t('app', 'Filter'),
            'filter_group_id' => Yii::t('app', 'Filter Group'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

