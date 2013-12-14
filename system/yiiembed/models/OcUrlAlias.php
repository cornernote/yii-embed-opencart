<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{url_alias}}
 * @property integer $url_alias_id
 * @property string $query
 * @property string $keyword
 *
 * @see CActiveRecord
 * @method OcUrlAlias find() find($condition, array $params = array())
 * @method OcUrlAlias findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcUrlAlias findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcUrlAlias findBySql() findBySql($sql, array $params = array())
 * @method OcUrlAlias[] findAll() findAll($condition = '', array $params = array())
 * @method OcUrlAlias[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcUrlAlias[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcUrlAlias[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcUrlAlias with() with()
 *
 * --- END GenerateProperties ---
 */

class OcUrlAlias extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcUrlAlias the static model class
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
        return '{{url_alias}}';
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
            'url_alias_id' => Yii::t('app', 'Url Alias'),
            'query' => Yii::t('app', 'Query'),
            'keyword' => Yii::t('app', 'Keyword'),
        );
    }

}

