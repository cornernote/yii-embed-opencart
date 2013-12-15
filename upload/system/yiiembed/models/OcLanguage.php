<?php
/**
 * OcLanguage
 *
 * --- BEGIN GenerateProperties ---
 *
 * Table {{language}}
 * @property integer $language_id
 * @property string $name
 * @property string $code
 * @property string $locale
 * @property string $image
 * @property string $directory
 * @property string $filename
 * @property integer $sort_order
 * @property integer $status
 *
 * Relations
 * @property OcAttribute[] $attributes
 * @property OcAttributeGroup[] $attributeGroups
 * @property OcBannerImage[] $bannerImages
 * @property OcCategory[] $categories
 * @property OcCustomField[] $customFields
 * @property OcCustomFieldValue[] $customFieldValues
 * @property OcCustomerGroup[] $customerGroups
 * @property OcDownload[] $downloads
 * @property OcFilter[] $filters
 * @property OcFilterGroup[] $filterGroups
 * @property OcInformation[] $informations
 * @property OcLengthClass[] $lengthClasses
 * @property OcOption[] $options
 * @property OcOptionValue[] $optionValues
 * @property OcOrder[] $orders
 * @property OcOrderStatus[] $orderStatuses
 * @property OcProductAttribute[] $productAttributes
 * @property OcProduct[] $products
 * @property OcProfile[] $profiles
 * @property OcReturnAction[] $returnActions
 * @property OcReturnReason[] $returnReasons
 * @property OcReturnStatus[] $returnStatuses
 * @property OcStockStatus[] $stockStatuses
 * @property OcVoucherTheme[] $voucherThemes
 * @property OcWeightClass[] $weightClasses
 *
 * @see CActiveRecord
 * @method OcLanguage find() find($condition, array $params = array())
 * @method OcLanguage findByPk() findByPk($pk, $condition = '', array $params = array())
 * @method OcLanguage findByAttributes() findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLanguage findBySql() findBySql($sql, array $params = array())
 * @method OcLanguage[] findAll() findAll($condition = '', array $params = array())
 * @method OcLanguage[] findAllByPk() findAllByPk($pk, $condition = '', array $params = array())
 * @method OcLanguage[] findAllByAttributes() findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method OcLanguage[] findAllBySql() findAllBySql($sql, array $params = array())
 * @method OcLanguage with() with()
 *
 * --- END GenerateProperties ---
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @link https://github.com/cornernote/yii-embed-opencart
 * @copyright 2013 Mr PHP <info@mrphp.com.au>
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE
 *
 */
class OcLanguage extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcLanguage the static model class
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
        return '{{language}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'attributes' => array(self::MANY_MANY, 'OcAttribute', '{{attribute_description}}(language_id, attribute_id)'),
            'attributeGroups' => array(self::MANY_MANY, 'OcAttributeGroup', '{{attribute_group_description}}(language_id, attribute_group_id)'),
            'bannerImages' => array(self::MANY_MANY, 'OcBannerImage', '{{banner_image_description}}(language_id, banner_image_id)'),
            'categories' => array(self::MANY_MANY, 'OcCategory', '{{category_description}}(language_id, category_id)'),
            'customFields' => array(self::MANY_MANY, 'OcCustomField', '{{custom_field_description}}(language_id, custom_field_id)'),
            'customFieldValues' => array(self::MANY_MANY, 'OcCustomFieldValue', '{{custom_field_value_description}}(language_id, custom_field_value_id)'),
            'customerGroups' => array(self::MANY_MANY, 'OcCustomerGroup', '{{customer_group_description}}(language_id, customer_group_id)'),
            'downloads' => array(self::MANY_MANY, 'OcDownload', '{{download_description}}(language_id, download_id)'),
            'filters' => array(self::MANY_MANY, 'OcFilter', '{{filter_description}}(language_id, filter_id)'),
            'filterGroups' => array(self::MANY_MANY, 'OcFilterGroup', '{{filter_group_description}}(language_id, filter_group_id)'),
            'informations' => array(self::MANY_MANY, 'OcInformation', '{{information_description}}(language_id, information_id)'),
            'lengthClasses' => array(self::MANY_MANY, 'OcLengthClass', '{{length_class_description}}(language_id, length_class_id)'),
            'options' => array(self::MANY_MANY, 'OcOption', '{{option_description}}(language_id, option_id)'),
            'optionValues' => array(self::MANY_MANY, 'OcOptionValue', '{{option_value_description}}(language_id, option_value_id)'),
            'orders' => array(self::HAS_MANY, 'OcOrder', 'language_id'),
            'orderStatuses' => array(self::HAS_MANY, 'OcOrderStatus', 'language_id'),
            'productAttributes' => array(self::HAS_MANY, 'OcProductAttribute', 'language_id'),
            'products' => array(self::MANY_MANY, 'OcProduct', '{{product_description}}(language_id, product_id)'),
            'profiles' => array(self::MANY_MANY, 'OcProfile', '{{profile_description}}(language_id, profile_id)'),
            'returnActions' => array(self::HAS_MANY, 'OcReturnAction', 'language_id'),
            'returnReasons' => array(self::HAS_MANY, 'OcReturnReason', 'language_id'),
            'returnStatuses' => array(self::HAS_MANY, 'OcReturnStatus', 'language_id'),
            'stockStatuses' => array(self::HAS_MANY, 'OcStockStatus', 'language_id'),
            'voucherThemes' => array(self::MANY_MANY, 'OcVoucherTheme', '{{voucher_theme_description}}(language_id, voucher_theme_id)'),
            'weightClasses' => array(self::MANY_MANY, 'OcWeightClass', '{{weight_class_description}}(language_id, weight_class_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'language_id' => Yii::t('app', 'Language'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'Code'),
            'locale' => Yii::t('app', 'Locale'),
            'image' => Yii::t('app', 'Image'),
            'directory' => Yii::t('app', 'Directory'),
            'filename' => Yii::t('app', 'Filename'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
        );
    }

}

