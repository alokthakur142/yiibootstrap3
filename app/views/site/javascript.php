<?php
$this->pageTitle = 'Components';
array_push(
    $this->secondNavPartials,
    \app\helpers\NavPartial::getView('javascript/_sidebar')
);
?>
<!-- Glyphicons
================================================== -->
<?php $this->renderPartial('javascript/_modal', array('model' => $model)) ?>