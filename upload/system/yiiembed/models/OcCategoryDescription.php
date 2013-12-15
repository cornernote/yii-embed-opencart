<?php
/**
 * OcCategoryDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{category_description}}
 * @property integer $category_id
 * @property integer $language_id
 * @property string $name
 * @property string $description
 * @property string $meta_description
 * @property string $meta_keyword
 *
 * @see CActiveRecord
 * @method OcCategoryDescription find() find($condition, array $params = array())
 * @method OcCategoryDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryDescription findBySql() findBySql($sql, array $params = array())
 * @method OcCategoryDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcCategoryDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCategoryDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCategoryDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCategoryDescription the static model class
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
        return '{{category_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'category_id' => Yii::t('app', 'Category'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'meta_keyword' => Yii::t('app', 'Meta Keyword'),
        );
    }

}

