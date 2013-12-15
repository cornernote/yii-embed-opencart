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

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>You can use Yii's CHtml::link to <?php echo CHtml::link('generate links', array('site/page', 'view' => 'about')); ?>.</p>
