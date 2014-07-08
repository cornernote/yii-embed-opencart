<?php
/**
 * OcReturnReason
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{return_reason}}
 * @property integer $return_reason_id
 * @property integer $language_id
 * @property string $name
 *
 * Relations
 * @property OcReturn[] $returns
 * @property OcLanguage $language
 *
 * @see CActiveRecord
 * @method OcReturnReason find() find($condition, array $params = array())
 * @method OcReturnReason findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcReturnReason findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReturnReason findBySql() findBySql($sql, array $params = array())
 * @method OcReturnReason[] findAll() findAll($condition = '', array $params = array())
 * @method OcReturnReason[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcReturnReason[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReturnReason[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcReturnReason with() with()
 *
 * --- END GenerateProperties ---
 */

class OcReturnReason extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcReturnReason the static model class
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
        return '{{return_reason}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'returns' => array(self::HAS_MANY, 'OcReturn', 'return_reason_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'return_reason_id' => Yii::t('app', 'Return Reason'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

