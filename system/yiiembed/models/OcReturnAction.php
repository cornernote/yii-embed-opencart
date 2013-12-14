<?php
/**
 * OcReturnAction
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{return_action}}
 * @property integer $return_action_id
 * @property integer $language_id
 * @property string $name
 *
 * Relations
 * @property OcReturn[] $returns
 * @property OcLanguage $language
 *
 * @see CActiveRecord
 * @method OcReturnAction find() find($condition, array $params = array())
 * @method OcReturnAction findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcReturnAction findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReturnAction findBySql() findBySql($sql, array $params = array())
 * @method OcReturnAction[] findAll() findAll($condition = '', array $params = array())
 * @method OcReturnAction[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcReturnAction[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReturnAction[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcReturnAction with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcReturnAction extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcReturnAction the static model class
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
        return '{{return_action}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'returns' => array(self::HAS_MANY, 'OcReturn', 'return_action_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'return_action_id' => Yii::t('app', 'Return Action'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

