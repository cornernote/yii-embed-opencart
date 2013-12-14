<?php
/**
 * OcCustomerActivity
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer_activity}}
 * @property integer $activity_id
 * @property integer $customer_id
 * @property string $key
 * @property string $data
 * @property string $ip
 * @property string $date_added
 *
 * Relations
 * @property OcCustomer $customer
 *
 * @see CActiveRecord
 * @method OcCustomerActivity find() find($condition, array $params = array())
 * @method OcCustomerActivity findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerActivity findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerActivity findBySql() findBySql($sql, array $params = array())
 * @method OcCustomerActivity[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomerActivity[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerActivity[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerActivity[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomerActivity with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCustomerActivity extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerActivity the static model class
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
        return '{{customer_activity}}';
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
            'activity_id' => Yii::t('app', 'Activity'),
            'customer_id' => Yii::t('app', 'Customer'),
            'key' => Yii::t('app', 'Key'),
            'data' => Yii::t('app', 'Data'),
            'ip' => Yii::t('app', 'Ip'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

