<?php
/**
 * OcWeightClass
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{weight_class}}
 * @property integer $weight_class_id
 * @property number $value
 *
 * Relations
 * @property \OcProduct[] $products
 * @property \OcLanguage[] $languages
 *
 * @see \CActiveRecord
 * @method \OcWeightClass find($condition = '', array $params = array())
 * @method \OcWeightClass findByPk($pk, $condition = '', array $params = array())
 * @method \OcWeightClass findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcWeightClass findBySql($sql, array $params = array())
 * @method \OcWeightClass[] findAll($condition = '', array $params = array())
 * @method \OcWeightClass[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcWeightClass[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcWeightClass[] findAllBySql($sql, array $params = array())
 * @method \OcWeightClass with()
 * @method \OcWeightClass together()
 * @method \OcWeightClass cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcWeightClass resetScope($resetDefault = true)
 * @method \OcWeightClass populateRecord($attributes, $callAfterFind = true)
 * @method \OcWeightClass[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcWeightClass extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcWeightClass the static model class
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
        return '{{weight_class}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'products' => array(self::HAS_MANY, 'OcProduct', 'weight_class_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{weight_class_description}}(weight_class_id, language_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'weight_class_id' => Yii::t('app', 'Weight Class'),
            'value' => Yii::t('app', 'Value'),
        );
    }

}

