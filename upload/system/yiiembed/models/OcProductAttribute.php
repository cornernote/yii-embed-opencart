<?php
/**
 * OcProductAttribute
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_attribute}}
 * @property integer $product_id
 * @property integer $attribute_id
 * @property integer $language_id
 * @property string $text
 *
 * Relations
 * @property OcProduct $product
 * @property OcAttribute $attribute
 * @property OcLanguage $language
 *
 * @see CActiveRecord
 * @method OcProductAttribute find() find($condition, array $params = array())
 * @method OcProductAttribute findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductAttribute findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductAttribute findBySql() findBySql($sql, array $params = array())
 * @method OcProductAttribute[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductAttribute[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductAttribute[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductAttribute[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductAttribute with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProductAttribute extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductAttribute the static model class
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
        return '{{product_attribute}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'attribute' => array(self::BELONGS_TO, 'OcAttribute', 'attribute_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'attribute_id' => Yii::t('app', 'Attribute'),
            'language_id' => Yii::t('app', 'Language'),
            'text' => Yii::t('app', 'Text'),
        );
    }

}

