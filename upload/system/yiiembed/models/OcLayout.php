<?php
/**
 * OcLayout
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{layout}}
 * @property integer $layout_id
 * @property string $name
 *
 * Relations
 * @property \OcLayoutRoute[] $layoutRoutes
 *
 * @see \CActiveRecord
 * @method \OcLayout find($condition = '', array $params = array())
 * @method \OcLayout findByPk($pk, $condition = '', array $params = array())
 * @method \OcLayout findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcLayout findBySql($sql, array $params = array())
 * @method \OcLayout[] findAll($condition = '', array $params = array())
 * @method \OcLayout[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcLayout[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcLayout[] findAllBySql($sql, array $params = array())
 * @method \OcLayout with()
 * @method \OcLayout together()
 * @method \OcLayout cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcLayout resetScope($resetDefault = true)
 * @method \OcLayout populateRecord($attributes, $callAfterFind = true)
 * @method \OcLayout[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcLayout extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcLayout the static model class
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
        return '{{layout}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'layoutRoutes' => array(self::HAS_MANY, 'OcLayoutRoute', 'layout_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'layout_id' => Yii::t('app', 'Layout'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

