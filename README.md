# Yii-Embed for OpenCart

A lightweight Yii application embedded into OpenCart


## Features

- Yii is available from anywhere in OpenCart using `Yii::app()` or `Yii::foobar`
- OpenCart registry is available from anywhere in Yii using `Yii::app()->registry`
- Models are built that represent all OpenCart tables including relations
- Generate models for all your tables in one step and create standard Yii Crud using Gii
- Autoload any of your Yii models and components
- Widgets can be rendered and will auto-include their stylesheet and javascript files
- Controllers and Modules are handled by the OpenCart not_found.php controller
- OpenCart controllers and child actions can be run within Yii
- Fancy error messages with stack dump

The following Yii components are pre-configured to work in your OpenCart:
- `Yii::app()->assetManager` - [CAssetManager](http://www.yiiframework.com/doc/api/1.1/CAssetManager)
- `Yii::app()->clientScript` - [CClientScript](http://www.yiiframework.com/doc/api/1.1/CClientScript)
- `Yii::app()->controller` - [CController](http://www.yiiframework.com/doc/api/1.1/CController)
- `Yii::app()->db` - [CDbConnection](http://www.yiiframework.com/doc/api/1.1/CDbConnection)
- `Yii::app()->session` - [CHttpSession](http://www.yiiframework.com/doc/api/1.1/CHttpSession)
- `Yii::app()->urlManager` - [CUrlManager](http://www.yiiframework.com/doc/api/1.1/CUrlManager)


## Screenshots

### Catalog

Rendering the default Yii SiteController - `index.php?route=site/index`
![Catalog](https://raw.github.com/cornernote/yii-embed-opencart/master/screenshot/catalog.png)

### Admin

Rendering the default admin Yii SiteController - `admin/index.php?route=site/index`
![Admin](https://raw.github.com/cornernote/yii-embed-opencart/master/screenshot/admin.png)

### Gii

Using Gii to build all models - `admin/index.php?route=gii/prefixModel/index`
![Admin](https://raw.github.com/cornernote/yii-embed-opencart/master/screenshot/gii.png)


## Installation

- Download [Yii-Embed for OpenCart](https://github.com/cornernote/yii-embed-opencart/archive/master.zip) and uncompress the upload folder into your opencart installation.
- Download [Yii Framework](http://www.yiiframework.com/) and uncompress it into your system folder.  The `yii.php` file should be in `system/yii/framework/yii.php`.
- Perform a vQmod or Manual installation then visit `index.php?route=site` and `admin/index.php?route=site` to see your Yii-Embed for OpenCart.


### vqMod Installation

If you have installed [vQmod](https://code.google.com/p/vqmod/) then no further installation is required.


### Manual Installation

Add to `system/startup.php` at the bottom:
```php
require_once(DIR_SYSTEM . 'yii/framework/yii.php');
require_once(DIR_SYSTEM . 'yiiembed/app.php');
```

Add to `system/engine/front.php` in the `__construct()` function, after `$this->registry = $registry;`:
```php
Yii::createApplication('OcWebApplication');
Yii::app()->front = $this;
Yii::app()->registry = $registry;
```

Add to `system/library/response.php` in the `output()` function, before `echo $ouput;`:
```php
Yii::app()->clientScript->render($ouput);
```

Add to `catalog/controller/error/not_found.php`, `admin/controller/error/not_found.php` and `admin/controller/error/permission.php` at the top of the `index()` function, after `public function index() {`:
```php
Yii::app()->runController();
```


## Extending and Upgrading

The files in `catalog/yiiembed` and `admin/yiiembed` are intended to be modified by you.  Please do not replace your files with the default application.

The files in `system/yiiembed` are intended to be in-sync with this project.  Please avoid changing them, you can extend them if you require modifications.


## Configuration

Edit the Yii config files in `catalog/yiiembed/config/main.php` and 
`admin/yiiembed/config/main.php`, for example:
```php
return array(
    'preload' => array('log'), 
    'components' => array( ... ),
    'modules' => array( ... ),
);
```

Add Yii constants to your OpenCart config.php, defaults shown below:
```php
define('YII_DEBUG', false); // set to true for fancy error messages
define('YII_TRACE_LEVEL', 0);
define('YII_ENABLE_EXCEPTION_HANDLER', true);
define('YII_ENABLE_ERROR_HANDLER', true);
```


## Generating Code with Gii

You can use Yii's awesome code generator from your OpenCart admin, just like you can in any other Yii app!

- Navigate to your admin `admin/index.php?route=gii`
- Use the PrefixModel Generator to generate all your models in one action.
- To generate models that can be used by catalog and admin set Model Path to `yiiembed.models`.
- Select the Code Template `yiiembed` to generate models the same as ours.
- Use the ModelDoc Generator to replace the phpdoc blocks in your models.
- To tune the Gii configuration or security access edit `admin/yiiembed/config/main.php`.


## Examples

Find and save a Customer:
```php
$customer = OcCustomer::model()->findByPk($this->customer->getId());
if ($customer) {
    $customer->firstname = 'Foo';
    $customer->lastname = 'Bar';
    $customer->save();
}
```

Render Yii partial views:
```php
Yii::app()->controller->renderPartial('site/_partial');
```

Render Yii widgets:
```php
Yii::app()->controller->widget('zii.widgets.CDetailView', array(
    'data' => array('hello' => 'world'),
));
```

Run OpenCart controller:
```php
Yii::app()->runOcController('common/home');
```

Get OpenCart controller output:
```php
echo Yii::app()->getOcControllerOutput('common/header');
echo 'hello world';
echo Yii::app()->getOcControllerOutput('common/footer');
```
