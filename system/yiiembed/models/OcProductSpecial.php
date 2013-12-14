<?php
/**
 * OcProductSpecial
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_special}}
 * @property integer $product_special_id
 * @property integer $product_id
 * @property integer $customer_group_id
 * @property integer $priority
 * @property number $price
 * @property string $date_start
 * @property string $date_end
 *
 * Relations
 * @property OcCustomerGroup $customerGroup
 * @property OcProduct $product
 *
 * @see CActiveRecord
 * @method OcProductSpecial find() find($condition, array $params = array())
 * @method OcProductSpecial findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductSpecial findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductSpecial findBySql() findBySql($sql, array $params = array())
 * @method OcProductSpecial[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductSpecial[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductSpecial[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductSpecial[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductSpecial with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProductSpecial extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductSpecial the static model class
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
        return '{{product_special}}';
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
            'product_special_id' => Yii::t('app', 'Product Special'),
            'product_id' => Yii::t('app', 'Product'),
            'customer_group_id' => Yii::t('app', 'Customer Group'),
            'priority' => Yii::t('app', 'Priority'),
            'price' => Yii::t('app', 'Price'),
            'date_start' => Yii::t('app', 'Date Start'),
            'date_end' => Yii::t('app', 'Date End'),
        );
    }

}

