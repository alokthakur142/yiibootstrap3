<p>
    <?php $this->renderPartial('_toggle_buttons') ?>
</p>
<p>
    <?php $this->renderPartial('_buttons_dropdown',array('code' => $code)) ?>
</p>
<p>

    <?php
    echo BsHtml::buttonToolbar(array(
        array('items' => array(
            array('icon' => 'camera'),
            array('label' => '2'),
            array('label' => '3'),
            array('label' => '4'),
        )),
        array('items' => array(
            array('label' => '5'),
            array('label' => '6'),
            array('label' => '7'),
        )),
    ));
    ?>
</p>
<p>
    <?php
    echo BsHtml::buttonGroup(
        array(
            array('label' => '1'),
            array('label' => '2'),
            array('label' => '3'),
            array('label' => '4'),
        )
    );
    ?>
</p>
<p>
    <?php
    echo BsHtml::buttonGroup(array(
        array('label' => 'Left'),
        array('label' => 'Middle'),
        array('label' => 'Right'),
    ), array('toggle' => BsHtml::BUTTON_TOGGLE_RADIO, 'color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
</p>

<?php if($code) : ?>
    <pre class="pre-scrollable hidden-sm hidden-xs  linenums prettyprint lang-py">
    &lt;?php echo BsHtml::checkBox('test',true,array()); ?&gt;
    &lt;?php $this->widget('bootstrap.extensions.ibutton.IButton', array(
        'selector'=>':checkbox',
        'options' =>array(
            'duration' => 250,
            'change'=>'js:function(){}'
        )
    ));?&gt;
    &lt;?php echo BsHtml::buttonDropdown('Left dropup', array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        BsHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    ), array(
        'split' => true,
        'dropup' => true,
        'menuOptions' => array('pull' => BsHtml::PULL_LEFT),
        'size' => BsHtml::BUTTON_SIZE_SMALL,
        'color' =>BsHtml::BUTTON_COLOR_DANGER
    ));
    BsHtml::buttonToolbar(array(
        array('items' => array(
            array('label' => '1'),
            array('label' => '2'),
            array('label' => '3'),
            array('label' => '4'),
        )),
        array('items' => array(
            array('label' => '5'),
            array('label' => '6'),
            array('label' => '7'),
        )),
        array('items' => array(
            array('label' => '8'),
        )),
    ));
    echo BsHtml::buttonGroup(
        array(
            array('label' => '1'),
            array('label' => '2'),
            array('label' => '3'),
            array('label' => '4'),
        )
    );
    echo BsHtml::buttonGroup(array(
            array('label' => 'Left'),
            array('label' => 'Middle'),
            array('label' => 'Right'),
        ), array(
            'toggle' => BsHtml::BUTTON_TOGGLE_RADIO,
            'color' => BsHtml::BUTTON_COLOR_PRIMARY)
        );
    ?&gt;
    </pre>
<?php endif;?>