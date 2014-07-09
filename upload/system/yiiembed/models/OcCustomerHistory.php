<?php
/**
 * OcCustomerHistory
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{customer_history}}
 * @property integer $customer_history_id
 * @property integer $customer_id
 * @property string $comment
 * @property string $date_added
 *
 * Relations
 * @property \OcCustomer $customer
 *
 * @see \CActiveRecord
 * @method \OcCustomerHistory find($condition = '', array $params = array())
 * @method \OcCustomerHistory findByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerHistory findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerHistory findBySql($sql, array $params = array())
 * @method \OcCustomerHistory[] findAll($condition = '', array $params = array())
 * @method \OcCustomerHistory[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerHistory[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerHistory[] findAllBySql($sql, array $params = array())
 * @method \OcCustomerHistory with()
 * @method \OcCustomerHistory together()
 * @method \OcCustomerHistory cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCustomerHistory resetScope($resetDefault = true)
 * @method \OcCustomerHistory populateRecord($attributes, $callAfterFind = true)
 * @method \OcCustomerHistory[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCustomerHistory extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerHistory the static model class
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
        return '{{customer_history}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'customer' => array(self::BELONGS_TO, 'OcCustomer', 'customer_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'customer_history_id' => Yii::t('app', 'Customer History'),
            'customer_id' => Yii::t('app', 'Customer'),
            'comment' => Yii::t('app', 'Comment'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

