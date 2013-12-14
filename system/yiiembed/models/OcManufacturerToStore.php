<?php
/**
 * OcManufacturerToStore
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{manufacturer_to_store}}
 * @property integer $manufacturer_id
 * @property integer $store_id
 *
 * @see CActiveRecord
 * @method OcManufacturerToStore find() find($condition, array $params = array())
 * @method OcManufacturerToStore findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcManufacturerToStore findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcManufacturerToStore findBySql() findBySql($sql, array $params = array())
 * @method OcManufacturerToStore[] findAll() findAll($condition = '', array $params = array())
 * @method OcManufacturerToStore[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcManufacturerToStore[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcManufacturerToStore[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcManufacturerToStore with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcManufacturerToStore extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcManufacturerToStore the static model class
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
        return '{{manufacturer_to_store}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'manufacturer_id' => Yii::t('app', 'Manufacturer'),
            'store_id' => Yii::t('app', 'Store'),
        );
    }

}

