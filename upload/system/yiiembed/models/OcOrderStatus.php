<?php
/**
 * OcOrderStatus
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{order_status}}
 * @property integer $order_status_id
 * @property integer $language_id
 * @property string $name
 *
 * Relations
 * @property OcOrder[] $orders
 * @property OcOrderHistory[] $orderHistories
 * @property OcLanguage $language
 *
 * @see CActiveRecord
 * @method OcOrderStatus find() find($condition, array $params = array())
 * @method OcOrderStatus findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOrderStatus findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderStatus findBySql() findBySql($sql, array $params = array())
 * @method OcOrderStatus[] findAll() findAll($condition = '', array $params = array())
 * @method OcOrderStatus[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOrderStatus[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderStatus[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOrderStatus with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcOrderStatus extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderStatus the static model class
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
        return '{{order_status}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orders' => array(self::HAS_MANY, 'OcOrder', 'order_status_id'),
            'orderHistories' => array(self::HAS_MANY, 'OcOrderHistory', 'order_status_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_status_id' => Yii::t('app', 'Order Status'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

