<?php
/**
 * EXAMPLE SITE PAGE - MODIFY TO SUIT
 *
 * @var $this SiteController
 */
$this->pageTitle = Yii::app()->name . ' - About';
$this->breadcrumbs = array(
    Yii::app()->name => array('site/index'),
    'About',
);
?>
<h1>About</h1>

<p>This is a "static" page. You may change the content of this page
    by updating the file <code><?php echo __FILE__; ?></code>.</p>
