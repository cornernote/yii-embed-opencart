<?php
/**
 * OcExtension
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{extension}}
 * @property integer $extension_id
 * @property string $type
 * @property string $code
 *
 * @see CActiveRecord
 * @method OcExtension find() find($condition, array $params = array())
 * @method OcExtension findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcExtension findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcExtension findBySql() findBySql($sql, array $params = array())
 * @method OcExtension[] findAll() findAll($condition = '', array $params = array())
 * @method OcExtension[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcExtension[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcExtension[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcExtension with() with()
 *
 * --- END GenerateProperties ---
 */

class OcExtension extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcExtension the static model class
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
        return '{{extension}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'extension_id' => Yii::t('app', 'Extension'),
            'type' => Yii::t('app', 'Type'),
            'code' => Yii::t('app', 'Code'),
        );
    }

}

