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
        <span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br></span><span style="color: #007700;">echo&nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">buttonGroup</span><span style="color: #007700;">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'Left'<br>&nbsp;&nbsp; &nbsp;</span><span style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'Middle'<br>&nbsp;&nbsp; &nbsp;</span><span style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'own'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">ajaxButton</span><span style="color: #007700;">(</span><span
                style="color: #DD0000;">'own'</span><span style="color: #007700;">,&nbsp;</span><span
                style="color: #0000BB;">Yii</span><span style="color: #007700;">::</span><span style="color: #0000BB;">app</span><span
                style="color: #007700;">()-&gt;</span><span style="color: #0000BB;">createAbsoluteUrl</span><span
                style="color: #007700;">(</span><span style="color: #DD0000;">'site/ajaxTest'</span><span
                style="color: #007700;">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'cache'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #0000BB;">true</span><span style="color: #007700;">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'data'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'message'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'clicked&nbsp;the&nbsp;Ajaxbutton&nbsp;from&nbsp;the&nbsp;buttongroup'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'type'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'POST'</span><span style="color: #007700;">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'success'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'js:function(data){<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;console.log(data);<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(".modal-body").html(data);<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$("#demo_modal").modal("show");<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #007700;">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'icon'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">GLYPHICON_BELL<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #007700;">))<br>&nbsp;&nbsp; &nbsp;)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                style="color: #DD0000;">'color'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">BUTTON_COLOR_WARNING</span><span style="color: #007700;">,<br>&nbsp;&nbsp; &nbsp;</span><span
                style="color: #DD0000;">'type'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">BUTTON_TYPE_LINK<br></span><span style="color: #007700;">));<br></span><span
                style="color: #0000BB;">?&gt;</span>
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
       <span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br></span><span style="color: #007700;">echo&nbsp;</span><span
               style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
               style="color: #0000BB;">buttonToolbar</span><span style="color: #007700;">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'items'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'icon'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
               style="color: #0000BB;">GLYPHICON_CAMERA<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'2'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'3'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'4'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'items'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'5'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'6'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'7'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;)<br>));<br></span><span
               style="color: #0000BB;">?&gt;</span>
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
       <span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br></span><span style="color: #007700;">echo&nbsp;</span><span
               style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
               style="color: #0000BB;">buttonToolbar</span><span style="color: #007700;">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'items'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'icon'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
               style="color: #0000BB;">GLYPHICON_CAMERA<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'2'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'3'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'4'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'items'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'5'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'6'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #DD0000;">'7'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
               style="color: #007700;">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
               style="color: #DD0000;">'size'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
               style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
               style="color: #0000BB;">BUTTON_SIZE_MINI<br></span><span style="color: #007700;">));<br></span><span
               style="color: #0000BB;">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="btn-groups-nested">Nesting</h3>

<p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a
    series of buttons.</p>

<div class="bs-example">
    <?php
    echo BSHtml::buttonToolbar(array(
        array('items' => array(
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
        )),
    ));
    ?>
</div>
<div class="highlight">
    <pre >
        <span style="color: #000000"><span style="color: #0000BB">&lt;?php<br></span><span style="color: #007700;">echo&nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">buttonToolbar</span><span style="color: #007700;">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'items'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'1'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'2'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'own'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">buttonDropdown</span><span style="color: #007700;">(</span><span
                style="color: #DD0000;">'Dropdown'</span><span style="color: #007700;">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">dropDownHeader</span><span style="color: #007700;">(</span><span
                style="color: #DD0000;">'Dropdown&nbsp;Header'</span><span style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'Action'</span><span style="color: #007700;">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'url'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'Another&nbsp;action'</span><span style="color: #007700;">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'url'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700;">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'url'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">menuDivider</span><span style="color: #007700;">(),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #0000BB;">BSHtml</span><span style="color: #007700;">::</span><span
                style="color: #0000BB;">dropDownHeader</span><span style="color: #007700;">(</span><span
                style="color: #DD0000;">'Dropdown&nbsp;Header'</span><span style="color: #007700;">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'label'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'Separate&nbsp;link'</span><span style="color: #007700;">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #DD0000;">'url'&nbsp;</span><span style="color: #007700;">=&gt;&nbsp;</span><span
                style="color: #DD0000;">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                style="color: #007700;">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;))<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;)<br>));<br></span><span
                style="color: #0000BB;">?&gt;</span>
        </span>
    </pre>
</div>


<h3 id="btn-groups-vertical">Vertical variation</h3>

<p>Make a set of buttons appear vertically stacked rather than horizontally.</p>

<div class="bs-example">
    <div class="btn-group-vertical">
        <button type="button" class="btn btn-default">Button</button>
        <button type="button" class="btn btn-default">Button</button>
        <div class="btn-group">
            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <button type="button" class="btn btn-default">Button</button>
        <button type="button" class="btn btn-default">Button</button>
        <div class="btn-group">
            <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop4">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-group-vertical"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
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
