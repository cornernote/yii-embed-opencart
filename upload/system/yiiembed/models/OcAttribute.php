<?php
/**
 * OcAttribute
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{attribute}}
 * @property integer $attribute_id
 * @property integer $attribute_group_id
 * @property integer $sort_order
 *
 * Relations
 * @property \OcAttributeGroup $attributeGroup
 * @property \OcLanguage[] $languages
 * @property \OcProductAttribute[] $productAttributes
 *
 * @see \CActiveRecord
 * @method \OcAttribute find($condition = '', array $params = array())
 * @method \OcAttribute findByPk($pk, $condition = '', array $params = array())
 * @method \OcAttribute findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcAttribute findBySql($sql, array $params = array())
 * @method \OcAttribute[] findAll($condition = '', array $params = array())
 * @method \OcAttribute[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcAttribute[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcAttribute[] findAllBySql($sql, array $params = array())
 * @method \OcAttribute with()
 * @method \OcAttribute together()
 * @method \OcAttribute cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcAttribute resetScope($resetDefault = true)
 * @method \OcAttribute populateRecord($attributes, $callAfterFind = true)
 * @method \OcAttribute[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcAttribute extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcAttribute the static model class
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
        return '{{attribute}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'attributeGroup' => array(self::BELONGS_TO, 'OcAttributeGroup', 'attribute_group_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{attribute_description}}(attribute_id, language_id)'),
            'productAttributes' => array(self::HAS_MANY, 'OcProductAttribute', 'attribute_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'attribute_id' => Yii::t('app', 'Attribute'),
            'attribute_group_id' => Yii::t('app', 'Attribute Group'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

