<h3>Checkbox</h3>
<?php

if(is_null($id)){
    $_id  = uniqid('checkbox');
}else{
    $_id = $id;
}

$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout'                    => BSHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation'      => true,
    'id'                        => $_id,
    'action'                    => Yii::app()->createAbsoluteUrl('test/rpcmodel',['id' => $_id]),
    'htmlOptions'               => array(
        'class'     => 'bs-example'
    )
));
?>
    <?php echo $form->checkBoxControlGroup($model, 'number_1'); ?>
    <?php echo $form->checkBoxControlGroup($model, 'number_2'); ?>
    <?php echo $form->inlineCheckBoxListControlGroup($model, 'array_1',TestExample::$array); ?>
    <?php echo $form->checkBoxListControlGroup($model, 'string_1',TestExample::$array ); ?>
    <?php echo BSHtml::formActions(array(
        BSHtml::button(BSHtml::icon(BSHtml::GLYPHICON_SEND), array(
            'color' => BSHtml::BUTTON_COLOR_SUCCESS,
            'id'    => 'submit_'.$_id,
            'size'  => BSHtml::BUTTON_SIZE_SMALL
        )),
    )); ?>
<?php $this->endWidget(); ?>
<?php Yii::app()->clientScript->registerScript(
    'checkbox_form',
    "
    (function($){
        'use strict';
        var Form = {
            form:null,
            formButton:null,
            init:function(id){
                var self = this;
                    self.form = $('#'+id);
                    self.formButton = self.form.find('#submit_'+id);
                    console.log(self.formButton);
                    self.submit();

            },
            submit:function(){
                var self = this;

                    self.form.on('submit',function(event){
                        event.preventDefault();
                        self._send(self.form.serialize());
                    });

                    self.formButton.on('click',function(event){
                        event.preventDefault();
                        console.log('clicked');
                        self._send(self.form.serialize());
                    });
            },
            _send:function(data){
                var self = this;
                var promise = $.ajax({
                    url:        self.form.attr('action'),
                    data:       data,
                    dataType:   'JSON',
                    type:       'POST'
                });

                promise.done(function(data){
                    console.log(data);
//                    self.form.prepend(Handlebars.templates.alert{
//                        data:data
//                    });
                });
            }

        };
        $(function(){
            var id = '{$_id}';
            Form.init(id);
        });
    }(jQuery));
    ",
    CClientScript::POS_END
) ?>
<!--<script type="text/javascript">-->
<!--    (function($){-->
<!--        "use strict";-->
<!--        var Form = {-->
<!--            $form:null,-->
<!--            formButton:null,-->
<!--            init:function(form){-->
<!--                var self = this;-->
<!--                    self.$form = $(form);-->
<!--                    self.formButton = self.$form.find('#submit_'+form);-->
<!--                    self.submit();-->
<!---->
<!--            },-->
<!--            submit:function(){-->
<!--                var self = this;-->
<!---->
<!--                    self.$form.on('submit',function(event){-->
<!--                        event.preventDefault();-->
<!--                        self._send(self.$form.serialize());-->
<!--                    });-->
<!---->
<!--                    self.formButton.on('click',function(event){-->
<!--                        event.preventDefault();-->
<!--                    });-->
<!--            },-->
<!--            _send:function(data){-->
<!--                var self = this;-->
<!--                var promise = $.ajax({-->
<!--                    url:        self.$form.attr('action'),-->
<!--                    data:       data,-->
<!--                    dataType:   'JSON',-->
<!--                    type:       'POST'-->
<!--                });-->
<!---->
<!--                promise.done(function(data){-->
<!--                    console.log(data);-->
<!--//                    self.$form.prepend(Handlebars.templates.alert{-->
<!--//                        data:data-->
<!--//                    });-->
<!--                });-->
<!--            }-->
<!---->
<!--        };-->
<!--        $(function(){-->
<!--            var form = $('#--><?//= $_id?><!--');-->
<!--            Form.init();-->
<!--        });-->
<!--    }(jQuery));-->
<!--</script>-->