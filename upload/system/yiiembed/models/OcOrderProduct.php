<?php
/**
 * OcOrderProduct
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{order_product}}
 * @property integer $order_product_id
 * @property integer $order_id
 * @property integer $product_id
 * @property string $name
 * @property string $model
 * @property integer $quantity
 * @property number $price
 * @property number $total
 * @property number $tax
 * @property integer $reward
 *
 * Relations
 * @property OcOrderDownload[] $orderDownloads
 * @property OcOrderOption[] $orderOptions
 * @property OcOrder $order
 * @property OcProduct $product
 *
 * @see CActiveRecord
 * @method OcOrderProduct find() find($condition, array $params = array())
 * @method OcOrderProduct findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOrderProduct findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderProduct findBySql() findBySql($sql, array $params = array())
 * @method OcOrderProduct[] findAll() findAll($condition = '', array $params = array())
 * @method OcOrderProduct[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOrderProduct[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderProduct[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOrderProduct with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcOrderProduct extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderProduct the static model class
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
        return '{{order_product}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orderDownloads' => array(self::HAS_MANY, 'OcOrderDownload', 'order_product_id'),
            'orderOptions' => array(self::HAS_MANY, 'OcOrderOption', 'order_product_id'),
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_product_id' => Yii::t('app', 'Order Product'),
            'order_id' => Yii::t('app', 'Order'),
            'product_id' => Yii::t('app', 'Product'),
            'name' => Yii::t('app', 'Name'),
            'model' => Yii::t('app', 'Model'),
            'quantity' => Yii::t('app', 'Quantity'),
            'price' => Yii::t('app', 'Price'),
            'total' => Yii::t('app', 'Total'),
            'tax' => Yii::t('app', 'Tax'),
            'reward' => Yii::t('app', 'Reward'),
        );
    }

}

