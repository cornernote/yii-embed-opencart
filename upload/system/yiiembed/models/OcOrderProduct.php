<?php
/**
 * OcOrderProduct
 *
 * --- BEGIN ModelDoc ---
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
 * @property \OcOrderDownload[] $orderDownloads
 * @property \OcOrderOption[] $orderOptions
 * @property \OcOrder $order
 * @property \OcProduct $product
 *
 * @see \CActiveRecord
 * @method \OcOrderProduct find($condition = '', array $params = array())
 * @method \OcOrderProduct findByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderProduct findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderProduct findBySql($sql, array $params = array())
 * @method \OcOrderProduct[] findAll($condition = '', array $params = array())
 * @method \OcOrderProduct[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderProduct[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderProduct[] findAllBySql($sql, array $params = array())
 * @method \OcOrderProduct with()
 * @method \OcOrderProduct together()
 * @method \OcOrderProduct cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcOrderProduct resetScope($resetDefault = true)
 * @method \OcOrderProduct populateRecord($attributes, $callAfterFind = true)
 * @method \OcOrderProduct[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
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

