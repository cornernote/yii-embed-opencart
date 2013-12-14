<?php
/**
 * OcProductOption
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_option}}
 * @property integer $product_option_id
 * @property integer $product_id
 * @property integer $option_id
 * @property string $value
 * @property integer $required
 *
 * Relations
 * @property OcOrderOption[] $orderOptions
 * @property OcProduct $product
 * @property OcOption $option
 * @property OcProductOptionValue[] $productOptionValues
 *
 * @see CActiveRecord
 * @method OcProductOption find() find($condition, array $params = array())
 * @method OcProductOption findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductOption findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductOption findBySql() findBySql($sql, array $params = array())
 * @method OcProductOption[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductOption[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductOption[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductOption[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductOption with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcProductOption extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductOption the static model class
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
        return '{{product_option}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orderOptions' => array(self::HAS_MANY, 'OcOrderOption', 'product_option_id'),
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'option' => array(self::BELONGS_TO, 'OcOption', 'option_id'),
            'productOptionValues' => array(self::HAS_MANY, 'OcProductOptionValue', 'product_option_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_option_id' => Yii::t('app', 'Product Option'),
            'product_id' => Yii::t('app', 'Product'),
            'option_id' => Yii::t('app', 'Option'),
            'value' => Yii::t('app', 'Value'),
            'required' => Yii::t('app', 'Required'),
        );
    }

}

