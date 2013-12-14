<?php
/**
 * OcCurrency
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{currency}}
 * @property integer $currency_id
 * @property string $title
 * @property string $code
 * @property string $symbol_left
 * @property string $symbol_right
 * @property string $decimal_place
 * @property double $value
 * @property integer $status
 * @property string $date_modified
 *
 * Relations
 * @property OcOrder[] $orders
 *
 * @see CActiveRecord
 * @method OcCurrency find() find($condition, array $params = array())
 * @method OcCurrency findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcCurrency findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCurrency findBySql() findBySql($sql, array $params = array())
 * @method OcCurrency[] findAll() findAll($condition = '', array $params = array())
 * @method OcCurrency[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcCurrency[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcCurrency[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcCurrency with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcCurrency extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCurrency the static model class
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
        return '{{currency}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orders' => array(self::HAS_MANY, 'OcOrder', 'currency_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'currency_id' => Yii::t('app', 'Currency'),
            'title' => Yii::t('app', 'Title'),
            'code' => Yii::t('app', 'Code'),
            'symbol_left' => Yii::t('app', 'Symbol Left'),
            'symbol_right' => Yii::t('app', 'Symbol Right'),
            'decimal_place' => Yii::t('app', 'Decimal Place'),
            'value' => Yii::t('app', 'Value'),
            'status' => Yii::t('app', 'Status'),
            'date_modified' => Yii::t('app', 'Date Modified'),
        );
    }

}

