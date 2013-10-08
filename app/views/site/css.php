<?php
$this->pageTitle = 'CSS';
array_push(
    $this->secondNavPartials,
    \bootstrap\helpers\NavPartial::getView('_affix')
);
?>
<!-- Global Bootstrap settings
================================================== -->
<!--<div class="bs-docs-section">-->
<!--    --><?php //$this->renderPartial('css/_overview') ?>
<!--</div>-->


<!-- Grid system
================================================== -->
<?php //$this->renderPartial('css/_grid') ?>

<!-- Typography
================================================== -->
<?php $this->renderPartial('css/_typography') ?>

<!-- Code
================================================== -->
<?php $this->renderPartial('css/_code') ?>


<!-- Tables
================================================== -->
<?php $this->renderPartial('css/_tables') ?>


<!-- Forms
================================================== -->
<?php $this->renderPartial('css/_form', array('model' => $model)) ?>


<!-- Buttons
================================================== -->
<?php $this->renderPartial('css/_buttons', array('model' => $model)) ?>


<!-- Images
================================================== -->
<?php $this->renderPartial('css/_images', array('model' => $model)) ?>


<!-- Helpers
================================================== -->
<?php $this->renderPartial('css/_helpers', array('model' => $model)) ?>