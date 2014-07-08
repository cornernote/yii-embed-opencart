<?php
/**
 * OcStockStatus
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{stock_status}}
 * @property integer $stock_status_id
 * @property integer $language_id
 * @property string $name
 *
 * Relations
 * @property OcProduct[] $products
 * @property OcLanguage $language
 *
 * @see CActiveRecord
 * @method OcStockStatus find() find($condition, array $params = array())
 * @method OcStockStatus findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcStockStatus findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcStockStatus findBySql() findBySql($sql, array $params = array())
 * @method OcStockStatus[] findAll() findAll($condition = '', array $params = array())
 * @method OcStockStatus[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcStockStatus[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcStockStatus[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcStockStatus with() with()
 *
 * --- END GenerateProperties ---
 */

class OcStockStatus extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcStockStatus the static model class
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
        return '{{stock_status}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'products' => array(self::HAS_MANY, 'OcProduct', 'stock_status_id'),
            'language' => array(self::BELONGS_TO, 'OcLanguage', 'language_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'stock_status_id' => Yii::t('app', 'Stock Status'),
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
        );
    }

}

