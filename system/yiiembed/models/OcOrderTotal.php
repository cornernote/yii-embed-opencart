<?php
/**
 * OcOrderTotal
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{order_total}}
 * @property integer $order_total_id
 * @property integer $order_id
 * @property string $code
 * @property string $title
 * @property number $value
 * @property integer $sort_order
 *
 * Relations
 * @property OcOrder $order
 *
 * @see CActiveRecord
 * @method OcOrderTotal find() find($condition, array $params = array())
 * @method OcOrderTotal findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcOrderTotal findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderTotal findBySql() findBySql($sql, array $params = array())
 * @method OcOrderTotal[] findAll() findAll($condition = '', array $params = array())
 * @method OcOrderTotal[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcOrderTotal[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcOrderTotal[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcOrderTotal with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcOrderTotal extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcOrderTotal the static model class
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
        return '{{order_total}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'order_total_id' => Yii::t('app', 'Order Total'),
            'order_id' => Yii::t('app', 'Order'),
            'code' => Yii::t('app', 'Code'),
            'title' => Yii::t('app', 'Title'),
            'value' => Yii::t('app', 'Value'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        );
    }

}

