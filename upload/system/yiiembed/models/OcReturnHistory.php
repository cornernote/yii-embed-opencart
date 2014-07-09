<?php
/**
 * OcReturnHistory
 *
 * --- BEGIN ModelDoc ---
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
 * @property \OcReturn $return
 * @property \OcReturnStatus $returnStatus
 *
 * @see \CActiveRecord
 * @method \OcReturnHistory find($condition = '', array $params = array())
 * @method \OcReturnHistory findByPk($pk, $condition = '', array $params = array())
 * @method \OcReturnHistory findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcReturnHistory findBySql($sql, array $params = array())
 * @method \OcReturnHistory[] findAll($condition = '', array $params = array())
 * @method \OcReturnHistory[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcReturnHistory[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcReturnHistory[] findAllBySql($sql, array $params = array())
 * @method \OcReturnHistory with()
 * @method \OcReturnHistory together()
 * @method \OcReturnHistory cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcReturnHistory resetScope($resetDefault = true)
 * @method \OcReturnHistory populateRecord($attributes, $callAfterFind = true)
 * @method \OcReturnHistory[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
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
            'return' => array(self::BELONGS_TO, 'OcReturn', 'return_id'),
            'returnStatus' => array(self::BELONGS_TO, 'OcReturnStatus', 'return_status_id'),
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

