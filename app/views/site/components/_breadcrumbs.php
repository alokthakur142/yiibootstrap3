<!-- Breadcrumbs
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="breadcrumbs">Breadcrumbs <small></small></h1>
    </div>
    <p class="lead">Indicate the current page's location within a navigational hierarchy.</p>
    <p>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</p>
    <?= BsHtml::emphasis(BsHtml::link('Read more on Yii Class Reference','http://www.yiiframework.com/doc/api/1.1/CBreadcrumbs')) ?>
    <div class="bs-example">
        <?php echo BsHtml::breadcrumbs(
            array(
                    'Components'
            )
        ); ?>
        <?php echo BsHtml::breadcrumbs(
            array(
                'Components' => array('site/components','#' => 'breadcrumbs'),
                'BreadCrumb'
            )
        ); ?>
        <?php $this->widget('bootstrap.widgets.BsBreadCrumb', array(
            'links'=> array(
                    'Library'
            ),
            // will change the container to ul
            'tagName'=>'ul',
            // will generate the clickable breadcrumb links
            'activeLinkTemplate'=>'<li><a href="{url}">{label}</a></li>',
             // will generate the current page url : <li>News</li>
            'inactiveLinkTemplate'=>'<li>{label}</li>',
             // will generate your homeurl item : <li><a href="/dr/dr/public_html/">Home</a></li>
            'homeLink'=>BsHtml::openTag('li').BsHtml::icon(BsHtml::GLYPHICON_HOME).BsHtml::closeTag('li')
        ));
        ?><!-- breadcrumbs -->
    </div>
    <div class="highlight">
        <pre>
            <span class="pre_black">
                <span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">breadcrumbs</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'Components'<br></span><span class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">breadcrumbs</span><span
                    class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'Components'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'site/components'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'#'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'breadcrumbs'<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'BreadCrumb'<br></span><span class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br>$this</span><span
                    class="pre_green">-&gt;</span><span class="pre_blue">widget</span><span
                    class="pre_green">(</span><span
                    class="pre_red">'bootstrap.widgets.BsBreadCrumb'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'links'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'Library'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_orange">//&nbsp;will&nbsp;change&nbsp;the&nbsp;container&nbsp;to&nbsp;ul<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'tagName'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'ul'</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_orange">//&nbsp;will&nbsp;generate&nbsp;the&nbsp;clickable&nbsp;breadcrumb&nbsp;links<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'activeLinkTemplate'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'&lt;li&gt;&lt;a&nbsp;href="{url}"&gt;{label}&lt;/a&gt;&lt;/li&gt;'</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_orange">//&nbsp;will&nbsp;generate&nbsp;the&nbsp;current&nbsp;page&nbsp;url&nbsp;:&nbsp;&lt;li&gt;News&lt;/li&gt;<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'inactiveLinkTemplate'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'&lt;li&gt;{label}&lt;/li&gt;'</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_orange">//&nbsp;will&nbsp;generate&nbsp;your&nbsp;homeurl&nbsp;item&nbsp;:&nbsp;&lt;li&gt;&lt;a&nbsp;href="/dr/dr/public_html/"&gt;Home&lt;/a&gt;&lt;/li&gt;<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'homeLink'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">openTag</span><span class="pre_green">(</span><span
                    class="pre_red">'li'</span><span class="pre_green">)&nbsp;.&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">icon</span><span class="pre_green">(</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">GLYPHICON_HOME</span><span
                    class="pre_green">)&nbsp;.&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">closeTag</span><span
                    class="pre_green">(</span><span class="pre_red">'li'</span><span
                    class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;</span>&lt;!--&nbsp;breadcrumbs&nbsp;--&gt;
            </span>
        </pre>
    </div>
</div>
