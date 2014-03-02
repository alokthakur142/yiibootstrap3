<?php
$id = uniqid('test_');
if(!isset($code))
    $code = false;
?>
<ul id="<?php echo $id ?>" class="nav nav-tabs">
    <li>
        <a href="#home_<?php echo $id ?>" data-toggle="tab">
            <i class="icon-book" data-toggle="tooltip" data-title="Yii-Feature Buttons"></i>
            <span>Yii-Feature Buttons</span>
        </a>
    </li>
    <?php if($code) : ?>
        <li>
            <a href="#button_groups<?php echo $id ?>" data-toggle="tab">
                <i class="icon-book" data-toggle="tooltip" data-title="Button Groups"></i>
                <span>Button Groups</span>
            </a>
        </li>
    <?php endif;?>
    <li class="active">
        <a href="#profile_<?php echo $id ?>" data-toggle="tab">
            <i class="icon-book" data-toggle="tooltip"data-title="Button Sizes">
            </i><span>Button Sizes</span>
        </a>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade" id="home_<?php echo $id ?>">
    <p>
        <?php echo BsHtml::button(
            'Popover',
            array(

                'size' => BsHtml::BUTTON_SIZE_SMALL,
                'data-container' => 'body',
                'data-toggle' => 'popover',
                'data-placement' => 'left',
                'data-content' => 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.',
                'data-original-title'=>'Lorem Ipsum Dolor',
                'data-animation' => true,
                'data-html' => true,
                'data-delay' => 10,
                'id' => uniqid('ajax_'),
            )
        )
        ?>
        <?php echo BsHtml::linkButton('Google', array(
            'url' => 'http://www.google.de',
            'target' => '_blank',
            'size' => BsHtml::BUTTON_SIZE_SMALL,

        ))
        ?>
        <?php echo BsHtml::linkButton('Google', array(
            'url' => 'http://www.google.de',
            'target' => '_blank',
            'size' => BsHtml::BUTTON_SIZE_SMALL,
            'data-toggle' => 'popover'
        ))
        ?>
        <?php echo BsHtml::submitButton('BsHtml::submitButton',
            array(
                'color' => BsHtml::BUTTON_COLOR_INFO,
                'confirm' => 'Whooza ?'
            )
        ); ?>
        <?php echo BsHtml::ajaxButton(
            'BsHtml::ajaxButton',
            Yii::app()->createAbsoluteUrl('sitet/ajaxTest'),
            array(
                'cache' => true,
                'data' => array(
                    'message' => 'clicked the AjaxButton'
                ),
                'type' => 'POST',
                'success' => 'js:function(data){
                    console.log(data);
                    $(".modal-body").html(data);
                    $("#demo_modal").modal("show");
                }',
            ),
            array(
                'color' => BsHtml::BUTTON_COLOR_INFO,
                'icon' => BsHtml::GLYPHICON_BELL
            )
        ); ?>
        <?php echo BsHtml::ajaxLink('BsHtml::ajaxLink',
            Yii::app()->createAbsoluteUrl('site/ajaxTest'),
            array(
                'cache' => true,
                'data' => array(
                    'message' => 'clicked the AjaxLink'
                ),
                'type' => 'POST',
                'success' => 'js:function(data){
                    console.log(data);
                    $(".modal-body").html(data);
                    $("#demo_modal").modal("show");
                }',
            ),
            array(
                'icon' => BsHtml::GLYPHICON_BELL
            )
        ); ?>
        <?php if ($code) : ?>
                    <pre class="pre-scrollable hidden-sm hidden-xs  linenums prettyprint lang-py">
                        &lt;?php echo BsHtml::linkButton('Google',array(
                            'url' => 'http://www.google.de',
                            'target' => '_blank',
                            'size' => BsHtml::BUTTON_SIZE_SMALL,

                        ))
                        ?&gt;
                        &lt;?php echo BsHtml::submitButton('BsHtml::submitButton',
                            array(
                                'color' => BsHtml::BUTTON_COLOR_INFO,
                                'confirm' => 'Whooza ?'
                            )
                        ); ?&gt;
                        &lt;?php echo BsHtml::ajaxButton(
                            'BsHtml::ajaxButton',
                            Yii::app()->createAbsoluteUrl('bootstrap/default/ajaxTest'),
                            array(
                                'cache' => true,
                                'data' => array(
                                    'message' => 'Lorem Ipsum Message.'
                                ),
                                'type' => 'POST',
                                'success' => 'js:function(data){
                                    console.log(data);
                                    $(".modal-body").html(data);
                                    $("#demo_modal").modal("show");
                                }',
                            ),
                            array(
                                'color' => BsHtml::BUTTON_COLOR_INFO,
                                'icon' => BsHtml::GLYPHICON_BELL
                            )
                        ); ?&gt;
                        &lt;?php echo BsHtml::ajaxLink('BsHtml::ajaxLink',
                            Yii::app()->createAbsoluteUrl('bootstrap/default/ajaxTest'),
                            array(
                                'cache' => true,
                                'data' => array(
                                    'message' => 'Lorem Ipsum Message.'
                                ),
                                'type' => 'POST',
                                'success' => 'js:function(data){
                                    console.log(data);
                                }',
                            ),
                            array(
                                'icon' => BsHtml::GLYPHICON_BELL
                            )
                        ); ?&gt;
                    </pre>
    </p>
    <?php endif; ?>
</div>
<?php if($code) : ?>
    <div class="tab-pane fade" id="button_groups<?php echo $id ?>">
        <?php $this->renderPartial('_buttons_group',array('code' => $code)) ?>
    </div>
<?php endif; ?>
<div class="tab-pane fade in active" id="profile_<?php echo $id ?>">
    <p>
        <?php echo BsHtml::button(
            'Primary',
            array(
                'color' => BsHtml::BUTTON_COLOR_PRIMARY,
                'size' => BsHtml::BUTTON_SIZE_LARGE
            )
        );
        ?>
        <?php echo BsHtml::button('Danger', array('color' => BsHtml::BUTTON_COLOR_DANGER, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BsHtml::button('Warning', array('color' => BsHtml::BUTTON_COLOR_WARNING, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BsHtml::button('Success', array('color' => BsHtml::BUTTON_COLOR_SUCCESS, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BsHtml::button('Info', array('color' => BsHtml::BUTTON_COLOR_INFO, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BsHtml::button('Inverse', array('color' => BsHtml::BUTTON_COLOR_INVERSE, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BsHtml::button('Default', array('size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BsHtml::button('Link', array('color' => BsHtml::BUTTON_COLOR_LINK, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>

    </p>
    <p>
        <?php echo BsHtml::button(
            'Primary',
            array(
                'color' => BsHtml::BUTTON_COLOR_PRIMARY,
                'size' => BsHtml::BUTTON_SIZE_DEFAULT //default value BsHtml::BUTTON_SIZE_DEFAULT=''
            )
        );
        ?>
        <?php echo BsHtml::button('Danger', array('color' => BsHtml::BUTTON_COLOR_DANGER)); ?>
        <?php echo BsHtml::button('Warning', array('color' => BsHtml::BUTTON_COLOR_WARNING)); ?>
        <?php echo BsHtml::button('Success', array('color' => BsHtml::BUTTON_COLOR_SUCCESS)); ?>
        <?php echo BsHtml::button('Info', array('color' => BsHtml::BUTTON_COLOR_INFO)); ?>
        <?php echo BsHtml::button('Inverse', array('color' => BsHtml::BUTTON_COLOR_INVERSE)); ?>
        <?php echo BsHtml::button('Default'); ?>
        <?php echo BsHtml::button('Link', array('color' => BsHtml::BUTTON_COLOR_LINK)); ?>

    </p>
    <p>
        <?php echo BsHtml::button(
            'Primary',
            array(
                'color' => BsHtml::BUTTON_COLOR_PRIMARY,
                'size' => BsHtml::BUTTON_SIZE_SMALL
            )
        );
        ?>
        <?php echo BsHtml::button('Danger', array('color' => BsHtml::BUTTON_COLOR_DANGER, 'size' => BsHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BsHtml::button('Warning', array('color' => BsHtml::BUTTON_COLOR_WARNING, 'size' => BsHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BsHtml::button('Success', array('color' => BsHtml::BUTTON_COLOR_SUCCESS, 'size' => BsHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BsHtml::button('Info', array('color' => BsHtml::BUTTON_COLOR_INFO, 'size' => BsHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BsHtml::button('Inverse', array('color' => BsHtml::BUTTON_COLOR_INVERSE, 'size' => BsHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BsHtml::button('Default', array('size' => BsHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BsHtml::button('Link', array('color' => BsHtml::BUTTON_COLOR_LINK, 'size' => BsHtml::BUTTON_SIZE_SMALL)); ?>

    </p>
    <p>
        <?php echo BsHtml::button(
            'Primary',
            array(
                'color' => BsHtml::BUTTON_COLOR_PRIMARY,
                'size' => BsHtml::BUTTON_SIZE_MINI
            )
        );
        ?>
        <?php echo BsHtml::button('Danger', array('color' => BsHtml::BUTTON_COLOR_DANGER, 'size' => BsHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BsHtml::button('Warning', array('color' => BsHtml::BUTTON_COLOR_WARNING, 'size' => BsHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BsHtml::button('Success', array('color' => BsHtml::BUTTON_COLOR_SUCCESS, 'size' => BsHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BsHtml::button('Info', array('color' => BsHtml::BUTTON_COLOR_INFO, 'size' => BsHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BsHtml::button('Inverse', array('color' => BsHtml::BUTTON_COLOR_INVERSE, 'size' => BsHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BsHtml::button('Default', array('size' => BsHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BsHtml::button('Link', array('color' => BsHtml::BUTTON_COLOR_LINK, 'size' => BsHtml::BUTTON_SIZE_MINI)); ?>
        <?php if ($code) : ?>
        <pre class="pre-scrollable hidden-sm hidden-xs  linenums prettyprint lang-py">
&lt;?php echo BsHtml::button(
    'Primary',
    array(
        'color' => BsHtml::BUTTON_COLOR_PRIMARY,
        'size' => BsHtml::BUTTON_SIZE_LARGE
    )
);
?&gt;
&lt;?php echo BsHtml::button(
    'Primary',
    array(
        'color' => BsHtml::BUTTON_COLOR_PRIMARY,
        'size' => BsHtml::BUTTON_SIZE_DEFAULT
    )
);
?&gt;
&lt;?php echo BsHtml::button('Link', array('color' => BsHtml::BUTTON_COLOR_LINK)); ?&gt;
 &lt;?php echo BsHtml::button(
    'Primary',
    array(
        'color' => BsHtml::BUTTON_COLOR_PRIMARY,
        'size' => BsHtml::BUTTON_SIZE_SMALL
    )
);
?&gt;
&lt;?php echo BsHtml::button(
    'Primary',
    array(
        'color' => BsHtml::BUTTON_COLOR_PRIMARY,
        'size' => BsHtml::BUTTON_SIZE_MINI
    )
);
?&gt;
        </pre>
    <?php endif; ?>
    </p>
</div>
</div>
<script>
    $(function () {
        $('#<?php echo $id?> a.active').tab('show');
        $('[data-toggle="dropdown"]').dropdown();
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>
