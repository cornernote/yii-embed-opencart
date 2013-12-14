<?php
/**
 * OcCategoryPath
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{category_path}}
 * @property integer $category_id
 * @property integer $path_id
 * @property integer $level
 *
 * Relations
 * @property OcCategory $category
 *
 * @see CActiveRecord
 * @method OcCategoryPath find() find($condition, array $params = array())
 * @method OcCategoryPath findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryPath findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryPath findBySql() findBySql($sql, array $params = array())
 * @method OcCategoryPath[] findAll() findAll($condition = '', array $params = array())
 * @method OcCategoryPath[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryPath[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryPath[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCategoryPath with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCategoryPath extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCategoryPath the static model class
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
        return '{{category_path}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'category' => array(self::BELONGS_TO, 'OcCategory', 'category_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'category_id' => Yii::t('app', 'Category'),
            'path_id' => Yii::t('app', 'Path'),
            'level' => Yii::t('app', 'Level'),
        );
    }

}

