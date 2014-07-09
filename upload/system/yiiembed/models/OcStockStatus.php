<?php
/**
 * OcStockStatus
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcStockStatus extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcStockStatus the static model class
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
        return '{{stock_status}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'products' => array(self::HAS_MANY, 'OcProduct', 'stock_status_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'stock_status_id' => Yii::t('app', 'Stock Status'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

