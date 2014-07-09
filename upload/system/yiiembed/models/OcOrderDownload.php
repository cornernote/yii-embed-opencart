<?php
/**
 * OcOrderDownload
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{order_download}}
 * @property integer $order_download_id
 * @property integer $order_id
 * @property integer $order_product_id
 * @property string $name
 * @property string $filename
 * @property string $mask
 * @property integer $remaining
 *
 * Relations
 * @property \OcOrder $order
 * @property \OcOrderProduct $orderProduct
 *
 * @see \CActiveRecord
 * @method \OcOrderDownload find($condition = '', array $params = array())
 * @method \OcOrderDownload findByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderDownload findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderDownload findBySql($sql, array $params = array())
 * @method \OcOrderDownload[] findAll($condition = '', array $params = array())
 * @method \OcOrderDownload[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcOrderDownload[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcOrderDownload[] findAllBySql($sql, array $params = array())
 * @method \OcOrderDownload with()
 * @method \OcOrderDownload together()
 * @method \OcOrderDownload cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcOrderDownload resetScope($resetDefault = true)
 * @method \OcOrderDownload populateRecord($attributes, $callAfterFind = true)
 * @method \OcOrderDownload[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcOrderDownload extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderDownload the static model class
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
        return '{{order_download}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'orderProduct' => array(self::BELONGS_TO, 'OcOrderProduct', 'order_product_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_download_id' => Yii::t('app', 'Order Download'),
            'order_id' => Yii::t('app', 'Order'),
            'order_product_id' => Yii::t('app', 'Order Product'),
            'name' => Yii::t('app', 'Name'),
            'filename' => Yii::t('app', 'Filename'),
            'mask' => Yii::t('app', 'Mask'),
            'remaining' => Yii::t('app', 'Remaining'),
        );
    }

}

