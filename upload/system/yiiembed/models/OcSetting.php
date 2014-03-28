<?php
/**
 * OcSetting
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{setting}}
 * @property integer $setting_id
 * @property integer $store_id
 * @property string $group
 * @property string $key
 * @property string $value
 * @property integer $serialized
 *
 * Relations
 * @property OcStore $store
 *
 * @see CActiveRecord
 * @method OcSetting find() find($condition, array $params = array())
 * @method OcSetting findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcSetting findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcSetting findBySql() findBySql($sql, array $params = array())
 * @method OcSetting[] findAll() findAll($condition = '', array $params = array())
 * @method OcSetting[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcSetting[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcSetting[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcSetting with() with()
 *
 * --- END GenerateProperties ---
 */

class OcSetting extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcSetting the static model class
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
        return '{{setting}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'store' => array(self::BELONGS_TO, 'OcStore', 'store_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'setting_id' => Yii::t('app', 'Setting'),
            'store_id' => Yii::t('app', 'Store'),
            'group' => Yii::t('app', 'Group'),
            'key' => Yii::t('app', 'Key'),
            'value' => Yii::t('app', 'Value'),
            'serialized' => Yii::t('app', 'Serialized'),
        );
    }

}

