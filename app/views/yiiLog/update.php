<?php
    /* @var $this YiiLogController */
    /* @var $model YiiLog */
?>

<?php
$this->breadcrumbs=array(
	'Yii Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

    $this->menu=array(
    array('icon' => 'glyphicon glyphicon-home','label'=>'Manage YiiLog', 'url'=>array('admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create YiiLog', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete YiiLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    );
    ?>
<?php echo BsHtml::pageHeader('Update','YiiLog '.$model->id) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>