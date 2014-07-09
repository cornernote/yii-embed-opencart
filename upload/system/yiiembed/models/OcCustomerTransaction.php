<?php
/**
 * OcCustomerTransaction
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{customer_transaction}}
 * @property integer $customer_transaction_id
 * @property integer $customer_id
 * @property integer $order_id
 * @property string $description
 * @property number $amount
 * @property string $date_added
 *
 * Relations
 * @property \OcCustomer $customer
 * @property \OcOrder $order
 *
 * @see \CActiveRecord
 * @method \OcCustomerTransaction find($condition = '', array $params = array())
 * @method \OcCustomerTransaction findByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerTransaction findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerTransaction findBySql($sql, array $params = array())
 * @method \OcCustomerTransaction[] findAll($condition = '', array $params = array())
 * @method \OcCustomerTransaction[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerTransaction[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerTransaction[] findAllBySql($sql, array $params = array())
 * @method \OcCustomerTransaction with()
 * @method \OcCustomerTransaction together()
 * @method \OcCustomerTransaction cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCustomerTransaction resetScope($resetDefault = true)
 * @method \OcCustomerTransaction populateRecord($attributes, $callAfterFind = true)
 * @method \OcCustomerTransaction[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCustomerTransaction extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerTransaction the static model class
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
        return '{{customer_transaction}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'customer' => array(self::BELONGS_TO, 'OcCustomer', 'customer_id'),
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'customer_transaction_id' => Yii::t('app', 'Customer Transaction'),
            'customer_id' => Yii::t('app', 'Customer'),
            'order_id' => Yii::t('app', 'Order'),
            'description' => Yii::t('app', 'Description'),
            'amount' => Yii::t('app', 'Amount'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

