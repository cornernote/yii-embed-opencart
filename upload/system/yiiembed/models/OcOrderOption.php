<?php
/**
 * OcOrderOption
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{order_option}}
 * @property integer $order_option_id
 * @property integer $order_id
 * @property integer $order_product_id
 * @property integer $product_option_id
 * @property integer $product_option_value_id
 * @property string $name
 * @property string $value
 * @property string $type
 *
 * Relations
 * @property \OcOrder $order
 * @property \OcOrderProduct $orderProduct
 * @property \OcProductOption $productOption
 * @property \OcProductOptionValue $productOptionValue
 *
 * @see \CActiveRecord
 * @method \OcOrderOption find($condition = '', array $params = array())
 * @method \OcOrderOption findByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderOption findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderOption findBySql($sql, array $params = array())
 * @method \OcOrderOption[] findAll($condition = '', array $params = array())
 * @method \OcOrderOption[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderOption[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderOption[] findAllBySql($sql, array $params = array())
 * @method \OcOrderOption with()
 * @method \OcOrderOption together()
 * @method \OcOrderOption cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcOrderOption resetScope($resetDefault = true)
 * @method \OcOrderOption populateRecord($attributes, $callAfterFind = true)
 * @method \OcOrderOption[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcOrderOption extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderOption the static model class
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
        return '{{order_option}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'orderProduct' => array(self::BELONGS_TO, 'OcOrderProduct', 'order_product_id'),
            'productOption' => array(self::BELONGS_TO, 'OcProductOption', 'product_option_id'),
            'productOptionValue' => array(self::BELONGS_TO, 'OcProductOptionValue', 'product_option_value_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_option_id' => Yii::t('app', 'Order Option'),
            'order_id' => Yii::t('app', 'Order'),
            'order_product_id' => Yii::t('app', 'Order Product'),
            'product_option_id' => Yii::t('app', 'Product Option'),
            'product_option_value_id' => Yii::t('app', 'Product Option Value'),
            'name' => Yii::t('app', 'Name'),
            'value' => Yii::t('app', 'Value'),
            'type' => Yii::t('app', 'Type'),
        );
    }

}

