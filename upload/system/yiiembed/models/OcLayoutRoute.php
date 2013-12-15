<?php
/**
 * OcLayoutRoute
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{layout_route}}
 * @property integer $layout_route_id
 * @property integer $layout_id
 * @property integer $store_id
 * @property string $route
 *
 * Relations
 * @property OcLayout $layout
 * @property OcStore $store
 *
 * @see CActiveRecord
 * @method OcLayoutRoute find() find($condition, array $params = array())
 * @method OcLayoutRoute findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcLayoutRoute findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLayoutRoute findBySql() findBySql($sql, array $params = array())
 * @method OcLayoutRoute[] findAll() findAll($condition = '', array $params = array())
 * @method OcLayoutRoute[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcLayoutRoute[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLayoutRoute[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcLayoutRoute with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcLayoutRoute extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcLayoutRoute the static model class
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
        return '{{layout_route}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'layout' => array(self::BELONGS_TO, 'OcLayout', 'layout_id'),
            'store' => array(self::BELONGS_TO, 'OcStore', 'store_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'layout_route_id' => Yii::t('app', 'Layout Route'),
            'layout_id' => Yii::t('app', 'Layout'),
            'store_id' => Yii::t('app', 'Store'),
            'route' => Yii::t('app', 'Route'),
        );
    }

}

