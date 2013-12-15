<?php
/**
 * OcOrderHistory
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{order_history}}
 * @property integer $order_history_id
 * @property integer $order_id
 * @property integer $order_status_id
 * @property integer $notify
 * @property string $comment
 * @property string $date_added
 *
 * Relations
 * @property OcOrder $order
 * @property OcOrderStatus $orderStatus
 *
 * @see CActiveRecord
 * @method OcOrderHistory find() find($condition, array $params = array())
 * @method OcOrderHistory findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOrderHistory findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderHistory findBySql() findBySql($sql, array $params = array())
 * @method OcOrderHistory[] findAll() findAll($condition = '', array $params = array())
 * @method OcOrderHistory[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOrderHistory[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderHistory[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOrderHistory with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcOrderHistory extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderHistory the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{order_history}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'orderStatus' => array(self::BELONGS_TO, 'OcOrderStatus', 'order_status_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_history_id' => Yii::t('app', 'Order History'),
            'order_id' => Yii::t('app', 'Order'),
            'order_status_id' => Yii::t('app', 'Order Status'),
            'notify' => Yii::t('app', 'Notify'),
            'comment' => Yii::t('app', 'Comment'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

