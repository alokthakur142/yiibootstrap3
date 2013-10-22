<?php
$this->pageTitle = 'Components';
array_push(
    $this->secondNavPartials,
    \bootstrap\helpers\NavPartial::getView('components/_sidebar')
);
?>
<!-- Glyphicons
================================================== -->
<?php $this->renderPartial('components/_glyphicons', array('model' => $model)) ?>

<!-- Dropdowns
================================================== -->
<?php $this->renderPartial('components/_dropdowns', array('model' => $model)) ?>
<!-- Button Groups
================================================== -->
<?php $this->renderPartial('components/_button_groups', array('model' => $model)) ?>

<!-- Navs
================================================== -->
<?php $this->renderPartial('components/_navs', array('model' => $model)) ?>
<!-- Breadcrumbs
================================================== -->
<?php $this->renderPartial('components/_breadcrumbs', array('model' => $model)) ?>
<!-- Pagination
================================================== -->
<?php $this->renderPartial('components/_pagination', array('model' => $model)) ?>
<!-- Labels
================================================== -->
<?php $this->renderPartial('components/_label', array('model' => $model)) ?>
<!-- Badge
================================================== -->
<?php $this->renderPartial('components/_badge', array('model' => $model)) ?>
<!-- Jumbotron
================================================== -->
<?php $this->renderPartial('components/_jumbotron', array('model' => $model)) ?>
<!-- Pageheader
================================================== -->
<?php $this->renderPartial('components/_page_header', array('model' => $model)) ?>
<!-- Thumbnail
================================================== -->
<?php //$this->renderPartial('components/_thumbnails', array('model' => $model)) ?>
<!--Alerts
================================================== -->
<?php $this->renderPartial('components/_alerts', array('model' => $model)) ?>