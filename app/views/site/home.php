<?php $this->pageTitle = 'Home' ?>
<div class="content g-markdown">
    <?= BsHtml::pageHeader('Yii-Bootstrap3-Extension', BsHtml::italics(' Version 0.0.8 <a href="https://packagist.org/packages/drmabuse/yii-bootstrap-3-module"><img src="https://poser.pugx.org/drmabuse/yii-bootstrap-3-module/v/stable.png" alt="Latest Stable Version"></a> <a href="https://packagist.org/packages/drmabuse/yii-bootstrap-3-module"><img src="https://poser.pugx.org/drmabuse/yii-bootstrap-3-module/downloads.png" alt="Total Downloads Packagist"></a>')); ?>
    <p><strong>Instructions</strong></p>

    <p>This yii module uses <a href="http://getbootstrap.com" title="bootsrap">Twitter Bootstrap</a> as a base. It is
        written for the Yii framework and requires at least PHP&gt; = 5.3 *.The usual widgets like CGridView offered
        with. You could test it after installation with the gii code generator is included in the module.</p>
    <?=
    BsHtml::alert(
        BsHtml::ALERT_COLOR_WARNING,
        BsHtml::icon(BsHtml::GLYPHICON_WARNING_SIGN) .
        ' 06.03.2014 Module removed add as Extension ' .
        BsHtml::alertLink('Commit', array('href' => 'http://goo.gl/Oe7xI3'))
    ) ?>
    <?=
    BsHtml::alert(
        BsHtml::ALERT_COLOR_WARNING,
        BsHtml::icon(BsHtml::GLYPHICON_WARNING_SIGN) .
        ' 02.03.2014 Plz check Documentation BSHtml now BsHtml ,BSApi => BsApi and some more changes are from ' .
        BsHtml::alertLink('Commit', array('href' => 'http://goo.gl/irvXaV')) . ' Thx to Safarov Alisher'
    ) ?>
    <div class="bs-docs-section">
        <div class="page-header">
            <h4 id="download">
                Download Bootstrap
                <small>
                    <a class="btn btn-xs btn-primary"
                       href="http://getbootstrap.com/customize/"
                       onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download compiled']);"
                        >
                        Download Bootstrap
                    </a>
                </small>
            </h4>
        </div>
        <p>Append in Your Yii Layout:</p>
    <pre>
        <span class="pre_black">
<span class="pre_blue">&lt;?php<br>$cs &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">=&nbsp;</span><span class="pre_blue">Yii</span><span
                class="pre_green">::</span><span class="pre_blue">app</span><span class="pre_green">()-&gt;</span><span
                class="pre_blue">clientScript</span><span class="pre_green">;<br></span><span
                class="pre_blue">$themePath&nbsp;</span><span class="pre_green">=&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">theme</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">baseUrl</span><span
                class="pre_green">;<br><br></span><span
                class="pre_orange">/**<br>&nbsp;*&nbsp;StyleSHeets<br>&nbsp;*/<br></span><span
                class="pre_blue">$cs</span><span class="pre_green">-&gt;</span><span
                class="pre_blue">registerCssFile</span><span class="pre_green">(</span><span
                class="pre_blue">$themePath&nbsp;</span><span class="pre_green">.&nbsp;</span><span
                class="pre_red">'/assets/css/bootstrap.css'</span><span
                class="pre_green">);<br></span><span class="pre_blue">$cs</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">registerCssFile</span><span
                class="pre_green">(</span><span class="pre_blue">$themePath&nbsp;</span><span
                class="pre_green">.&nbsp;</span><span
                class="pre_red">'/assets/css/bootstrap-theme.css'</span><span class="pre_green">);<br><br></span><span
                class="pre_orange">/**<br>&nbsp;*&nbsp;JavaScripts<br>&nbsp;*/<br></span><span
                class="pre_blue">$cs</span><span class="pre_green">-&gt;</span><span
                class="pre_blue">registerCoreScript</span><span class="pre_green">(</span><span
                class="pre_red">'jquery'</span><span class="pre_green">,&nbsp;</span><span
                class="pre_blue">CClientScript</span><span class="pre_green">::</span><span
                class="pre_blue">POS_END</span><span class="pre_green">);<br></span><span
                class="pre_blue">$cs</span><span class="pre_green">-&gt;</span><span
                class="pre_blue">registerCoreScript</span><span class="pre_green">(</span><span
                class="pre_red">'jquery.ui'</span><span class="pre_green">,&nbsp;</span><span
                class="pre_blue">CClientScript</span><span class="pre_green">::</span><span
                class="pre_blue">POS_END</span><span class="pre_green">);<br></span><span
                class="pre_blue">$cs</span><span class="pre_green">-&gt;</span><span
                class="pre_blue">registerScriptFile</span><span class="pre_green">(</span><span
                class="pre_blue">$themePath&nbsp;</span><span class="pre_green">.&nbsp;</span><span
                class="pre_red">'/assets/js/bootstrap.min.js'</span><span class="pre_green">,&nbsp;</span><span
                class="pre_blue">CClientScript</span><span class="pre_green">::</span><span
                class="pre_blue">POS_END</span><span class="pre_green">);<br></span><span
                class="pre_blue">$cs</span><span class="pre_green">-&gt;</span><span
                class="pre_blue">registerScript</span><span class="pre_green">(</span><span
                class="pre_red">'tooltip'</span><span class="pre_green">,&nbsp;</span><span
                class="pre_red">"$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()"</span><span
                class="pre_green">,&nbsp;</span><span class="pre_blue">CClientScript</span><span
                class="pre_green">::</span><span class="pre_blue">POS_READY</span><span
                class="pre_green">);<br></span><span class="pre_blue">?&gt;<br></span>&lt;!--&nbsp;HTML5&nbsp;shim&nbsp;and&nbsp;Respond.js&nbsp;IE8&nbsp;support&nbsp;of&nbsp;HTML5&nbsp;elements&nbsp;and&nbsp;media&nbsp;queries&nbsp;--&gt;<br>&lt;!--[if&nbsp;lt&nbsp;IE&nbsp;9]&gt;<br>&nbsp;&nbsp; &nbsp;&lt;script&nbsp;src="<span
                class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">theme</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">baseUrl&nbsp;</span><span
                class="pre_green">.&nbsp;</span><span
                class="pre_red">'/assets/js/html5shiv.js'</span><span class="pre_green">;<br></span><span
                class="pre_blue">?&gt;</span>"&gt;&lt;/script&gt;<br>&nbsp;&nbsp; &nbsp;&lt;script&nbsp;src="<span
                class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">theme</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">baseUrl&nbsp;</span><span
                class="pre_green">.&nbsp;</span><span
                class="pre_red">'/assets/js/respond.min.js'</span><span
                class="pre_green">;<br></span><span class="pre_blue">?&gt;</span>"&gt;&lt;/script&gt;<br>&lt;![endif]--&gt;</span>
    </pre>

    </div>


    <h3 id="hh1">Module Installation <a class="anchor" href="#hh1"></a></h3>

    <p>
        <a href="https://bitbucket.org/DrMabuse/yii-bootstrap-3-module" title="bitbucket">Download the module</a>
        move the Package to your
    </p>

    <div class="hl-code">
        <div class="hl-main">
            <pre><span class="hl-code">/</span><span class="hl-reserved">protected</span><span
                    class="hl-code">/</span><span class="hl-identifier">modules</span><span
                    class="hl-code">/</span></pre>
        </div>
    </div>
    <p>or install with Composer</p>

    <p><a href="https://packagist.org/packages/drmabuse/yii-bootstrap-3-module" title="">Packagist</a></p>

    <div class="hl-code">
        <div class="hl-main">
            <pre><span class="hl-quotes">"</span><span class="hl-string">drmabuse/yii-bootstrap-3-module</span><span
                    class="hl-quotes">"</span><span class="hl-code">: </span><span class="hl-quotes">"</span><span
                    class="hl-string">dev-master</span><span class="hl-quotes">"</span></pre>
        </div>
    </div>

    <ul>
        <li>Set up Git by following the instructions <a href="https://help.github.com/articles/set-up-git">here</a>.

            <ul>
                <li>Update the configurations in <code>app/config/</code> to suit your needs. The
                    <code>/config/main.php</code>
                    to suit your database requirements.
                </li>
                <li>Composer is required The package includes already a <code>composer.phar</code> file.</li>
                <li>Browse through the <code>composer.json</code> and remove the dependencies you don't need also update
                    the required versions of the extensions.
                </li>
                <li>If you have <code>composer</code> installed globally:

                    <ul>
                        <li>Run <code>composer self-update</code> to make sure you have the latest version of composer.
                        </li>
                        <li>Run <code>composer install</code> to download all the dependencies.</li>
                    </ul>
                </li>
                <li>If you work the <code>composer.phar</code> library within the project boilerplate.</li>
                <li>Run <code>php composer.phar self-update</code> to make sure you have the latest version of composer.
                </li>
                <li>Run <code>php composer.phar install</code> to download all the dependencies.</li>
            </ul>
        </li>
    </ul>
    <h3 id="hh2">Configure <a class="anchor" href="#hh2"></a></h3>

    <p>configure</p>

    <div class="hl-code">
        <div class="hl-main">
            <pre><code>/config/main.php</code></pre>
        </div>
    </div>

    <p>with</p>
<pre>
    <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">
array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'aliases'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'bootstrap'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_red">'ext.bootstrap'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'import'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'bootstrap.behaviors.*'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'bootstrap.helpers.*'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'bootstrap.widgets.*'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'modules'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'gii'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'generatorPaths'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'bootstrap.gii'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'components'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'bootstrap'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'bootstrap.components.BsApi'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_green">)<br>&nbsp;&nbsp; &nbsp;)<br>);<br></span><span
            class="pre_blue">?&gt;</span>
</span>
</pre>

    <p>
        <a href="https://bitbucket.org/DrMabuse/yii-bootstrap-3-module-example/src/bf91414d4a6ff5dd2a6c34d09d309c5a122d97c4/app/config/main.php?at=master"
           title="">Full Config Example</a></p>
</div>