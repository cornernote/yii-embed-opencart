<?php
/**
 * OcUserGroup
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{user_group}}
 * @property integer $user_group_id
 * @property string $name
 * @property string $permission
 *
 * Relations
 * @property \OcUser[] $users
 *
 * @see \CActiveRecord
 * @method \OcUserGroup find($condition = '', array $params = array())
 * @method \OcUserGroup findByPk($pk, $condition = '', array $params = array())
 * @method \OcUserGroup findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcUserGroup findBySql($sql, array $params = array())
 * @method \OcUserGroup[] findAll($condition = '', array $params = array())
 * @method \OcUserGroup[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcUserGroup[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcUserGroup[] findAllBySql($sql, array $params = array())
 * @method \OcUserGroup with()
 * @method \OcUserGroup together()
 * @method \OcUserGroup cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcUserGroup resetScope($resetDefault = true)
 * @method \OcUserGroup populateRecord($attributes, $callAfterFind = true)
 * @method \OcUserGroup[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcUserGroup extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcUserGroup the static model class
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

