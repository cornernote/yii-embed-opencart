<?php
/**
 * EXAMPLE SITE ERROR PAGE - MODIFY TO SUIT
 *
 * @var $this SiteController
 * @var $code string
 * @var $message string
 */
$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('site/error', 'heading_title');
$this->breadcrumbs = array(
    Yii::t('site/error', 'heading_title'),
);
?>

<h2><?php echo Yii::t('site/error', 'heading_title') . ' ' . $code; ?></h2>

<div class="error">
    <?php echo CHtml::encode($message); ?>
</div>