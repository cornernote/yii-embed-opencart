<?php
/**
 * OcInformation
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{information}}
 * @property integer $information_id
 * @property integer $bottom
 * @property integer $sort_order
 * @property integer $status
 *
 * Relations
 * @property OcLanguage[] $languages
 * @property OcStore[] $stores
 *
 * @see CActiveRecord
 * @method OcInformation find() find($condition, array $params = array())
 * @method OcInformation findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcInformation findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformation findBySql() findBySql($sql, array $params = array())
 * @method OcInformation[] findAll() findAll($condition = '', array $params = array())
 * @method OcInformation[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcInformation[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformation[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcInformation with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcInformation extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcInformation the static model class
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
        return '{{information}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{information_description}}(information_id, language_id)'),
            'stores' => array(self::MANY_MANY, 'OcStore', '{{information_to_store}}(information_id, store_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'information_id' => Yii::t('app', 'Information'),
            'bottom' => Yii::t('app', 'Bottom'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
        );
    }

}

