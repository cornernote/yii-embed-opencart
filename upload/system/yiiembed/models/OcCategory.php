<?php
/**
 * OcCategory
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{category}}
 * @property integer $category_id
 * @property string $image
 * @property integer $parent_id
 * @property integer $top
 * @property integer $column
 * @property integer $sort_order
 * @property integer $status
 * @property string $date_added
 * @property string $date_modified
 *
 * Relations
 * @property OcParent $parent
 * @property OcLanguage[] $languages
 * @property OcFilter[] $filters
 * @property OcPath[] $paths
 * @property OcStore[] $stores
 * @property OcCoupon[] $coupons
 * @property OcProduct[] $products
 *
 * @see CActiveRecord
 * @method OcCategory find() find($condition, array $params = array())
 * @method OcCategory findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCategory findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategory findBySql() findBySql($sql, array $params = array())
 * @method OcCategory[] findAll() findAll($condition = '', array $params = array())
 * @method OcCategory[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCategory[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCategory[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCategory with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCategory extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCategory the static model class
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
        return '{{category}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'parent' => array(self::BELONGS_TO, 'OcParent', 'parent_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{category_description}}(category_id, language_id)'),
            'filters' => array(self::MANY_MANY, 'OcFilter', '{{category_filter}}(category_id, filter_id)'),
            'paths' => array(self::MANY_MANY, 'OcPath', '{{category_path}}(category_id, path_id)'),
            'stores' => array(self::MANY_MANY, 'OcStore', '{{category_to_store}}(category_id, store_id)'),
            'coupons' => array(self::MANY_MANY, 'OcCoupon', '{{coupon_category}}(category_id, coupon_id)'),
            'products' => array(self::MANY_MANY, 'OcProduct', '{{product_to_category}}(category_id, product_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'category_id' => Yii::t('app', 'Category'),
            'image' => Yii::t('app', 'Image'),
            'parent_id' => Yii::t('app', 'Parent'),
            'top' => Yii::t('app', 'Top'),
            'column' => Yii::t('app', 'Column'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
            'date_added' => Yii::t('app', 'Date Added'),
            'date_modified' => Yii::t('app', 'Date Modified'),
        );
    }

}

