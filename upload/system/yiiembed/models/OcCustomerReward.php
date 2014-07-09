<?php
/**
 * OcCustomerReward
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{customer_reward}}
 * @property integer $customer_reward_id
 * @property integer $customer_id
 * @property integer $order_id
 * @property string $description
 * @property integer $points
 * @property string $date_added
 *
 * Relations
 * @property \OcCustomer $customer
 * @property \OcOrder $order
 *
 * @see \CActiveRecord
 * @method \OcCustomerReward find($condition = '', array $params = array())
 * @method \OcCustomerReward findByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerReward findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerReward findBySql($sql, array $params = array())
 * @method \OcCustomerReward[] findAll($condition = '', array $params = array())
 * @method \OcCustomerReward[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerReward[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerReward[] findAllBySql($sql, array $params = array())
 * @method \OcCustomerReward with()
 * @method \OcCustomerReward together()
 * @method \OcCustomerReward cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCustomerReward resetScope($resetDefault = true)
 * @method \OcCustomerReward populateRecord($attributes, $callAfterFind = true)
 * @method \OcCustomerReward[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCustomerReward extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerReward the static model class
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
        return '{{customer_reward}}';
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
            'customer_reward_id' => Yii::t('app', 'Customer Reward'),
            'customer_id' => Yii::t('app', 'Customer'),
            'order_id' => Yii::t('app', 'Order'),
            'description' => Yii::t('app', 'Description'),
            'points' => Yii::t('app', 'Points'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

