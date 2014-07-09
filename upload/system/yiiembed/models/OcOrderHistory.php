<?php
/**
 * OcOrderHistory
 *
 * --- BEGIN ModelDoc ---
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
 * @property \OcOrder $order
 * @property \OcOrderStatus $orderStatus
 *
 * @see \CActiveRecord
 * @method \OcOrderHistory find($condition = '', array $params = array())
 * @method \OcOrderHistory findByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderHistory findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderHistory findBySql($sql, array $params = array())
 * @method \OcOrderHistory[] findAll($condition = '', array $params = array())
 * @method \OcOrderHistory[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderHistory[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderHistory[] findAllBySql($sql, array $params = array())
 * @method \OcOrderHistory with()
 * @method \OcOrderHistory together()
 * @method \OcOrderHistory cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcOrderHistory resetScope($resetDefault = true)
 * @method \OcOrderHistory populateRecord($attributes, $callAfterFind = true)
 * @method \OcOrderHistory[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcOrderHistory extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderHistory the static model class
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

