<?php
/**
 * EXAMPLE OVERALL LAYOUT - MODIFY TO SUIT
 *
 * @var $this OcController
 * @var $content string
 */
echo Yii::app()->getOcControllerOutput('common/header');
echo '<div id="content">';
if (isset($this->breadcrumbs)) {
    $this->widget('zii.widgets.CBreadcrumbs', array(
        'links' => $this->breadcrumbs,
        'htmlOptions' => array('class' => 'breadcrumb'),
    ));
}
echo $content;
echo '<div class="clear"></div>';
echo '</div>';
echo Yii::app()->getOcControllerOutput('common/footer');