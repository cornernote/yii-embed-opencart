<?php
/**
 * OcInformationToLayout
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{information_to_layout}}
 * @property integer $information_id
 * @property integer $store_id
 * @property integer $layout_id
 *
 * @see CActiveRecord
 * @method OcInformationToLayout find() find($condition, array $params = array())
 * @method OcInformationToLayout findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcInformationToLayout findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformationToLayout findBySql() findBySql($sql, array $params = array())
 * @method OcInformationToLayout[] findAll() findAll($condition = '', array $params = array())
 * @method OcInformationToLayout[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcInformationToLayout[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcInformationToLayout[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcInformationToLayout with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcInformationToLayout extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcInformationToLayout the static model class
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
        return '{{information_to_layout}}';
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'information_id' => Yii::t('app', 'Information'),
            'store_id' => Yii::t('app', 'Store'),
            'layout_id' => Yii::t('app', 'Layout'),
        );
    }

}

