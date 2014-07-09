<?php
/**
 * EXAMPLE SITE PAGE - MODIFY TO SUIT
 *
 * @var $this SiteController
 */
$this->pageTitle = Yii::app()->name . ' - Examples';
$this->breadcrumbs = array(
    Yii::app()->name => array('site/index'),
    Yii::t('site/pages_examples', 'heading_title'),
);
?>
<h1><?php echo Yii::t('site/pages_examples', 'heading_title'); ?></h1>

<p><?php echo Yii::t('site/pages_examples', 'text_change', array(':file' => __FILE__)); ?></p>