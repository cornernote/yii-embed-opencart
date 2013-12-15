<?php
/**
 * OcWeightClass
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{weight_class}}
 * @property integer $weight_class_id
 * @property number $value
 *
 * Relations
 * @property OcProduct[] $products
 * @property OcLanguage[] $languages
 *
 * @see CActiveRecord
 * @method OcWeightClass find() find($condition, array $params = array())
 * @method OcWeightClass findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcWeightClass findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcWeightClass findBySql() findBySql($sql, array $params = array())
 * @method OcWeightClass[] findAll() findAll($condition = '', array $params = array())
 * @method OcWeightClass[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcWeightClass[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcWeightClass[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcWeightClass with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcWeightClass extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcWeightClass the static model class
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
        return '{{weight_class}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'products' => array(self::HAS_MANY, 'OcProduct', 'weight_class_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{weight_class_description}}(weight_class_id, language_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'weight_class_id' => Yii::t('app', 'Weight Class'),
            'value' => Yii::t('app', 'Value'),
        );
    }

}

