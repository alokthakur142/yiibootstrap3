<?php
/* @var $this YiiLogController */
/* @var $model YiiLog */
?>

<?php
$this->breadcrumbs=array(
	'Yii Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
array('icon' => 'glyphicon glyphicon-home','label'=>'Manage YiiLog', 'url'=>array('admin')),
array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create YiiLog', 'url'=>array('create')),
array('icon' => 'glyphicon glyphicon-edit','label'=>'Update YiiLog', 'url'=>array('update', 'id'=>$model->id)),
array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete YiiLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<?php echo BsHtml::pageHeader('View','YiiLog '.$model->id) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
'htmlOptions' => array(
'class' => 'table table-striped table-condensed table-hover',
),
'data'=>$model,
'attributes'=>array(
		'id',
		'level',
		'category',
		'logtime',
		'message',
),
)); ?>