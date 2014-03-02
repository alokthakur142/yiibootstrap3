<?php
    /* @var $this YiiLogController */
    /* @var $model YiiLog */
?>

<?php
$this->breadcrumbs=array(
	'Yii Logs'=>array('index'),
	'Create',
);

    $this->menu=array(
        array('icon' => 'glyphicon glyphicon-home','label'=>'Manage YiiLog', 'url'=>array('admin')),
    );
    ?>
<?php echo BsHtml::pageHeader('Create','YiiLog') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>