<?php
/**
 * OcProductProfile
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_profile}}
 * @property integer $product_id
 * @property integer $profile_id
 * @property integer $customer_group_id
 *
 * Relations
 * @property OcProduct $product
 * @property OcProfile $profile
 * @property OcCustomerGroup $customerGroup
 *
 * @see CActiveRecord
 * @method OcProductProfile find() find($condition, array $params = array())
 * @method OcProductProfile findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductProfile findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductProfile findBySql() findBySql($sql, array $params = array())
 * @method OcProductProfile[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductProfile[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductProfile[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductProfile[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductProfile with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProductProfile extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductProfile the static model class
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
        return '{{product_profile}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'profile' => array(self::BELONGS_TO, 'OcProfile', 'profile_id'),
            'customerGroup' => array(self::BELONGS_TO, 'OcCustomerGroup', 'customer_group_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'profile_id' => Yii::t('app', 'Profile'),
            'customer_group_id' => Yii::t('app', 'Customer Group'),
        );
    }

}

