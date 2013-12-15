<?php
/**
 * OcAttributeGroupDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{attribute_group_description}}
 * @property integer $attribute_group_id
 * @property integer $language_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcAttributeGroupDescription find() find($condition, array $params = array())
 * @method OcAttributeGroupDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcAttributeGroupDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAttributeGroupDescription findBySql() findBySql($sql, array $params = array())
 * @method OcAttributeGroupDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcAttributeGroupDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcAttributeGroupDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAttributeGroupDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcAttributeGroupDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcAttributeGroupDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcAttributeGroupDescription the static model class
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
        return '{{attribute_group_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'attribute_group_id' => Yii::t('app', 'Attribute Group'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

