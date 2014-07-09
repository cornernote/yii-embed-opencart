<?php
/**
 * OcLengthClass
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{length_class}}
 * @property integer $length_class_id
 * @property number $value
 *
 * Relations
 * @property \OcLanguage[] $languages
 * @property \OcProduct[] $products
 *
 * @see \CActiveRecord
 * @method \OcLengthClass find($condition = '', array $params = array())
 * @method \OcLengthClass findByPk($pk, $condition = '', array $params = array())
 * @method \OcLengthClass findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcLengthClass findBySql($sql, array $params = array())
 * @method \OcLengthClass[] findAll($condition = '', array $params = array())
 * @method \OcLengthClass[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcLengthClass[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcLengthClass[] findAllBySql($sql, array $params = array())
 * @method \OcLengthClass with()
 * @method \OcLengthClass together()
 * @method \OcLengthClass cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcLengthClass resetScope($resetDefault = true)
 * @method \OcLengthClass populateRecord($attributes, $callAfterFind = true)
 * @method \OcLengthClass[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcLengthClass extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcLengthClass the static model class
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
        return '{{length_class}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{length_class_description}}(length_class_id, language_id)'),
            'products' => array(self::HAS_MANY, 'OcProduct', 'length_class_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'length_class_id' => Yii::t('app', 'Length Class'),
            'value' => Yii::t('app', 'Value'),
        );
    }

}

