<?php
/**
 * OcVoucherThemeDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{voucher_theme_description}}
 * @property integer $voucher_theme_id
 * @property integer $language_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcVoucherThemeDescription find() find($condition, array $params = array())
 * @method OcVoucherThemeDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcVoucherThemeDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcVoucherThemeDescription findBySql() findBySql($sql, array $params = array())
 * @method OcVoucherThemeDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcVoucherThemeDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcVoucherThemeDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcVoucherThemeDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcVoucherThemeDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcVoucherThemeDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcVoucherThemeDescription the static model class
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
        return '{{voucher_theme_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'voucher_theme_id' => Yii::t('app', 'Voucher Theme'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

