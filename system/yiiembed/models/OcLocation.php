<?php
/**
 * OcLocation
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{location}}
 * @property integer $location_id
 * @property string $name
 * @property string $address
 * @property string $telephone
 * @property string $fax
 * @property string $geocode
 * @property string $image
 * @property string $open
 * @property string $comment
 *
 * @see CActiveRecord
 * @method OcLocation find() find($condition, array $params = array())
 * @method OcLocation findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcLocation findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLocation findBySql() findBySql($sql, array $params = array())
 * @method OcLocation[] findAll() findAll($condition = '', array $params = array())
 * @method OcLocation[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcLocation[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLocation[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcLocation with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcLocation extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcLocation the static model class
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
        return '{{location}}';
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
            'location_id' => Yii::t('app', 'Location'),
            'name' => Yii::t('app', 'Name'),
            'address' => Yii::t('app', 'Address'),
            'telephone' => Yii::t('app', 'Telephone'),
            'fax' => Yii::t('app', 'Fax'),
            'geocode' => Yii::t('app', 'Geocode'),
            'image' => Yii::t('app', 'Image'),
            'open' => Yii::t('app', 'Open'),
            'comment' => Yii::t('app', 'Comment'),
        );
    }

}

