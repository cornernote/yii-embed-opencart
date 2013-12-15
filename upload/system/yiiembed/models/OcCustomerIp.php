<?php
/**
 * OcCustomerIp
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer_ip}}
 * @property integer $customer_ip_id
 * @property integer $customer_id
 * @property string $ip
 * @property string $date_added
 *
 * Relations
 * @property OcCustomer $customer
 *
 * @see CActiveRecord
 * @method OcCustomerIp find() find($condition, array $params = array())
 * @method OcCustomerIp findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerIp findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerIp findBySql() findBySql($sql, array $params = array())
 * @method OcCustomerIp[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomerIp[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerIp[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerIp[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomerIp with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
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

