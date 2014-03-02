<!-- Modal
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="modals">Modals <small><a href="http://getbootstrap.com/javascript/#modals" target="_blank" class="btn btn-xs btn-primary">read more ..</a></small></h1>
</div>

<h2 id="modals-examples">Examples</h2>
<h3>Static example</h3>
<p>A rendered modal with header, body, and set of actions in the footer.</p>
<div class="bs-example bs-example-modal">
    <div class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /example -->
<div class="highlight">
    <pre>
        <span class="pre_black">
            <span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
                class="pre_blue">widget</span><span class="pre_green">(</span><span
                class="pre_red">'bootstrap.widgets.BsModal'</span><span
                class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'myModal'</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'header'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Modal&nbsp;Heading'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'content'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'&lt;p&gt;One&nbsp;fine&nbsp;body...&lt;/p&gt;'</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'footer'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">button</span><span class="pre_green">(</span><span
                class="pre_red">'Save&nbsp;Changes'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'data-dismiss'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'modal'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">BUTTON_COLOR_PRIMARY<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span class="pre_blue">BSHtml</span><span
                class="pre_green">::</span><span class="pre_blue">button</span><span
                class="pre_green">(</span><span class="pre_red">'Close'</span><span
                class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'data-dismiss'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'modal'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">))<br>&nbsp;&nbsp; &nbsp;)<br>));<br></span><span
                class="pre_blue">?&gt;</span>
        </span>
    </pre>
</div>


    <div id="modals-usage" class="bs-example" style="padding-bottom: 24px;">
        <?php echo BSHtml::ajaxLink('Launch Demo Modal',
            Yii::app()->createAbsoluteUrl('site/ajaxTest'),
            array(
                'cache' => true,
                'data' => array(
                    'message' => 'clicked the AjaxLink'
                ),
                'type' => 'POST',
                'success' => 'js:function(data){
                console.log(data);
                $("#demo_modal .modal-body").html(data);
                $("#demo_modal").modal("show");
            }',
            ),
            array(
                'icon' => BSHtml::GLYPHICON_BELL
            )
        ); ?>
    </div><!-- /example -->
<div class="highlight">
    <pre>
        <span class="pre_black">
            <span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">ajaxLink</span><span class="pre_green">(</span><span
                class="pre_red">'open&nbsp;Modal'</span><span class="pre_green">,&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">createAbsoluteUrl</span><span
                class="pre_green">(</span><span class="pre_red">'site/ajaxTest'</span><span
                class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'cache'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'data'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'message'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'clicked&nbsp;the&nbsp;AjaxLink'<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'POST'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'success'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'js:function(data){<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;console.log(data);<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$(".modal-body").html(data);<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$("#demo_modal").modal("show");<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}'<br></span><span
                class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'icon'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span
                class="pre_green">::</span><span class="pre_blue">GLYPHICON_BELL<br></span><span
                class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
        </span>
    </pre>
</div>
    <?php $this->widget('bootstrap.widgets.BsModal', array(
        'id' => 'myModal',
        'header' => 'Modal Heading',
        'content' => '<p>One fine body...</p>',
        'footer' => array(
            BSHtml::button(
                'Save Changes',
                array('data-dismiss' => 'modal', 'color' => BSHtml::BUTTON_COLOR_PRIMARY)
            ),
            BSHtml::button('Close', array('data-dismiss' => 'modal')),
        ),
    )); ?>
</div>