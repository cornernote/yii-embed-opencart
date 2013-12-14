<?php
/**
 * OcProductReward
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_reward}}
 * @property integer $product_reward_id
 * @property integer $product_id
 * @property integer $customer_group_id
 * @property integer $points
 *
 * Relations
 * @property OcCustomerGroup $customerGroup
 * @property OcProduct $product
 *
 * @see CActiveRecord
 * @method OcProductReward find() find($condition, array $params = array())
 * @method OcProductReward findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductReward findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductReward findBySql() findBySql($sql, array $params = array())
 * @method OcProductReward[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductReward[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductReward[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductReward[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductReward with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProductReward extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductReward the static model class
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
        return '{{product_reward}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'customerGroup' => array(self::BELONGS_TO, 'OcCustomerGroup', 'customer_group_id'),
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_reward_id' => Yii::t('app', 'Product Reward'),
            'product_id' => Yii::t('app', 'Product'),
            'customer_group_id' => Yii::t('app', 'Customer Group'),
            'points' => Yii::t('app', 'Points'),
        );
    }

}

