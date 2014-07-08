<?php
/**
 * OcProductFilter
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_filter}}
 * @property integer $product_id
 * @property integer $filter_id
 *
 * @see CActiveRecord
 * @method OcProductFilter find() find($condition, array $params = array())
 * @method OcProductFilter findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductFilter findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductFilter findBySql() findBySql($sql, array $params = array())
 * @method OcProductFilter[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductFilter[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductFilter[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductFilter[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductFilter with() with()
 *
 * --- END GenerateProperties ---
 */

class OcProductFilter extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductFilter the static model class
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
        return '{{product_filter}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'filter_id' => Yii::t('app', 'Filter'),
        );
    }

}

