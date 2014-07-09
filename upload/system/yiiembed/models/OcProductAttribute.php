<?php
/**
 * OcProductAttribute
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcProductAttribute extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductAttribute the static model class
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
        return '{{product_attribute}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'product' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'attribute' => array(self::BELONGS_TO, 'OcAttribute', 'attribute_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'attribute_id' => Yii::t('app', 'Attribute'),
            'language_id' => Yii::t('app', 'Language'),
            'text' => Yii::t('app', 'Text'),
        );
    }

}

