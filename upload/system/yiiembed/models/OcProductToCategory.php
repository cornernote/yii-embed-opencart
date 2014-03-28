<?php
/**
 * OcProductToCategory
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_to_category}}
 * @property integer $product_id
 * @property integer $category_id
 *
 * @see CActiveRecord
 * @method OcProductToCategory find() find($condition, array $params = array())
 * @method OcProductToCategory findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductToCategory findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductToCategory findBySql() findBySql($sql, array $params = array())
 * @method OcProductToCategory[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductToCategory[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductToCategory[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductToCategory[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductToCategory with() with()
 *
 * --- END GenerateProperties ---
 */

class OcProductToCategory extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductToCategory the static model class
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
        return '{{product_to_category}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'category_id' => Yii::t('app', 'Category'),
        );
    }

}

