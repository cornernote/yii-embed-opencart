<?php
/**
 * OcLengthClassDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{length_class_description}}
 * @property integer $length_class_id
 * @property integer $language_id
 * @property string $title
 * @property string $unit
 *
 * @see CActiveRecord
 * @method OcLengthClassDescription find() find($condition, array $params = array())
 * @method OcLengthClassDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcLengthClassDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLengthClassDescription findBySql() findBySql($sql, array $params = array())
 * @method OcLengthClassDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcLengthClassDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcLengthClassDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLengthClassDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcLengthClassDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcLengthClassDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcLengthClassDescription the static model class
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
        return '{{length_class_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'length_class_id' => Yii::t('app', 'Length Class'),
            'language_id' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'unit' => Yii::t('app', 'Unit'),
        );
    }

}

