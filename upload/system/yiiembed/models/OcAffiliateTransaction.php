<?php
/**
 * OcAffiliateTransaction
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{affiliate_transaction}}
 * @property integer $affiliate_transaction_id
 * @property integer $affiliate_id
 * @property integer $order_id
 * @property string $description
 * @property number $amount
 * @property string $date_added
 *
 * Relations
 * @property OcOrder $order
 * @property OcAffiliate $affiliate
 *
 * @see CActiveRecord
 * @method OcAffiliateTransaction find() find($condition, array $params = array())
 * @method OcAffiliateTransaction findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcAffiliateTransaction findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAffiliateTransaction findBySql() findBySql($sql, array $params = array())
 * @method OcAffiliateTransaction[] findAll() findAll($condition = '', array $params = array())
 * @method OcAffiliateTransaction[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcAffiliateTransaction[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcAffiliateTransaction[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcAffiliateTransaction with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcAffiliateTransaction extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcAffiliateTransaction the static model class
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
        return '{{affiliate_transaction}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'affiliate' => array(self::BELONGS_TO, 'OcAffiliate', 'affiliate_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'affiliate_transaction_id' => Yii::t('app', 'Affiliate Transaction'),
            'affiliate_id' => Yii::t('app', 'Affiliate'),
            'order_id' => Yii::t('app', 'Order'),
            'description' => Yii::t('app', 'Description'),
            'amount' => Yii::t('app', 'Amount'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

