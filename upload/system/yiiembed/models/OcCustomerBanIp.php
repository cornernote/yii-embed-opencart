<?php
/**
 * OcCustomerBanIp
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{customer_ban_ip}}
 * @property integer $customer_ban_ip_id
 * @property string $ip
 *
 * @see \CActiveRecord
 * @method \OcCustomerBanIp find($condition = '', array $params = array())
 * @method \OcCustomerBanIp findByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerBanIp findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerBanIp findBySql($sql, array $params = array())
 * @method \OcCustomerBanIp[] findAll($condition = '', array $params = array())
 * @method \OcCustomerBanIp[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCustomerBanIp[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCustomerBanIp[] findAllBySql($sql, array $params = array())
 * @method \OcCustomerBanIp with()
 * @method \OcCustomerBanIp together()
 * @method \OcCustomerBanIp cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCustomerBanIp resetScope($resetDefault = true)
 * @method \OcCustomerBanIp populateRecord($attributes, $callAfterFind = true)
 * @method \OcCustomerBanIp[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
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

