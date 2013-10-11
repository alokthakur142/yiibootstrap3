<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<?php echo $form->textField($model, 'username',array('placeholder' => 'textField')); ?>
    
<?php echo $form->passwordField($model, 'username',array('placeholder' => 'passwordField')); ?>
    
<?php echo $form->numberField($model, 'username',array('placeholder' => 'numberField')); ?>
    
<?php echo $form->emailField($model, 'username',array('placeholder' => 'emailField')); ?>
    
<?php echo $form->urlField($model, 'username',array('placeholder' => 'urlField')); ?>
    
<?php echo $form->rangeField($model, 'username',array('placeholder' => 'rangeField')); ?>
    
<?php echo $form->dateField($model, 'username',array('placeholder' => 'dateField')); ?>
    
<?php echo $form->fileField($model, 'username',array('placeholder' => 'fileField')); ?>
    
<?php $this->endWidget() ?>