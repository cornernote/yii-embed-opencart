<?php
/**
 * OcCustomerBanIp
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer_ban_ip}}
 * @property integer $customer_ban_ip_id
 * @property string $ip
 *
 * @see CActiveRecord
 * @method OcCustomerBanIp find() find($condition, array $params = array())
 * @method OcCustomerBanIp findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerBanIp findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerBanIp findBySql() findBySql($sql, array $params = array())
 * @method OcCustomerBanIp[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomerBanIp[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerBanIp[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerBanIp[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomerBanIp with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCustomerBanIp extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerBanIp the static model class
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
        return '{{customer_ban_ip}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'customer_ban_ip_id' => Yii::t('app', 'Customer Ban Ip'),
            'ip' => Yii::t('app', 'Ip'),
        );
    }

}

