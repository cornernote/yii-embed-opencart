<?php
/**
 * OcReview
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{review}}
 * @property integer $review_id
 * @property integer $product_id
 * @property integer $customer_id
 * @property string $author
 * @property string $text
 * @property integer $rating
 * @property integer $status
 * @property string $date_added
 * @property string $date_modified
 *
 * Relations
 * @property OcProduct $product
 * @property OcCustomer $customer
 *
 * @see CActiveRecord
 * @method OcReview find() find($condition, array $params = array())
 * @method OcReview findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcReview findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReview findBySql() findBySql($sql, array $params = array())
 * @method OcReview[] findAll() findAll($condition = '', array $params = array())
 * @method OcReview[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcReview[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReview[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcReview with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcReview extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcReview the static model class
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
        return '{{review}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'customer' => array(self::BELONGS_TO, 'OcCustomer', 'customer_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'review_id' => Yii::t('app', 'Review'),
            'product_id' => Yii::t('app', 'Product'),
            'customer_id' => Yii::t('app', 'Customer'),
            'author' => Yii::t('app', 'Author'),
            'text' => Yii::t('app', 'Text'),
            'rating' => Yii::t('app', 'Rating'),
            'status' => Yii::t('app', 'Status'),
            'date_added' => Yii::t('app', 'Date Added'),
            'date_modified' => Yii::t('app', 'Date Modified'),
        );
    }

}

