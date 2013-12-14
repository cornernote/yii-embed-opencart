<?php
/**
 * OcCategoryToStore
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{category_to_store}}
 * @property integer $category_id
 * @property integer $store_id
 *
 * @see CActiveRecord
 * @method OcCategoryToStore find() find($condition, array $params = array())
 * @method OcCategoryToStore findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryToStore findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryToStore findBySql() findBySql($sql, array $params = array())
 * @method OcCategoryToStore[] findAll() findAll($condition = '', array $params = array())
 * @method OcCategoryToStore[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryToStore[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryToStore[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCategoryToStore with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcCategoryToStore extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCategoryToStore the static model class
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
        return '{{category_to_store}}';
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
            'category_id' => Yii::t('app', 'Category'),
            'store_id' => Yii::t('app', 'Store'),
        );
    }

}

