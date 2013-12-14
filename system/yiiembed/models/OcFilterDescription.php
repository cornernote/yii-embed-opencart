<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{filter_description}}
 * @property integer $filter_id
 * @property integer $language_id
 * @property integer $filter_group_id
 * @property string $name
 *
 * @see CActiveRecord
 * @method OcFilterDescription find() find($condition, array $params = array())
 * @method OcFilterDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcFilterDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcFilterDescription findBySql() findBySql($sql, array $params = array())
 * @method OcFilterDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcFilterDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcFilterDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcFilterDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcFilterDescription with() with()
 *
 * --- END GenerateProperties ---
 */

class OcFilterDescription extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcFilterDescription the static model class
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
        return '{{filter_description}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'filter_id' => Yii::t('app', 'Filter'),
            'language_id' => Yii::t('app', 'Language'),
            'filter_group_id' => Yii::t('app', 'Filter Group'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

