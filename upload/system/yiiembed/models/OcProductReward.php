<?php
/**
 * OcProductReward
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{product_reward}}
 * @property integer $product_reward_id
 * @property integer $product_id
 * @property integer $customer_group_id
 * @property integer $points
 *
 * Relations
 * @property \OcProduct $product
 * @property \OcCustomerGroup $customerGroup
 *
 * @see \CActiveRecord
 * @method \OcProductReward find($condition = '', array $params = array())
 * @method \OcProductReward findByPk($pk, $condition = '', array $params = array())
 * @method \OcProductReward findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductReward findBySql($sql, array $params = array())
 * @method \OcProductReward[] findAll($condition = '', array $params = array())
 * @method \OcProductReward[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcProductReward[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductReward[] findAllBySql($sql, array $params = array())
 * @method \OcProductReward with()
 * @method \OcProductReward together()
 * @method \OcProductReward cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcProductReward resetScope($resetDefault = true)
 * @method \OcProductReward populateRecord($attributes, $callAfterFind = true)
 * @method \OcProductReward[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
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
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'customerGroup' => array(self::BELONGS_TO, 'OcCustomerGroup', 'customer_group_id'),
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

