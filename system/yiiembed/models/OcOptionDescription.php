<?php
/**
 * OcOptionDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{option_description}}
 * @property integer $option_id
 * @property integer $language_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcOptionDescription find() find($condition, array $params = array())
 * @method OcOptionDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOptionDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOptionDescription findBySql() findBySql($sql, array $params = array())
 * @method OcOptionDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcOptionDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOptionDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOptionDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOptionDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcOptionDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOptionDescription the static model class
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
        return '{{option_description}}';
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
            'option_id' => Yii::t('app', 'Option'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

