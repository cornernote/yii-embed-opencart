<?php
/**
 * OcOptionValueDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{option_value_description}}
 * @property integer $option_value_id
 * @property integer $language_id
 * @property integer $option_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcOptionValueDescription find() find($condition, array $params = array())
 * @method OcOptionValueDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOptionValueDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOptionValueDescription findBySql() findBySql($sql, array $params = array())
 * @method OcOptionValueDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcOptionValueDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOptionValueDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOptionValueDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOptionValueDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcOptionValueDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOptionValueDescription the static model class
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
        return '{{option_value_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'option_value_id' => Yii::t('app', 'Option Value'),
            'language_id' => Yii::t('app', 'Language'),
            'option_id' => Yii::t('app', 'Option'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

