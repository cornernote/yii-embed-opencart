<?php
/**
 * OcUrlAlias
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{url_alias}}
 * @property integer $url_alias_id
 * @property string $query
 * @property string $keyword
 *
 * @see \CActiveRecord
 * @method \OcUrlAlias find($condition = '', array $params = array())
 * @method \OcUrlAlias findByPk($pk, $condition = '', array $params = array())
 * @method \OcUrlAlias findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcUrlAlias findBySql($sql, array $params = array())
 * @method \OcUrlAlias[] findAll($condition = '', array $params = array())
 * @method \OcUrlAlias[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcUrlAlias[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcUrlAlias[] findAllBySql($sql, array $params = array())
 * @method \OcUrlAlias with()
 * @method \OcUrlAlias together()
 * @method \OcUrlAlias cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcUrlAlias resetScope($resetDefault = true)
 * @method \OcUrlAlias populateRecord($attributes, $callAfterFind = true)
 * @method \OcUrlAlias[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcUrlAlias extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcUrlAlias the static model class
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
        return '{{url_alias}}';
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

