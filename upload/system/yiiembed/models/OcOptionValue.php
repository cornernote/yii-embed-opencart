<?php
/**
 * OcOptionValue
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{option_value}}
 * @property integer $option_value_id
 * @property integer $option_id
 * @property string $image
 * @property integer $sort_order
 *
 * Relations
 * @property \OcOption $option
 * @property \OcLanguage[] $languages
 * @property \OcProductOptionValue[] $productOptionValues
 *
 * @see \CActiveRecord
 * @method \OcOptionValue find($condition = '', array $params = array())
 * @method \OcOptionValue findByPk($pk, $condition = '', array $params = array())
 * @method \OcOptionValue findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOptionValue findBySql($sql, array $params = array())
 * @method \OcOptionValue[] findAll($condition = '', array $params = array())
 * @method \OcOptionValue[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcOptionValue[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOptionValue[] findAllBySql($sql, array $params = array())
 * @method \OcOptionValue with()
 * @method \OcOptionValue together()
 * @method \OcOptionValue cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcOptionValue resetScope($resetDefault = true)
 * @method \OcOptionValue populateRecord($attributes, $callAfterFind = true)
 * @method \OcOptionValue[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcOptionValue extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOptionValue the static model class
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
        return '{{option_value}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'option' => array(self::BELONGS_TO, 'OcOption', 'option_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{option_value_description}}(option_value_id, language_id)'),
            'productOptionValues' => array(self::HAS_MANY, 'OcProductOptionValue', 'option_value_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'option_value_id' => Yii::t('app', 'Option Value'),
            'option_id' => Yii::t('app', 'Option'),
            'image' => Yii::t('app', 'Image'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

