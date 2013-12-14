<?php
/**
 * OcWeightClassDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{weight_class_description}}
 * @property integer $weight_class_id
 * @property integer $language_id
 * @property string $title
 * @property string $unit
 *
 * @see CActiveRecord
 * @method OcWeightClassDescription find() find($condition, array $params = array())
 * @method OcWeightClassDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcWeightClassDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcWeightClassDescription findBySql() findBySql($sql, array $params = array())
 * @method OcWeightClassDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcWeightClassDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcWeightClassDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcWeightClassDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcWeightClassDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcWeightClassDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcWeightClassDescription the static model class
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
        return '{{weight_class_description}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'weight_class_id' => Yii::t('app', 'Weight Class'),
            'language_id' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'unit' => Yii::t('app', 'Unit'),
        );
    }

}

