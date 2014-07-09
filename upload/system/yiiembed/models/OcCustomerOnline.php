<?php
/**
 * OcCustomerOnline
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{customer_online}}
 * @property string $ip
 * @property integer $customer_id
 * @property string $url
 * @property string $referer
 * @property string $date_added
 *
 * Relations
 * @property \OcCustomer $customer
 *
 * @see \CActiveRecord
 * @method \OcCustomerOnline find($condition = '', array $params = array())
 * @method \OcCustomerOnline findByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerOnline findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerOnline findBySql($sql, array $params = array())
 * @method \OcCustomerOnline[] findAll($condition = '', array $params = array())
 * @method \OcCustomerOnline[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerOnline[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerOnline[] findAllBySql($sql, array $params = array())
 * @method \OcCustomerOnline with()
 * @method \OcCustomerOnline together()
 * @method \OcCustomerOnline cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCustomerOnline resetScope($resetDefault = true)
 * @method \OcCustomerOnline populateRecord($attributes, $callAfterFind = true)
 * @method \OcCustomerOnline[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCustomerOnline extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerOnline the static model class
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
        return '{{customer_online}}';
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
            'ip' => Yii::t('app', 'Ip'),
            'customer_id' => Yii::t('app', 'Customer'),
            'url' => Yii::t('app', 'Url'),
            'referer' => Yii::t('app', 'Referer'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

