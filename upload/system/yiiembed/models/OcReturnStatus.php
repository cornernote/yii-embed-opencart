<?php
/**
 * OcReturnStatus
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{return_status}}
 * @property integer $return_status_id
 * @property integer $language_id
 * @property string $name
 *
 * Relations
 * @property OcReturn[] $returns
 * @property OcReturnHistory[] $returnHistories
 * @property OcLanguage $language
 *
 * @see CActiveRecord
 * @method OcReturnStatus find() find($condition, array $params = array())
 * @method OcReturnStatus findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcReturnStatus findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReturnStatus findBySql() findBySql($sql, array $params = array())
 * @method OcReturnStatus[] findAll() findAll($condition = '', array $params = array())
 * @method OcReturnStatus[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcReturnStatus[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReturnStatus[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcReturnStatus with() with()
 *
 * --- END GenerateProperties ---
 */

class OcReturnStatus extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcReturnStatus the static model class
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
        return '{{return_status}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'returns' => array(self::HAS_MANY, 'OcReturn', 'return_status_id'),
            'returnHistories' => array(self::HAS_MANY, 'OcReturnHistory', 'return_status_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'return_status_id' => Yii::t('app', 'Return Status'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

