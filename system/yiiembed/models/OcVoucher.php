<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{voucher}}
 * @property integer $voucher_id
 * @property integer $order_id
 * @property string $code
 * @property string $from_name
 * @property string $from_email
 * @property string $to_name
 * @property string $to_email
 * @property integer $voucher_theme_id
 * @property string $message
 * @property number $amount
 * @property integer $status
 * @property string $date_added
 *
 * Relations
 * @property OcOrderVoucher[] $orderVouchers
 * @property OcVoucherTheme $voucherTheme
 * @property OcOrder $order
 * @property OcVoucherHistory[] $voucherHistories
 *
 * @see CActiveRecord
 * @method OcVoucher find() find($condition, array $params = array())
 * @method OcVoucher findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcVoucher findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcVoucher findBySql() findBySql($sql, array $params = array())
 * @method OcVoucher[] findAll() findAll($condition = '', array $params = array())
 * @method OcVoucher[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcVoucher[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcVoucher[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcVoucher with() with()
 *
 * --- END GenerateProperties ---
 */

class OcVoucher extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcVoucher the static model class
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
        return '{{voucher}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orderVouchers' => array(self::HAS_MANY, 'OcOrderVoucher', 'voucher_id'),
            'voucherTheme' => array(self::BELONGS_TO, 'OcVoucherTheme', 'voucher_theme_id'),
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'voucherHistories' => array(self::HAS_MANY, 'OcVoucherHistory', 'voucher_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'voucher_id' => Yii::t('app', 'Voucher'),
            'order_id' => Yii::t('app', 'Order'),
            'code' => Yii::t('app', 'Code'),
            'from_name' => Yii::t('app', 'From Name'),
            'from_email' => Yii::t('app', 'From Email'),
            'to_name' => Yii::t('app', 'To Name'),
            'to_email' => Yii::t('app', 'To Email'),
            'voucher_theme_id' => Yii::t('app', 'Voucher Theme'),
            'message' => Yii::t('app', 'Message'),
            'amount' => Yii::t('app', 'Amount'),
            'status' => Yii::t('app', 'Status'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

