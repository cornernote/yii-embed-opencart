<?php
/**
 * OcProduct
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{product}}
 * @property integer $product_id
 * @property string $model
 * @property string $sku
 * @property string $upc
 * @property string $ean
 * @property string $jan
 * @property string $isbn
 * @property string $mpn
 * @property string $location
 * @property integer $quantity
 * @property integer $stock_status_id
 * @property string $image
 * @property integer $manufacturer_id
 * @property integer $shipping
 * @property number $price
 * @property integer $points
 * @property integer $tax_class_id
 * @property string $date_available
 * @property number $weight
 * @property integer $weight_class_id
 * @property number $length
 * @property number $width
 * @property number $height
 * @property integer $length_class_id
 * @property integer $subtract
 * @property integer $minimum
 * @property integer $sort_order
 * @property integer $status
 * @property string $date_added
 * @property string $date_modified
 * @property integer $viewed
 *
 * Relations
 * @property \OcCouponProduct[] $couponProducts
 * @property \OcOrderProduct[] $orderProducts
 * @property \OcOrderRecurring[] $orderRecurrings
 * @property \OcStockStatus $stockStatus
 * @property \OcManufacturer $manufacturer
 * @property \OcTaxClass $taxClass
 * @property \OcWeightClass $weightClass
 * @property \OcLengthClass $lengthClass
 * @property \OcProductAttribute[] $productAttributes
 * @property \OcLanguage[] $languages
 * @property \OcProductDiscount[] $productDiscounts
 * @property \OcFilter[] $filters
 * @property \OcProductImage[] $productImages
 * @property \OcProductOption[] $productOptions
 * @property \OcProductOptionValue[] $productOptionValues
 * @property \OcProductProfile[] $productProfiles
 * @property \OcStore[] $stores
 * @property \OcRelated[] $relateds
 * @property \OcProductReward[] $productRewards
 * @property \OcProductSpecial[] $productSpecials
 * @property \OcCategory[] $categories
 * @property \OcDownload[] $downloads
 * @property \OcReturn[] $returns
 * @property \OcReview[] $reviews
 *
 * @see \CActiveRecord
 * @method \OcProduct find($condition = '', array $params = array())
 * @method \OcProduct findByPk($pk, $condition = '', array $params = array())
 * @method \OcProduct findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProduct findBySql($sql, array $params = array())
 * @method \OcProduct[] findAll($condition = '', array $params = array())
 * @method \OcProduct[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcProduct[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcProduct[] findAllBySql($sql, array $params = array())
 * @method \OcProduct with()
 * @method \OcProduct together()
 * @method \OcProduct cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcProduct resetScope($resetDefault = true)
 * @method \OcProduct populateRecord($attributes, $callAfterFind = true)
 * @method \OcProduct[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcProduct extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcProduct the static model class
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
        return '{{product}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'couponProducts' => array(self::HAS_MANY, 'OcCouponProduct', 'product_id'),
            'orderProducts' => array(self::HAS_MANY, 'OcOrderProduct', 'product_id'),
            'orderRecurrings' => array(self::HAS_MANY, 'OcOrderRecurring', 'product_id'),
            'stockStatus' => array(self::BELONGS_TO, 'OcStockStatus', 'stock_status_id'),
            'manufacturer' => array(self::BELONGS_TO, 'OcManufacturer', 'manufacturer_id'),
            'taxClass' => array(self::BELONGS_TO, 'OcTaxClass', 'tax_class_id'),
            'weightClass' => array(self::BELONGS_TO, 'OcWeightClass', 'weight_class_id'),
            'lengthClass' => array(self::BELONGS_TO, 'OcLengthClass', 'length_class_id'),
            'productAttributes' => array(self::HAS_MANY, 'OcProductAttribute', 'product_id'),
            'languages' => array(self::MANY_MANY, 'OcLanguage', '{{product_description}}(product_id, language_id)'),
            'productDiscounts' => array(self::HAS_MANY, 'OcProductDiscount', 'product_id'),
            'filters' => array(self::MANY_MANY, 'OcFilter', '{{product_filter}}(product_id, filter_id)'),
            'productImages' => array(self::HAS_MANY, 'OcProductImage', 'product_id'),
            'productOptions' => array(self::HAS_MANY, 'OcProductOption', 'product_id'),
            'productOptionValues' => array(self::HAS_MANY, 'OcProductOptionValue', 'product_id'),
            'productProfiles' => array(self::HAS_MANY, 'OcProductProfile', 'product_id'),
            'stores' => array(self::MANY_MANY, 'OcStore', '{{product_to_store}}(product_id, store_id)'),
            'relateds' => array(self::MANY_MANY, 'OcRelated', '{{product_related}}(product_id, related_id)'),
            'productRewards' => array(self::HAS_MANY, 'OcProductReward', 'product_id'),
            'productSpecials' => array(self::HAS_MANY, 'OcProductSpecial', 'product_id'),
            'categories' => array(self::MANY_MANY, 'OcCategory', '{{product_to_category}}(product_id, category_id)'),
            'downloads' => array(self::MANY_MANY, 'OcDownload', '{{product_to_download}}(product_id, download_id)'),
            'returns' => array(self::HAS_MANY, 'OcReturn', 'product_id'),
            'reviews' => array(self::HAS_MANY, 'OcReview', 'product_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'product_id' => Yii::t('app', 'Product'),
            'model' => Yii::t('app', 'Model'),
            'sku' => Yii::t('app', 'Sku'),
            'upc' => Yii::t('app', 'Upc'),
            'ean' => Yii::t('app', 'Ean'),
            'jan' => Yii::t('app', 'Jan'),
            'isbn' => Yii::t('app', 'Isbn'),
            'mpn' => Yii::t('app', 'Mpn'),
            'location' => Yii::t('app', 'Location'),
            'quantity' => Yii::t('app', 'Quantity'),
            'stock_status_id' => Yii::t('app', 'Stock Status'),
            'image' => Yii::t('app', 'Image'),
            'manufacturer_id' => Yii::t('app', 'Manufacturer'),
            'shipping' => Yii::t('app', 'Shipping'),
            'price' => Yii::t('app', 'Price'),
            'points' => Yii::t('app', 'Points'),
            'tax_class_id' => Yii::t('app', 'Tax Class'),
            'date_available' => Yii::t('app', 'Date Available'),
            'weight' => Yii::t('app', 'Weight'),
            'weight_class_id' => Yii::t('app', 'Weight Class'),
            'length' => Yii::t('app', 'Length'),
            'width' => Yii::t('app', 'Width'),
            'height' => Yii::t('app', 'Height'),
            'length_class_id' => Yii::t('app', 'Length Class'),
            'subtract' => Yii::t('app', 'Subtract'),
            'minimum' => Yii::t('app', 'Minimum'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
            'date_added' => Yii::t('app', 'Date Added'),
            'date_modified' => Yii::t('app', 'Date Modified'),
            'viewed' => Yii::t('app', 'Viewed'),
        );
    }

}

