<?php
/**
 * OcReturnStatus
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcReturnStatus extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcReturnStatus the static model class
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
        return '{{return_status}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'returns' => array(self::HAS_MANY, 'OcReturn', 'return_status_id'),
            'returnHistories' => array(self::HAS_MANY, 'OcReturnHistory', 'return_status_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'return_status_id' => Yii::t('app', 'Return Status'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

