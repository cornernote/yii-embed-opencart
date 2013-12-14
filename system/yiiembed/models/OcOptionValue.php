<?php
/**
 * OcOptionValue
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{option_value}}
 * @property integer $option_value_id
 * @property integer $option_id
 * @property string $image
 * @property integer $sort_order
 *
 * Relations
 * @property OcOption $option
 * @property OcLanguage[] $languages
 * @property OcProductOptionValue[] $productOptionValues
 *
 * @see CActiveRecord
 * @method OcOptionValue find() find($condition, array $params = array())
 * @method OcOptionValue findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOptionValue findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOptionValue findBySql() findBySql($sql, array $params = array())
 * @method OcOptionValue[] findAll() findAll($condition = '', array $params = array())
 * @method OcOptionValue[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOptionValue[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOptionValue[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOptionValue with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcOptionValue extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOptionValue the static model class
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
        return '{{option_value}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'option' => array(self::BELONGS_TO, 'OcOption', 'option_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{option_value_description}}(option_value_id, language_id)'),
            'productOptionValues' => array(self::HAS_MANY, 'OcProductOptionValue', 'option_value_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'option_value_id' => Yii::t('app', 'Option Value'),
            'option_id' => Yii::t('app', 'Option'),
            'image' => Yii::t('app', 'Image'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

