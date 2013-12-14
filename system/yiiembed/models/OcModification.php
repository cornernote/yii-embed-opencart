<?php
/**
 * OcModification
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{modification}}
 * @property integer $modification_id
 * @property string $name
 * @property string $author
 * @property string $version
 * @property string $link
 * @property string $code
 * @property integer $status
 * @property string $date_added
 *
 * @see CActiveRecord
 * @method OcModification find() find($condition, array $params = array())
 * @method OcModification findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcModification findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcModification findBySql() findBySql($sql, array $params = array())
 * @method OcModification[] findAll() findAll($condition = '', array $params = array())
 * @method OcModification[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcModification[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcModification[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcModification with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcModification extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcModification the static model class
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
        return '{{modification}}';
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
            'modification_id' => Yii::t('app', 'Modification'),
            'name' => Yii::t('app', 'Name'),
            'author' => Yii::t('app', 'Author'),
            'version' => Yii::t('app', 'Version'),
            'link' => Yii::t('app', 'Link'),
            'code' => Yii::t('app', 'Code'),
            'status' => Yii::t('app', 'Status'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

