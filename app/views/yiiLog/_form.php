<?php
/* @var $this YiiLogController */
/* @var $model YiiLog */
/* @var $form BSActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'yii-log-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'level',array('span'=>5,'maxlength'=>128)); ?>

            <?php echo $form->textFieldControlGroup($model,'category',array('span'=>5,'maxlength'=>128)); ?>

            <?php echo $form->textFieldControlGroup($model,'logtime',array('span'=>5)); ?>

            <?php echo $form->textAreaControlGroup($model,'message',array('rows'=>6,'span'=>8)); ?>

            <?php echo BSHtml::formActions(array(
    BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)),
)); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->