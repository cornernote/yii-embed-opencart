<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{information_description}}
 * @property integer $information_id
 * @property integer $language_id
 * @property string $title
 * @property string $description
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 *
 * @see CActiveRecord
 * @method OcInformationDescription find() find($condition, array $params = array())
 * @method OcInformationDescription findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcInformationDescription findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformationDescription findBySql() findBySql($sql, array $params = array())
 * @method OcInformationDescription[] findAll() findAll($condition = '', array $params = array())
 * @method OcInformationDescription[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcInformationDescription[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformationDescription[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcInformationDescription with() with()
 *
 * --- END GenerateProperties ---
 */

class OcInformationDescription extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcInformationDescription the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{information_description}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'information_id' => Yii::t('app', 'Information'),
            'language_id' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'meta_keyword' => Yii::t('app', 'Meta Keyword'),
        );
    }

}

