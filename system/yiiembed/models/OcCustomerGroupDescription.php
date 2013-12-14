<?php
/**
 * OcCustomerGroupDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{customer_group_description}}
 * @property integer $customer_group_id
 * @property integer $language_id
 * @property string $name
 * @property string $description
 *
 * @see CActiveRecord
 * @method OcCustomerGroupDescription find() find($condition, array $params = array())
 * @method OcCustomerGroupDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerGroupDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerGroupDescription findBySql() findBySql($sql, array $params = array())
 * @method OcCustomerGroupDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcCustomerGroupDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCustomerGroupDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCustomerGroupDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCustomerGroupDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcCustomerGroupDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCustomerGroupDescription the static model class
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
        return '{{customer_group_description}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'customer_group_id' => Yii::t('app', 'Customer Group'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
        );
    }

}

