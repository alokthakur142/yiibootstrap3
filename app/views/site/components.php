<?php
array_push(
    $this->secondNavPartials,
    \bootstrap\helpers\NavPartial::getView('components/_sidebar')
);
?>
<!-- Glyphicons
================================================== -->
<?php $this->renderPartial('components/_glyphicons', array('model' => $model)) ?>

