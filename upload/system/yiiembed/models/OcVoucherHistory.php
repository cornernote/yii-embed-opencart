<?php
/**
 * OcVoucherHistory
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{voucher_history}}
 * @property integer $voucher_history_id
 * @property integer $voucher_id
 * @property integer $order_id
 * @property number $amount
 * @property string $date_added
 *
 * Relations
 * @property \OcVoucher $voucher
 * @property \OcOrder $order
 *
 * @see \CActiveRecord
 * @method \OcVoucherHistory find($condition = '', array $params = array())
 * @method \OcVoucherHistory findByPk($pk, $condition = '', array $params = array())
 * @method \OcVoucherHistory findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcVoucherHistory findBySql($sql, array $params = array())
 * @method \OcVoucherHistory[] findAll($condition = '', array $params = array())
 * @method \OcVoucherHistory[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcVoucherHistory[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcVoucherHistory[] findAllBySql($sql, array $params = array())
 * @method \OcVoucherHistory with()
 * @method \OcVoucherHistory together()
 * @method \OcVoucherHistory cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcVoucherHistory resetScope($resetDefault = true)
 * @method \OcVoucherHistory populateRecord($attributes, $callAfterFind = true)
 * @method \OcVoucherHistory[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcVoucherHistory extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcVoucherHistory the static model class
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
        return '{{voucher_history}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'voucher' => array(self::BELONGS_TO, 'OcVoucher', 'voucher_id'),
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'voucher_history_id' => Yii::t('app', 'Voucher History'),
            'voucher_id' => Yii::t('app', 'Voucher'),
            'order_id' => Yii::t('app', 'Order'),
            'amount' => Yii::t('app', 'Amount'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

