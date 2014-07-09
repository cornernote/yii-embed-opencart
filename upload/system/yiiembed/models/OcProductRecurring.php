<?php
/**
 * OcProductRecurring
 *
 * --- BEGIN ModelDoc ---
 *
 * --- END ModelDoc ---
 */

class OcProductRecurring extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProductRecurring the static model class
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
        return '{{product_recurring}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'store_id' => Yii::t('app', 'Store'),
        );
    }

}

