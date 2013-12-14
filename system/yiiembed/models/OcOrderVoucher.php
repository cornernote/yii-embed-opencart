<?php
/**
 * OcOrderVoucher
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{order_voucher}}
 * @property integer $order_voucher_id
 * @property integer $order_id
 * @property integer $voucher_id
 * @property string $description
 * @property string $code
 * @property string $from_name
 * @property string $from_email
 * @property string $to_name
 * @property string $to_email
 * @property integer $voucher_theme_id
 * @property string $message
 * @property number $amount
 *
 * Relations
 * @property OcVoucherTheme $voucherTheme
 * @property OcOrder $order
 * @property OcVoucher $voucher
 *
 * @see CActiveRecord
 * @method OcOrderVoucher find() find($condition, array $params = array())
 * @method OcOrderVoucher findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOrderVoucher findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderVoucher findBySql() findBySql($sql, array $params = array())
 * @method OcOrderVoucher[] findAll() findAll($condition = '', array $params = array())
 * @method OcOrderVoucher[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOrderVoucher[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderVoucher[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOrderVoucher with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcOrderVoucher extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderVoucher the static model class
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
        return '{{order_voucher}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'voucherTheme' => array(self::BELONGS_TO, 'OcVoucherTheme', 'voucher_theme_id'),
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'voucher' => array(self::BELONGS_TO, 'OcVoucher', 'voucher_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_voucher_id' => Yii::t('app', 'Order Voucher'),
            'order_id' => Yii::t('app', 'Order'),
            'voucher_id' => Yii::t('app', 'Voucher'),
            'description' => Yii::t('app', 'Description'),
            'code' => Yii::t('app', 'Code'),
            'from_name' => Yii::t('app', 'From Name'),
            'from_email' => Yii::t('app', 'From Email'),
            'to_name' => Yii::t('app', 'To Name'),
            'to_email' => Yii::t('app', 'To Email'),
            'voucher_theme_id' => Yii::t('app', 'Voucher Theme'),
            'message' => Yii::t('app', 'Message'),
            'amount' => Yii::t('app', 'Amount'),
        );
    }

}

