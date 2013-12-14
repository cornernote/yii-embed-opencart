<?php
/**
 * OcVoucherTheme
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{voucher_theme}}
 * @property integer $voucher_theme_id
 * @property string $image
 *
 * Relations
 * @property OcOrderVoucher[] $orderVouchers
 * @property OcVoucher[] $vouchers
 * @property OcLanguage[] $languages
 *
 * @see CActiveRecord
 * @method OcVoucherTheme find() find($condition, array $params = array())
 * @method OcVoucherTheme findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcVoucherTheme findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcVoucherTheme findBySql() findBySql($sql, array $params = array())
 * @method OcVoucherTheme[] findAll() findAll($condition = '', array $params = array())
 * @method OcVoucherTheme[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcVoucherTheme[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcVoucherTheme[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcVoucherTheme with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcVoucherTheme extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcVoucherTheme the static model class
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
        return '{{voucher_theme}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orderVouchers' => array(self::HAS_MANY, 'OcOrderVoucher', 'voucher_theme_id'),
            'vouchers' => array(self::HAS_MANY, 'OcVoucher', 'voucher_theme_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{voucher_theme_description}}(voucher_theme_id, language_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'voucher_theme_id' => Yii::t('app', 'Voucher Theme'),
            'image' => Yii::t('app', 'Image'),
        );
    }

}

