<?php
/**
 * OcLengthClass
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{length_class}}
 * @property integer $length_class_id
 * @property number $value
 *
 * Relations
 * @property OcLanguage[] $languages
 * @property OcProduct[] $products
 *
 * @see CActiveRecord
 * @method OcLengthClass find() find($condition, array $params = array())
 * @method OcLengthClass findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcLengthClass findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLengthClass findBySql() findBySql($sql, array $params = array())
 * @method OcLengthClass[] findAll() findAll($condition = '', array $params = array())
 * @method OcLengthClass[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcLengthClass[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLengthClass[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcLengthClass with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcLengthClass extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcLengthClass the static model class
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
        return '{{length_class}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{length_class_description}}(length_class_id, language_id)'),
            'products' => array(self::HAS_MANY, 'OcProduct', 'length_class_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'length_class_id' => Yii::t('app', 'Length Class'),
            'value' => Yii::t('app', 'Value'),
        );
    }

}

