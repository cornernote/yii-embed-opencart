<?php
/**
 * OcDownload
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{download}}
 * @property integer $download_id
 * @property string $filename
 * @property string $mask
 * @property integer $remaining
 * @property string $date_added
 *
 * Relations
 * @property OcLanguage[] $languages
 * @property OcProduct[] $products
 *
 * @see CActiveRecord
 * @method OcDownload find() find($condition, array $params = array())
 * @method OcDownload findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcDownload findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcDownload findBySql() findBySql($sql, array $params = array())
 * @method OcDownload[] findAll() findAll($condition = '', array $params = array())
 * @method OcDownload[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcDownload[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcDownload[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcDownload with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcDownload extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcDownload the static model class
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
        return '{{download}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{download_description}}(download_id, language_id)'),
            'products' => array(self::MANY_MANY, 'OcProduct', '{{product_to_download}}(download_id, product_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'download_id' => Yii::t('app', 'Download'),
            'filename' => Yii::t('app', 'Filename'),
            'mask' => Yii::t('app', 'Mask'),
            'remaining' => Yii::t('app', 'Remaining'),
            'date_added' => Yii::t('app', 'Date Added'),
        );
    }

}

