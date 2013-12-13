# Yii-Embed for Opencart

A lightweight Yii application embedded into OpenCart


It can be used in all the same ways as a normal Yii application with the
exception of not using Yii's routing and controllers to handle actions.


## Features

- Yii is available from anywhere in OpenCart using Yii::app() or Yii::foobar
- Autoload any of your Yii models and components
- Widgets can be rendered and will auto-include their stylesheet and javascript files
- Fancy error messages with stack dump

The following Yii components are pre-configured to work in your OpenCart:
- `Yii::app()->assetManager` - [CAssetManager](http://www.yiiframework.com/doc/api/1.1/CAssetManager)
- `Yii::app()->clientScript` - [CClientScript](http://www.yiiframework.com/doc/api/1.1/CClientScript)
- `Yii::app()->controller` - [CController](http://www.yiiframework.com/doc/api/1.1/CController)
- `Yii::app()->db` - [CDbConnection](http://www.yiiframework.com/doc/api/1.1/CDbConnection)
- `Yii::app()->session` - [CHttpSession](http://www.yiiframework.com/doc/api/1.1/CHttpSession)


## Installation

Add to system/startup.php at the bottom:
```
require_once(DIR_SYSTEM . 'yii/framework/yii.php');
require_once(DIR_SYSTEM . 'yiiembed/app.php');
```

Add to `system/engine/front.php` in the `__construct()` function, after `$this->registry = $registry;`:
```
Yii::createApplication('OcWebApplication');
//Yii::createApplication('OcWebApplication', require(DIR_SYSTEM . 'yiiembed/config/main.php')); // or pass in a Yii config array
```

Add to `system/library/response.php` in the `output()` function, before `echo $ouput;`:
```
Yii::app()->clientScript->render($ouput);
```


## Configuration (optional)

Create a new Yii config file, for example `system/yiiembed/config/main.php`:
```
return array('id' => 'My OpenCart Yii App', 'preload' => array('log'), 'components' => array( ... ));
```

Add Yii constants to your OpenCart config.php, defaults shown below:
```
define('YII_DEBUG', false); // set to true for fancy error messages
define('YII_TRACE_LEVEL', 0);
define('YII_ENABLE_EXCEPTION_HANDLER', true);
define('YII_ENABLE_ERROR_HANDLER', true);
```


## Examples

Render Yii partial views:
```
Yii::app()->controller->renderPartial('/site/index');
```

Render Yii widgets:
```
Yii::app()->controller->widget('zii.widgets.CDetailView', array('data' => array('hello' => 'world')));
```

Find and save a Customer:
```
$customer = OcCustomer::model()->findByPk($this->customer->getId());
if ($customer) {
    $customer->firstname = 'Foo';
    $customer->lastname = 'Bar';
    $customer->save();
}
```
