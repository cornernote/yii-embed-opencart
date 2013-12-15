<?php
/**
 * OcProductRelated
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_related}}
 * @property integer $product_id
 * @property integer $related_id
 *
 * @see CActiveRecord
 * @method OcProductRelated find() find($condition, array $params = array())
 * @method OcProductRelated findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductRelated findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductRelated findBySql() findBySql($sql, array $params = array())
 * @method OcProductRelated[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductRelated[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductRelated[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductRelated[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductRelated with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProductRelated extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductRelated the static model class
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
        return '{{product_related}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'related_id' => Yii::t('app', 'Related'),
        );
    }

}

