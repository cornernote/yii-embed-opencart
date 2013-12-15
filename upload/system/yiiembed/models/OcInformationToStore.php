<?php
/**
 * OcInformationToStore
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{information_to_store}}
 * @property integer $information_id
 * @property integer $store_id
 *
 * @see CActiveRecord
 * @method OcInformationToStore find() find($condition, array $params = array())
 * @method OcInformationToStore findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcInformationToStore findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformationToStore findBySql() findBySql($sql, array $params = array())
 * @method OcInformationToStore[] findAll() findAll($condition = '', array $params = array())
 * @method OcInformationToStore[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcInformationToStore[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformationToStore[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcInformationToStore with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcInformationToStore extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcInformationToStore the static model class
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
        return '{{information_to_store}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'information_id' => Yii::t('app', 'Information'),
            'store_id' => Yii::t('app', 'Store'),
        );
    }

}

