<?php
/**
 * OcOption
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{option}}
 * @property integer $option_id
 * @property string $type
 * @property integer $sort_order
 *
 * Relations
 * @property \OcLanguage[] $languages
 * @property \OcOptionValue[] $optionValues
 * @property \OcProductOption[] $productOptions
 * @property \OcProductOptionValue[] $productOptionValues
 *
 * @see \CActiveRecord
 * @method \OcOption find($condition = '', array $params = array())
 * @method \OcOption findByPk($pk, $condition = '', array $params = array())
 * @method \OcOption findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOption findBySql($sql, array $params = array())
 * @method \OcOption[] findAll($condition = '', array $params = array())
 * @method \OcOption[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcOption[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOption[] findAllBySql($sql, array $params = array())
 * @method \OcOption with()
 * @method \OcOption together()
 * @method \OcOption cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcOption resetScope($resetDefault = true)
 * @method \OcOption populateRecord($attributes, $callAfterFind = true)
 * @method \OcOption[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcOption extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOption the static model class
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
        return '{{option}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{option_description}}(option_id, language_id)'),
            'optionValues' => array(self::HAS_MANY, 'OcOptionValue', 'option_id'),
            'productOptions' => array(self::HAS_MANY, 'OcProductOption', 'option_id'),
            'productOptionValues' => array(self::HAS_MANY, 'OcProductOptionValue', 'option_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'option_id' => Yii::t('app', 'Option'),
            'type' => Yii::t('app', 'Type'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

