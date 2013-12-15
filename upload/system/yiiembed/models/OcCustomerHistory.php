<?php
/**
 * OcCustomerHistory
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer_history}}
 * @property integer $customer_history_id
 * @property integer $customer_id
 * @property string $comment
 * @property string $date_added
 *
 * Relations
 * @property OcCustomer $customer
 *
 * @see CActiveRecord
 * @method OcCustomerHistory find() find($condition, array $params = array())
 * @method OcCustomerHistory findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerHistory findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerHistory findBySql() findBySql($sql, array $params = array())
 * @method OcCustomerHistory[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomerHistory[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerHistory[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerHistory[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomerHistory with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCustomerHistory extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerHistory the static model class
     */
    public static function model($className=__CLASS__)
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

