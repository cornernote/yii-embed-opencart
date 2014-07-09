<?php
/**
 * EXAMPLE SITE INDEX - MODIFY TO SUIT
 *
 * @var $this SiteController
 */
$this->pageTitle = Yii::app()->name;
$this->breadcrumbs = array(
    Yii::app()->name,
);
?>

<h1><?php echo Yii::t('site/index', 'heading_title', array(':app_name' => CHtml::encode(Yii::app()->name))); ?></h1>

<p><?php echo Yii::t('site/index', 'text_change'); ?>:</p>
<ul>
    <li><?php echo Yii::t('site/index', 'text_view_file'); ?>: <code><?php echo __FILE__; ?></code></li>
    <li><?php echo Yii::t('site/index', 'text_layout_file'); ?>: <code><?php echo realpath($this->getLayoutFile($this->layout)); ?></code></li>
    <li><?php echo Yii::t('site/index', 'text_container_file'); ?>: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p><?php echo Yii::t('site/index', 'text_more_examples', array(':link'=>CHtml::link('examples page', array('site/page', 'view' => 'examples')))); ?></p>
