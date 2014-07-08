<?php
/**
 * OcAttributeGroup
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{attribute_group}}
 * @property integer $attribute_group_id
 * @property integer $sort_order
 *
 * Relations
 * @property OcAttribute[] $attributes
 * @property OcLanguage[] $languages
 *
 * @see CActiveRecord
 * @method OcAttributeGroup find() find($condition, array $params = array())
 * @method OcAttributeGroup findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcAttributeGroup findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAttributeGroup findBySql() findBySql($sql, array $params = array())
 * @method OcAttributeGroup[] findAll() findAll($condition = '', array $params = array())
 * @method OcAttributeGroup[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcAttributeGroup[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAttributeGroup[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcAttributeGroup with() with()
 *
 * --- END GenerateProperties ---
 */

class OcAttributeGroup extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcAttributeGroup the static model class
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
        return '{{attribute_group}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'attributes' => array(self::HAS_MANY, 'OcAttribute', 'attribute_group_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{attribute_group_description}}(attribute_group_id, language_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'attribute_group_id' => Yii::t('app', 'Attribute Group'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

