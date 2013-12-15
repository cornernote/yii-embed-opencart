<?php
/**
 * OcCategoryFilter
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{category_filter}}
 * @property integer $category_id
 * @property integer $filter_id
 *
 * @see CActiveRecord
 * @method OcCategoryFilter find() find($condition, array $params = array())
 * @method OcCategoryFilter findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryFilter findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryFilter findBySql() findBySql($sql, array $params = array())
 * @method OcCategoryFilter[] findAll() findAll($condition = '', array $params = array())
 * @method OcCategoryFilter[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCategoryFilter[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategoryFilter[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCategoryFilter with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCategoryFilter extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCategoryFilter the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{category_filter}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'category_id' => Yii::t('app', 'Category'),
            'filter_id' => Yii::t('app', 'Filter'),
        );
    }

}

