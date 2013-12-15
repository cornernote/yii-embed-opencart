<?php
/**
 * OcUserGroup
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{user_group}}
 * @property integer $user_group_id
 * @property string $name
 * @property string $permission
 *
 * Relations
 * @property OcUser[] $users
 *
 * @see CActiveRecord
 * @method OcUserGroup find() find($condition, array $params = array())
 * @method OcUserGroup findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcUserGroup findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcUserGroup findBySql() findBySql($sql, array $params = array())
 * @method OcUserGroup[] findAll() findAll($condition = '', array $params = array())
 * @method OcUserGroup[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcUserGroup[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcUserGroup[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcUserGroup with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcUserGroup extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcUserGroup the static model class
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
        return '{{user_group}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'users' => array(self::HAS_MANY, 'OcUser', 'user_group_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'user_group_id' => Yii::t('app', 'User Group'),
            'name' => Yii::t('app', 'Name'),
            'permission' => Yii::t('app', 'Permission'),
        );
    }

}

