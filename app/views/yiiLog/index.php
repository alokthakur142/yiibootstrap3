<?php
/* @var $this YiiLogController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Yii Logs',
);

$this->menu=array(
array('label'=>'Create YiiLog','url'=>array('create')),
array('label'=>'Manage YiiLog','url'=>array('admin')),
);
?>
<?php echo BsHtml::pageHeader('Yii Logs') ?>
<?php $this->widget('bootstrap.widgets.BsListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>