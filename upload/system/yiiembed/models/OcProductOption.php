<?php
/**
 * OcProductOption
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{product_option}}
 * @property integer $product_option_id
 * @property integer $product_id
 * @property integer $option_id
 * @property string $option_value
 * @property integer $required
 *
 * Relations
 * @property \OcOrderOption[] $orderOptions
 * @property \OcProduct $product
 * @property \OcOption $option
 * @property \OcProductOptionValue[] $productOptionValues
 *
 * @see \CActiveRecord
 * @method \OcProductOption find($condition = '', array $params = array())
 * @method \OcProductOption findByPk($pk, $condition = '', array $params = array())
 * @method \OcProductOption findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductOption findBySql($sql, array $params = array())
 * @method \OcProductOption[] findAll($condition = '', array $params = array())
 * @method \OcProductOption[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcProductOption[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductOption[] findAllBySql($sql, array $params = array())
 * @method \OcProductOption with()
 * @method \OcProductOption together()
 * @method \OcProductOption cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcProductOption resetScope($resetDefault = true)
 * @method \OcProductOption populateRecord($attributes, $callAfterFind = true)
 * @method \OcProductOption[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
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
            'option_value' => Yii::t('app', 'Option Value'),
            'required' => Yii::t('app', 'Required'),
        );
    }

}

