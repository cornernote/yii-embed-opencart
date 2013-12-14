<?php
/**
 * OcProductToLayout
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_to_layout}}
 * @property integer $product_id
 * @property integer $store_id
 * @property integer $layout_id
 *
 * @see CActiveRecord
 * @method OcProductToLayout find() find($condition, array $params = array())
 * @method OcProductToLayout findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductToLayout findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductToLayout findBySql() findBySql($sql, array $params = array())
 * @method OcProductToLayout[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductToLayout[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductToLayout[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductToLayout[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductToLayout with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcProductToLayout extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductToLayout the static model class
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
        return '{{product_to_layout}}';
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
            'product_id' => Yii::t('app', 'Product'),
            'store_id' => Yii::t('app', 'Store'),
            'layout_id' => Yii::t('app', 'Layout'),
        );
    }

}

