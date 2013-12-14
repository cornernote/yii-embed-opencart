<?php
/**
 * --- BEGIN GenerateProperties ---
 *
 * Table {{marketing}}
 * @property integer $marketing_id
 * @property string $name
 * @property string $description
 * @property string $code
 * @property integer $clicks
 * @property string $date_added
 *
 * Relations
 * @property OcOrder[] $orders
 *
 * @see CActiveRecord
 * @method OcMarketing find() find($condition, array $params = array())
 * @method OcMarketing findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcMarketing findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcMarketing findBySql() findBySql($sql, array $params = array())
 * @method OcMarketing[] findAll() findAll($condition = '', array $params = array())
 * @method OcMarketing[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcMarketing[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcMarketing[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcMarketing with() with()
 *
 * --- END GenerateProperties ---
 */

class OcMarketing extends OcActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcMarketing the static model class
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
        return '{{marketing}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orders' => array(self::HAS_MANY, 'OcOrder', 'marketing_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'marketing_id' => Yii::t('app', 'Marketing'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'code' => Yii::t('app', 'Code'),
            'clicks' => Yii::t('app', 'Clicks'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

