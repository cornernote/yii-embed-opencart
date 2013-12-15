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

<p>You may change the content of this page by modifying the following files:</p>
<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo realpath($this->getLayoutFile($this->layout)); ?></code></li>
    <li>Container file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>Browse to the <?php echo CHtml::link('examples page', array('site/page', 'view' => 'examples')); ?> to see more
    examples of Yii-Embed for OpenCart.</p>
