<?php
/**
 * OcOrderRecurringTransaction
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{order_recurring_transaction}}
 * @property integer $order_recurring_transaction_id
 * @property integer $order_recurring_id
 * @property string $created
 * @property number $amount
 * @property string $type
 *
 * Relations
 * @property \OcOrderRecurring $orderRecurring
 *
 * @see \CActiveRecord
 * @method \OcOrderRecurringTransaction find($condition = '', array $params = array())
 * @method \OcOrderRecurringTransaction findByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderRecurringTransaction findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderRecurringTransaction findBySql($sql, array $params = array())
 * @method \OcOrderRecurringTransaction[] findAll($condition = '', array $params = array())
 * @method \OcOrderRecurringTransaction[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderRecurringTransaction[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderRecurringTransaction[] findAllBySql($sql, array $params = array())
 * @method \OcOrderRecurringTransaction with()
 * @method \OcOrderRecurringTransaction together()
 * @method \OcOrderRecurringTransaction cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcOrderRecurringTransaction resetScope($resetDefault = true)
 * @method \OcOrderRecurringTransaction populateRecord($attributes, $callAfterFind = true)
 * @method \OcOrderRecurringTransaction[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcOrderRecurringTransaction extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderRecurringTransaction the static model class
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
        return '{{order_recurring_transaction}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orderRecurring' => array(self::BELONGS_TO, 'OcOrderRecurring', 'order_recurring_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_recurring_transaction_id' => Yii::t('app', 'Order Recurring Transaction'),
            'order_recurring_id' => Yii::t('app', 'Order Recurring'),
            'created' => Yii::t('app', 'Created'),
            'amount' => Yii::t('app', 'Amount'),
            'type' => Yii::t('app', 'Type'),
        );
    }

}

