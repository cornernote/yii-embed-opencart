<?php
/**
 * OcProductToStore
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_to_store}}
 * @property integer $product_id
 * @property integer $store_id
 *
 * @see CActiveRecord
 * @method OcProductToStore find() find($condition, array $params = array())
 * @method OcProductToStore findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductToStore findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductToStore findBySql() findBySql($sql, array $params = array())
 * @method OcProductToStore[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductToStore[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductToStore[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductToStore[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductToStore with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProductToStore extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductToStore the static model class
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
        return '{{product_to_store}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'store_id' => Yii::t('app', 'Store'),
        );
    }

}

