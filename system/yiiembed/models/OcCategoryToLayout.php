<?php
/**
 * OcCategoryToLayout
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{category_to_layout}}
 * @property integer $category_id
 * @property integer $store_id
 * @property integer $layout_id
 *
 * @see CActiveRecord
 * @method OcCategoryToLayout find() find($condition, array $params = array())
 * @method OcCategoryToLayout findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryToLayout findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryToLayout findBySql() findBySql($sql, array $params = array())
 * @method OcCategoryToLayout[] findAll() findAll($condition = '', array $params = array())
 * @method OcCategoryToLayout[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryToLayout[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryToLayout[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCategoryToLayout with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcCategoryToLayout extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCategoryToLayout the static model class
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
        return '{{category_to_layout}}';
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
            'layout_id' => Yii::t('app', 'Layout'),
        );
    }

}

