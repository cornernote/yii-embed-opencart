<?php
/**
 * EXAMPLE SITE PAGE - MODIFY TO SUIT
 *
 * @var $this SiteController
 */
$this->pageTitle = Yii::app()->name . ' - Examples';
$this->breadcrumbs = array(
    Yii::app()->name => array('site/index'),
    'Examples',
);
?>
<h1>Examples</h1>

<p>This is a "static" page. You may change the content of this page
    by updating the file <code><?php echo __FILE__; ?></code>.</p>
