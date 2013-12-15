<?php
/**
 * EXAMPLE SITE ERROR PAGE - MODIFY TO SUIT
 *
 * @var $this SiteController
 * @var $code string
 * @var $message string
 */
$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error">
    <?php echo CHtml::encode($message); ?>
</div>