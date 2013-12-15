<?php
/**
 * OcProfileDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{profile_description}}
 * @property integer $profile_id
 * @property integer $language_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcProfileDescription find() find($condition, array $params = array())
 * @method OcProfileDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcProfileDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProfileDescription findBySql() findBySql($sql, array $params = array())
 * @method OcProfileDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcProfileDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcProfileDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcProfileDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcProfileDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcProfileDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProfileDescription the static model class
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
        return '{{profile_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'profile_id' => Yii::t('app', 'Profile'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

