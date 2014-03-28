<?php
/**
 * OcCustomerOnline
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer_online}}
 * @property string $ip
 * @property integer $customer_id
 * @property string $url
 * @property string $referer
 * @property string $date_added
 *
 * Relations
 * @property OcCustomer $customer
 *
 * @see CActiveRecord
 * @method OcCustomerOnline find() find($condition, array $params = array())
 * @method OcCustomerOnline findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerOnline findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerOnline findBySql() findBySql($sql, array $params = array())
 * @method OcCustomerOnline[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomerOnline[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerOnline[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerOnline[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomerOnline with() with()
 *
 * --- END GenerateProperties ---
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

