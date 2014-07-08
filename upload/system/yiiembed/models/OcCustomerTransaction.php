<?php
/**
 * OcCustomerTransaction
 *
 * --- BEGIN GenerateProperties ---
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
 * @property OcCustomer $customer
 * @property OcOrder $order
 *
 * @see CActiveRecord
 * @method OcCustomerTransaction find() find($condition, array $params = array())
 * @method OcCustomerTransaction findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerTransaction findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerTransaction findBySql() findBySql($sql, array $params = array())
 * @method OcCustomerTransaction[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomerTransaction[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerTransaction[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerTransaction[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomerTransaction with() with()
 *
 * --- END GenerateProperties ---
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

