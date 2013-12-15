<?php
/**
 * OcCustomFieldValueDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{custom_field_value_description}}
 * @property integer $custom_field_value_id
 * @property integer $language_id
 * @property integer $custom_field_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcCustomFieldValueDescription find() find($condition, array $params = array())
 * @method OcCustomFieldValueDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldValueDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldValueDescription findBySql() findBySql($sql, array $params = array())
 * @method OcCustomFieldValueDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomFieldValueDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomFieldValueDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomFieldValueDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomFieldValueDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCustomFieldValueDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomFieldValueDescription the static model class
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
        return '{{custom_field_value_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'custom_field_value_id' => Yii::t('app', 'Custom Field Value'),
            'language_id' => Yii::t('app', 'Language'),
            'custom_field_id' => Yii::t('app', 'Custom Field'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

