<?php
/**
 * OcFilterGroupDescription
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{filter_group_description}}
 * @property integer $filter_group_id
 * @property integer $language_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcFilterGroupDescription find() find($condition, array $params = array())
 * @method OcFilterGroupDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcFilterGroupDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcFilterGroupDescription findBySql() findBySql($sql, array $params = array())
 * @method OcFilterGroupDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcFilterGroupDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcFilterGroupDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcFilterGroupDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcFilterGroupDescription with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcFilterGroupDescription extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcFilterGroupDescription the static model class
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
        return '{{filter_group_description}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'filter_group_id' => Yii::t('app', 'Filter Group'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

