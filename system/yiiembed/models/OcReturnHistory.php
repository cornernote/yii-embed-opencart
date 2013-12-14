<?php
/**
 * OcReturnHistory
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{return_history}}
 * @property integer $return_history_id
 * @property integer $return_id
 * @property integer $return_status_id
 * @property integer $notify
 * @property string $comment
 * @property string $date_added
 *
 * Relations
 * @property OcReturnStatus $returnStatus
 * @property OcReturn $return
 *
 * @see CActiveRecord
 * @method OcReturnHistory find() find($condition, array $params = array())
 * @method OcReturnHistory findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcReturnHistory findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReturnHistory findBySql() findBySql($sql, array $params = array())
 * @method OcReturnHistory[] findAll() findAll($condition = '', array $params = array())
 * @method OcReturnHistory[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcReturnHistory[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcReturnHistory[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcReturnHistory with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yiiembed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yiiembed-opencart/master/LICENSE
 *
 */
class OcReturnHistory extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcReturnHistory the static model class
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
        return '{{return_history}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'returnStatus' => array(self::BELONGS_TO, 'OcReturnStatus', 'return_status_id'),
            'return' => array(self::BELONGS_TO, 'OcReturn', 'return_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'return_history_id' => Yii::t('app', 'Return History'),
            'return_id' => Yii::t('app', 'Return'),
            'return_status_id' => Yii::t('app', 'Return Status'),
            'notify' => Yii::t('app', 'Notify'),
            'comment' => Yii::t('app', 'Comment'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

