<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{coupon_category}}
 * @property integer $coupon_id
 * @property integer $category_id
 *
 * @see CActiveRecord
 * @method OcCouponCategory find() find($condition, array $params = array())
 * @method OcCouponCategory findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCouponCategory findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCouponCategory findBySql() findBySql($sql, array $params = array())
 * @method OcCouponCategory[] findAll() findAll($condition = '', array $params = array())
 * @method OcCouponCategory[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCouponCategory[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCouponCategory[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCouponCategory with() with()
 *
 * --- END GenerateProperties ---
 */

class OcCouponCategory extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCouponCategory the static model class
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
        return '{{coupon_category}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'coupon_id' => Yii::t('app', 'Coupon'),
            'category_id' => Yii::t('app', 'Category'),
        );
    }

}

