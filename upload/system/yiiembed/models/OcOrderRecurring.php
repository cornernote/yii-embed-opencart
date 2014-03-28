<?php
/**
 * OcOrderRecurring
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{order_recurring}}
 * @property integer $order_recurring_id
 * @property integer $order_id
 * @property string $created
 * @property integer $status
 * @property integer $product_id
 * @property string $product_name
 * @property integer $product_quantity
 * @property integer $profile_id
 * @property string $profile_name
 * @property string $profile_description
 * @property string $recurring_frequency
 * @property integer $recurring_cycle
 * @property integer $recurring_duration
 * @property number $recurring_price
 * @property integer $trial
 * @property string $trial_frequency
 * @property integer $trial_cycle
 * @property integer $trial_duration
 * @property number $trial_price
 * @property string $profile_reference
 *
 * Relations
 * @property OcOrder $order
 * @property OcProduct $product
 * @property OcProfile $profile
 * @property OcOrderRecurringTransaction[] $orderRecurringTransactions
 *
 * @see CActiveRecord
 * @method OcOrderRecurring find() find($condition, array $params = array())
 * @method OcOrderRecurring findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOrderRecurring findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderRecurring findBySql() findBySql($sql, array $params = array())
 * @method OcOrderRecurring[] findAll() findAll($condition = '', array $params = array())
 * @method OcOrderRecurring[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOrderRecurring[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderRecurring[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOrderRecurring with() with()
 *
 * --- END GenerateProperties ---
 */

class OcOrderRecurring extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderRecurring the static model class
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
        return '{{order_recurring}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'profile' => array(self::BELONGS_TO, 'OcProfile', 'profile_id'),
            'orderRecurringTransactions' => array(self::HAS_MANY, 'OcOrderRecurringTransaction', 'order_recurring_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_recurring_id' => Yii::t('app', 'Order Recurring'),
            'order_id' => Yii::t('app', 'Order'),
            'created' => Yii::t('app', 'Created'),
            'status' => Yii::t('app', 'Status'),
            'product_id' => Yii::t('app', 'Product'),
            'product_name' => Yii::t('app', 'Product Name'),
            'product_quantity' => Yii::t('app', 'Product Quantity'),
            'profile_id' => Yii::t('app', 'Profile'),
            'profile_name' => Yii::t('app', 'Profile Name'),
            'profile_description' => Yii::t('app', 'Profile Description'),
            'recurring_frequency' => Yii::t('app', 'Recurring Frequency'),
            'recurring_cycle' => Yii::t('app', 'Recurring Cycle'),
            'recurring_duration' => Yii::t('app', 'Recurring Duration'),
            'recurring_price' => Yii::t('app', 'Recurring Price'),
            'trial' => Yii::t('app', 'Trial'),
            'trial_frequency' => Yii::t('app', 'Trial Frequency'),
            'trial_cycle' => Yii::t('app', 'Trial Cycle'),
            'trial_duration' => Yii::t('app', 'Trial Duration'),
            'trial_price' => Yii::t('app', 'Trial Price'),
            'profile_reference' => Yii::t('app', 'Profile Reference'),
        );
    }

}

