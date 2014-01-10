# Yii-Embed for OpenCart

A lightweight [Yii](http://www.yiiframework.com/) application embedded into [OpenCart](http://www.opencart.com/)

![Yii Framework](https://raw.github.com/cornernote/yii-embed-opencart/master/image/yii.png) & ![OpenCart](https://raw.github.com/cornernote/yii-embed-opencart/master/image/opencart.png)


## Features

- Yii is available from anywhere in OpenCart using `Yii::app()` or `Yii::foobar`
- OpenCart registry is available from anywhere in Yii using `Yii::app()->registry`
- Controllers and Modules are handled by the OpenCart not_found.php controller
- Models are built that represent all OpenCart-1.5.6 tables including relations
- Generate models for all your tables in one step and create standard Yii Crud using Gii
- Autoload any of your Yii models and components from anywhere in OpenCart
- Widgets can be rendered and will auto-include their stylesheet and javascript files
- OpenCart controllers and child actions can be run within Yii
- Uses Yii pretty error message and stack dump

The following Yii components are pre-configured to work in your OpenCart:

- `Yii::app()->assetManager` - [CAssetManager](http://www.yiiframework.com/doc/api/1.1/CAssetManager)
- `Yii::app()->clientScript` - [CClientScript](http://www.yiiframework.com/doc/api/1.1/CClientScript)
- `Yii::app()->controller` - [CController](http://www.yiiframework.com/doc/api/1.1/CController)
- `Yii::app()->db` - [CDbConnection](http://www.yiiframework.com/doc/api/1.1/CDbConnection)
- `Yii::app()->errorHandler` - [CErrorHandler](http://www.yiiframework.com/doc/api/1.1/CErrorHandler)
- `Yii::app()->session` - [CHttpSession](http://www.yiiframework.com/doc/api/1.1/CHttpSession)
- `Yii::app()->urlManager` - [CUrlManager](http://www.yiiframework.com/doc/api/1.1/CUrlManager)


## Resources

- **[Documentation](http://cornernote.github.io/yii-embed-opencart)**
- **[GitHub Project](https://github.com/cornernote/yii-embed-opencart)**
- **[Yii Extension](http://www.yiiframework.com/extension/yii-embed-opencart)**
- **[OpenCart Extension](http://www.opencart.com/index.php?route=extension/extension/info&extension_id=15059)**

[![Mr PHP](https://raw.github.com/cornernote/mrphp-assets/master/img/code-banner.png)](http://mrphp.com.au) [![Project Stats](https://www.ohloh.net/p/yii-embed-opencart/widgets/project_thin_badge.gif)](https://www.ohloh.net/p/yii-embed-opencart)


## Support

- Does this README need improvement?  Go ahead and [suggest a change](https://github.com/cornernote/yii-embed-opencart/edit/master/README.md).
- Found a bug, or need help using this project?  Check the [open issues](https://github.com/cornernote/yii-embed-opencart/issues) or [create an issue](https://github.com/cornernote/yii-embed-opencart/issues/new).


## License

[BSD-3-Clause](https://raw.github.com/cornernote/yii-embed-opencart/master/LICENSE), Copyright © 2013-2014 [Mr PHP](mailto:info@mrphp.com.au)
