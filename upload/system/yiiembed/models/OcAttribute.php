<?php
/**
 * OcAttribute
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{attribute}}
 * @property integer $attribute_id
 * @property integer $attribute_group_id
 * @property integer $sort_order
 *
 * Relations
 * @property OcAttributeGroup $attributeGroup
 * @property OcLanguage[] $languages
 * @property OcProductAttribute[] $productAttributes
 *
 * @see CActiveRecord
 * @method OcAttribute find() find($condition, array $params = array())
 * @method OcAttribute findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcAttribute findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAttribute findBySql() findBySql($sql, array $params = array())
 * @method OcAttribute[] findAll() findAll($condition = '', array $params = array())
 * @method OcAttribute[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcAttribute[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAttribute[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcAttribute with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcAttribute extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcAttribute the static model class
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

