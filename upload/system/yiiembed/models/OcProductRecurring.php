<?php
/**
 * OcProductRecurring
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{product_recurring}}
 * @property integer $product_id
 * @property integer $store_id
 *
 * @see CActiveRecord
 * @method OcProductRecurring find() find($condition, array $params = array())
 * @method OcProductRecurring findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProductRecurring findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductRecurring findBySql() findBySql($sql, array $params = array())
 * @method OcProductRecurring[] findAll() findAll($condition = '', array $params = array())
 * @method OcProductRecurring[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProductRecurring[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProductRecurring[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProductRecurring with() with()
 *
 * --- END GenerateProperties ---
 */

class OcProductRecurring extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductRecurring the static model class
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
        return '{{product_recurring}}';
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

