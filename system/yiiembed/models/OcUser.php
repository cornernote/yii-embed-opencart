<?php
/**
 * OcUser
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{user}}
 * @property integer $user_id
 * @property integer $user_group_id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $image
 * @property string $code
 * @property string $ip
 * @property integer $status
 * @property string $date_added
 *
 * Relations
 * @property OcUserGroup $userGroup
 *
 * @see CActiveRecord
 * @method OcUser find() find($condition, array $params = array())
 * @method OcUser findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcUser findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcUser findBySql() findBySql($sql, array $params = array())
 * @method OcUser[] findAll() findAll($condition = '', array $params = array())
 * @method OcUser[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcUser[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcUser[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcUser with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcUser extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcUser the static model class
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
        return '{{user}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'userGroup' => array(self::BELONGS_TO, 'OcUserGroup', 'user_group_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'user_id' => Yii::t('app', 'User'),
            'user_group_id' => Yii::t('app', 'User Group'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'salt' => Yii::t('app', 'Salt'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'email' => Yii::t('app', 'Email'),
            'image' => Yii::t('app', 'Image'),
            'code' => Yii::t('app', 'Code'),
            'ip' => Yii::t('app', 'Ip'),
            'status' => Yii::t('app', 'Status'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

