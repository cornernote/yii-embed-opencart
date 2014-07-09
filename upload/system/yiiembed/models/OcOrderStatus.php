<?php
/**
 * OcOrderStatus
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcOrderStatus extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderStatus the static model class
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
        return '{{order_status}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orders' => array(self::HAS_MANY, 'OcOrder', 'order_status_id'),
            'orderHistories' => array(self::HAS_MANY, 'OcOrderHistory', 'order_status_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_status_id' => Yii::t('app', 'Order Status'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

