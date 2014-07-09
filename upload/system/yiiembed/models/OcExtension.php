<?php
/**
 * OcExtension
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{extension}}
 * @property integer $extension_id
 * @property string $type
 * @property string $code
 *
 * @see \CActiveRecord
 * @method \OcExtension find($condition = '', array $params = array())
 * @method \OcExtension findByPk($pk, $condition = '', array $params = array())
 * @method \OcExtension findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcExtension findBySql($sql, array $params = array())
 * @method \OcExtension[] findAll($condition = '', array $params = array())
 * @method \OcExtension[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcExtension[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcExtension[] findAllBySql($sql, array $params = array())
 * @method \OcExtension with()
 * @method \OcExtension together()
 * @method \OcExtension cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcExtension resetScope($resetDefault = true)
 * @method \OcExtension populateRecord($attributes, $callAfterFind = true)
 * @method \OcExtension[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
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

