<?php
/**
 * OcCustomerIp
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{customer_ip}}
 * @property integer $customer_ip_id
 * @property integer $customer_id
 * @property string $ip
 * @property string $date_added
 *
 * Relations
 * @property \OcCustomer $customer
 *
 * @see \CActiveRecord
 * @method \OcCustomerIp find($condition = '', array $params = array())
 * @method \OcCustomerIp findByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerIp findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerIp findBySql($sql, array $params = array())
 * @method \OcCustomerIp[] findAll($condition = '', array $params = array())
 * @method \OcCustomerIp[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerIp[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerIp[] findAllBySql($sql, array $params = array())
 * @method \OcCustomerIp with()
 * @method \OcCustomerIp together()
 * @method \OcCustomerIp cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCustomerIp resetScope($resetDefault = true)
 * @method \OcCustomerIp populateRecord($attributes, $callAfterFind = true)
 * @method \OcCustomerIp[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCustomerIp extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerIp the static model class
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
        return '{{customer_ip}}';
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
            'customer_ip_id' => Yii::t('app', 'Customer Ip'),
            'customer_id' => Yii::t('app', 'Customer'),
            'ip' => Yii::t('app', 'Ip'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

