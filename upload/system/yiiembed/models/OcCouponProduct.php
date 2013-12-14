<?php
/**
 * OcCouponProduct
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{coupon_product}}
 * @property integer $coupon_product_id
 * @property integer $coupon_id
 * @property integer $product_id
 *
 * Relations
 * @property OcProduct $product
 * @property OcCoupon $coupon
 *
 * @see CActiveRecord
 * @method OcCouponProduct find() find($condition, array $params = array())
 * @method OcCouponProduct findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCouponProduct findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCouponProduct findBySql() findBySql($sql, array $params = array())
 * @method OcCouponProduct[] findAll() findAll($condition = '', array $params = array())
 * @method OcCouponProduct[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCouponProduct[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCouponProduct[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCouponProduct with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCouponProduct extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCouponProduct the static model class
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
        return '{{coupon_product}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'coupon' => array(self::BELONGS_TO, 'OcCoupon', 'coupon_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'coupon_product_id' => Yii::t('app', 'Coupon Product'),
            'coupon_id' => Yii::t('app', 'Coupon'),
            'product_id' => Yii::t('app', 'Product'),
        );
    }

}

