<?php
/**
 * OcCustomFieldDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{custom_field_description}}
 * @property integer $custom_field_id
 * @property integer $language_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcCustomFieldDescription find() find($condition, array $params = array())
 * @method OcCustomFieldDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldDescription findBySql() findBySql($sql, array $params = array())
 * @method OcCustomFieldDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomFieldDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomFieldDescription with() with()
 *
 * --- END GenerateProperties ---
 */

class OcCustomFieldDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomFieldDescription the static model class
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
        return '{{custom_field_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'custom_field_id' => Yii::t('app', 'Custom Field'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

