<?php
/**
 * OcAttributeDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{attribute_description}}
 * @property integer $attribute_id
 * @property integer $language_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcAttributeDescription find() find($condition, array $params = array())
 * @method OcAttributeDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcAttributeDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAttributeDescription findBySql() findBySql($sql, array $params = array())
 * @method OcAttributeDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcAttributeDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcAttributeDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAttributeDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcAttributeDescription with() with()
 *
 * --- END GenerateProperties ---
 */

class OcAttributeDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcAttributeDescription the static model class
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
        return '{{attribute_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'attribute_id' => Yii::t('app', 'Attribute'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

