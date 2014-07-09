<?php
/**
 * OcProductSpecial
 *
 * --- BEGIN ModelDoc ---
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
 * @property \OcProduct $product
 * @property \OcCustomerGroup $customerGroup
 *
 * @see \CActiveRecord
 * @method \OcProductSpecial find($condition = '', array $params = array())
 * @method \OcProductSpecial findByPk($pk, $condition = '', array $params = array())
 * @method \OcProductSpecial findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductSpecial findBySql($sql, array $params = array())
 * @method \OcProductSpecial[] findAll($condition = '', array $params = array())
 * @method \OcProductSpecial[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcProductSpecial[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProductSpecial[] findAllBySql($sql, array $params = array())
 * @method \OcProductSpecial with()
 * @method \OcProductSpecial together()
 * @method \OcProductSpecial cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcProductSpecial resetScope($resetDefault = true)
 * @method \OcProductSpecial populateRecord($attributes, $callAfterFind = true)
 * @method \OcProductSpecial[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
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

