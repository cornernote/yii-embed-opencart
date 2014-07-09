<?php
/**
 * OcStore
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{store}}
 * @property integer $store_id
 * @property string $name
 * @property string $url
 * @property string $ssl
 *
 * Relations
 * @property \OcCategory[] $categories
 * @property \OcCategory[] $categories1
 * @property \OcCustomer[] $customers
 * @property \OcInformation[] $informations
 * @property \OcInformation[] $informations1
 * @property \OcLayoutRoute[] $layoutRoutes
 * @property \OcManufacturer[] $manufacturers
 * @property \OcOrder[] $orders
 * @property \OcProduct[] $products
 * @property \OcProduct[] $products1
 * @property \OcProduct[] $products2
 * @property \OcSetting[] $settings
 *
 * @see \CActiveRecord
 * @method \OcStore find($condition = '', array $params = array())
 * @method \OcStore findByPk($pk, $condition = '', array $params = array())
 * @method \OcStore findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcStore findBySql($sql, array $params = array())
 * @method \OcStore[] findAll($condition = '', array $params = array())
 * @method \OcStore[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcStore[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcStore[] findAllBySql($sql, array $params = array())
 * @method \OcStore with()
 * @method \OcStore together()
 * @method \OcStore cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcStore resetScope($resetDefault = true)
 * @method \OcStore populateRecord($attributes, $callAfterFind = true)
 * @method \OcStore[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcStore extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcStore the static model class
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
        return '{{store}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'categories' => array(self::MANY_MANY, 'OcCategory', '{{category_to_layout}}(store_id, category_id)'),
            'categories1' => array(self::MANY_MANY, 'OcCategory', '{{category_to_store}}(store_id, category_id)'),
            'customers' => array(self::HAS_MANY, 'OcCustomer', 'store_id'),
            'informations' => array(self::MANY_MANY, 'OcInformation', '{{information_to_layout}}(store_id, information_id)'),
            'informations1' => array(self::MANY_MANY, 'OcInformation', '{{information_to_store}}(store_id, information_id)'),
            'layoutRoutes' => array(self::HAS_MANY, 'OcLayoutRoute', 'store_id'),
            'manufacturers' => array(self::MANY_MANY, 'OcManufacturer', '{{manufacturer_to_store}}(store_id, manufacturer_id)'),
            'orders' => array(self::HAS_MANY, 'OcOrder', 'store_id'),
            'products' => array(self::MANY_MANY, 'OcProduct', '{{product_recurring}}(store_id, product_id)'),
            'products1' => array(self::MANY_MANY, 'OcProduct', '{{product_to_layout}}(store_id, product_id)'),
            'products2' => array(self::MANY_MANY, 'OcProduct', '{{product_to_store}}(store_id, product_id)'),
            'settings' => array(self::HAS_MANY, 'OcSetting', 'store_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'store_id' => Yii::t('app', 'Store'),
            'name' => Yii::t('app', 'Name'),
            'url' => Yii::t('app', 'Url'),
            'ssl' => Yii::t('app', 'Ssl'),
        );
    }

}

