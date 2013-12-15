<?php
/**
 * OcVoucherHistory
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{voucher_history}}
 * @property integer $voucher_history_id
 * @property integer $voucher_id
 * @property integer $order_id
 * @property number $amount
 * @property string $date_added
 *
 * Relations
 * @property OcVoucher $voucher
 * @property OcOrder $order
 *
 * @see CActiveRecord
 * @method OcVoucherHistory find() find($condition, array $params = array())
 * @method OcVoucherHistory findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcVoucherHistory findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcVoucherHistory findBySql() findBySql($sql, array $params = array())
 * @method OcVoucherHistory[] findAll() findAll($condition = '', array $params = array())
 * @method OcVoucherHistory[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcVoucherHistory[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcVoucherHistory[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcVoucherHistory with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
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

