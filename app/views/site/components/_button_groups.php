<!-- Button Groups
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="btn-groups">Button groups</h1>
</div>
<p class="lead">Group a series of buttons together on a single line with the button group. Add on optional JavaScript
    radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.</p>

<div class="bs-callout bs-callout-info">
    <h4>Tooltips &amp; popovers in button groups require special setting</h4>

    <p>When using tooltips or popovers on elements within a <code>.btn-group</code>, you'll have to specify the option
        <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing
        its rounded corners when the tooltip or popover is triggered).</p>
</div>

<h3 id="btn-groups-single">Basic example</h3>

<p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>

<div class="bs-example">
<?php
echo BSHtml::buttonGroup(
    array(
        array(
            'label' => 'Left'
        ),
        array(
            'label' => 'Middle'
        ),
        array(
            'own' => BSHtml::ajaxButton(
                'own',
                Yii::app()->createAbsoluteUrl('site/ajaxTest'),
                array(
                    'cache' => true,
                    'data' => array(
                        'message' => 'clicked the Ajaxbutton from the buttongroup'
                    ),
                    'type' => 'POST',
                    'success' => 'js:function(data){
                        console.log(data);
                        $(".modal-body").html(data);
                        $("#demo_modal").modal("show");
                    }',
                ),
                array(
                    'icon' => BSHtml::GLYPHICON_BELL
                )
            )
        )
    ),
    array(
        'color' => BSHtml::BUTTON_COLOR_WARNING,
        'type' => BSHtml::BUTTON_TYPE_LINK
    )
); ?>
</div>
<div class="highlight">
    <pre >
        <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">buttonGroup</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Left'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Middle'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'own'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">ajaxButton</span><span class="pre_green">(</span><span
                class="pre_red">'own'</span><span class="pre_green">,&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">createAbsoluteUrl</span><span
                class="pre_green">(</span><span class="pre_red">'site/ajaxTest'</span><span
                class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'cache'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">true</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'data'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'message'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'clicked&nbsp;the&nbsp;Ajaxbutton&nbsp;from&nbsp;the&nbsp;buttongroup'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'POST'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'success'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'js:function(data){<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;console.log(data);<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(".modal-body").html(data);<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$("#demo_modal").modal("show");<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'icon'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">GLYPHICON_BELL<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">))<br>&nbsp;&nbsp; &nbsp;)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">BUTTON_COLOR_WARNING</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">BUTTON_TYPE_LINK<br></span><span class="pre_green">));<br></span><span
                class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="btn-groups-toolbar">Button toolbar</h3>

<p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for
    more complex components.</p>

<div class="bs-example">
    <?php
    echo BSHtml::buttonToolbar(array(
        array('items' => array(
            array('icon' => BSHtml::GLYPHICON_CAMERA),
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
</div>
<div class="highlight">
    <pre >
       <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
               class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
               class="pre_blue">buttonToolbar</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'icon'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
               class="pre_blue">GLYPHICON_CAMERA<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'2'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'3'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'4'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'5'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'6'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'7'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;)<br>));<br></span><span
               class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="btn-groups-sizing">Sizing</h3>

<p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to the
    <code>.btn-group</code>.
    <code>BSHtml::BUTTON_SIZE_LARGE</code> <code>BSHtml::BUTTON_SIZE_SMALL</code> <code>BSHtml::BUTTON_SIZE_MINI</code>
</p>

<div class="bs-example">
    <?php
    echo BSHtml::buttonToolbar(array(
        array('items' => array(
            array('icon' => BSHtml::GLYPHICON_CAMERA),
            array('label' => '2'),
            array('label' => '3'),
            array('label' => '4'),
        )),
        array('items' => array(
            array('label' => '5'),
            array('label' => '6'),
            array('label' => '7'),
        )),
    ),
        array(
            'size' => BSHtml::BUTTON_SIZE_LARGE
        )
    );
    ?>
    <?php
    echo BSHtml::buttonToolbar(array(
            array('items' => array(
                array('icon' => BSHtml::GLYPHICON_CAMERA),
                array('label' => '2'),
                array('label' => '3'),
                array('label' => '4'),
            )),
            array('items' => array(
                array('label' => '5'),
                array('label' => '6'),
                array('label' => '7'),
            )),
        ),
        array(
        )
    );
    ?>
    <?php
    echo BSHtml::buttonToolbar(array(
            array('items' => array(
                array('icon' => BSHtml::GLYPHICON_CAMERA),
                array('label' => '2'),
                array('label' => '3'),
                array('label' => '4'),
            )),
            array('items' => array(
                array('label' => '5'),
                array('label' => '6'),
                array('label' => '7'),
            )),
        ),
        array(
            'size' => BSHtml::BUTTON_SIZE_SMALL
        )
    );
    ?>
    <?php
    echo BSHtml::buttonToolbar(array(
            array('items' => array(
                array('icon' => BSHtml::GLYPHICON_CAMERA),
                array('label' => '2'),
                array('label' => '3'),
                array('label' => '4'),
            )),
            array('items' => array(
                array('label' => '5'),
                array('label' => '6'),
                array('label' => '7'),
            )),
        ),
        array(
            'size' => BSHtml::BUTTON_SIZE_MINI
        )
    );
    ?>
</div>
<div class="highlight">
    <pre >
       <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
               class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
               class="pre_blue">buttonToolbar</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'icon'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
               class="pre_blue">GLYPHICON_CAMERA<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'2'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'3'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'4'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'5'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'6'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'7'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
               class="pre_red">'size'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
               class="pre_blue">BUTTON_SIZE_MINI<br></span><span class="pre_green">));<br></span><span
               class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="btn-groups-nested">Nesting</h3>

<p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a
    series of buttons.</p>

<div class="bs-example">
    <?php
    echo BSHtml::buttonGroup(array(
        array('label' => '1'),
        array('label' => '2'),
        array(
            'own' =>BSHtml::buttonDropdown(
                'Dropdown',
                array(
                    BSHtml::dropDownHeader('Dropdown Header'),
                    array('label' => 'Action', 'url' => '#'),
                    array('label' => 'Another action', 'url' => '#'),
                    array('label' => 'Something else here', 'url' => '#'),
                    BSHtml::menuDivider(),
                    BSHtml::dropDownHeader('Dropdown Header'),
                    array('label' => 'Separate link', 'url' => '#'),
                )
            )
        )
    ));
    ?>
</div>
<div class="highlight">
    <pre >
        <span class="pre_black"><span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">buttonToolbar</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'1'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'2'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'own'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">buttonDropdown</span><span class="pre_green">(</span><span
                class="pre_red">'Dropdown'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">dropDownHeader</span><span class="pre_green">(</span><span
                class="pre_red">'Dropdown&nbsp;Header'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Another&nbsp;action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Something&nbsp;else&nbsp;here'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">menuDivider</span><span class="pre_green">(),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">dropDownHeader</span><span class="pre_green">(</span><span
                class="pre_red">'Dropdown&nbsp;Header'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Separate&nbsp;link'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;))<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;)<br>));<br></span><span
                class="pre_blue">?&gt;</span>
        </span>
    </pre>
</div>


<h3 id="btn-groups-vertical">Vertical variation</h3>

<p>Make a set of buttons appear vertically stacked rather than horizontally.</p>

<div class="bs-example">
    <?php
    echo BSHtml::verticalButtonGroup(array(
        array('label' => '1'),
        array('label' => '2'),
        array(
            'own' =>BSHtml::buttonDropdown(
                'Dropdown',
                array(
                    BSHtml::dropDownHeader('Dropdown Header'),
                    array('label' => 'Action', 'url' => '#'),
                    array('label' => 'Another action', 'url' => '#'),
                    array('label' => 'Something else here', 'url' => '#'),
                    BSHtml::menuDivider(),
                    BSHtml::dropDownHeader('Dropdown Header'),
                    array('label' => 'Separate link', 'url' => '#'),
                )
            )
        )

    ));
    ?>
</div>
<div class="highlight">
    <pre>
        <span class="pre_black">
&nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">verticalButtonGroup</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'1'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'2'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'own'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">buttonDropdown</span><span class="pre_green">(</span><span
                class="pre_red">'Dropdown'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">dropDownHeader</span><span class="pre_green">(</span><span
                class="pre_red">'Dropdown&nbsp;Header'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Another&nbsp;action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Something&nbsp;else&nbsp;here'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">menuDivider</span><span class="pre_green">(),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">dropDownHeader</span><span class="pre_green">(</span><span
                class="pre_red">'Dropdown&nbsp;Header'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Separate&nbsp;link'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;))<br>&nbsp;&nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;<br>));<br></span><span
                class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="btn-groups-justified">Justified link variation</h3>

<p>Make a group of buttons stretch at the same size to span the entire width of its parent.</p>

<div class="bs-callout bs-callout-warning">
    <h4>Element-specific usage</h4>

    <p>This only works with <code>&lt;a&gt;</code> elements as the <code>&lt;button&gt;</code> doesn't pick up these
        styles.</p>
</div>

<div class="bs-example">
    <div class="btn-group btn-group-justified">
        <a href="#" class="btn btn-default">Left</a>
        <a href="#" class="btn btn-default">Middle</a>
        <a href="#" class="btn btn-default">Right</a>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-group btn-group-justified"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

</div>
