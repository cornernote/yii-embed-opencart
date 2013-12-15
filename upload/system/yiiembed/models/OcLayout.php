<?php
/**
 * OcLayout
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{layout}}
 * @property integer $layout_id
 * @property string $name
 *
 * Relations
 * @property OcLayoutRoute[] $layoutRoutes
 *
 * @see CActiveRecord
 * @method OcLayout find() find($condition, array $params = array())
 * @method OcLayout findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcLayout findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLayout findBySql() findBySql($sql, array $params = array())
 * @method OcLayout[] findAll() findAll($condition = '', array $params = array())
 * @method OcLayout[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcLayout[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLayout[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcLayout with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcLayout extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcLayout the static model class
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

