<div class="content g-markdown">
<?= BSHtml::pageHeader('Yii-Bootstrap3-Module', BSHtml::italics(' Version 0.0.5 ')); ?>
<p><strong>Instructions</strong></p>
<?= BSHtml::emphasis('This module facilitates their use of <a href="http://getbootstrap.com" title="bootsrap">Twitter Bootstrap</a> as it provides multiple widgets') ?>
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="download">Download Bootstrap</h1>
    </div>
    <p class="lead">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different
        skill level and use case. Read through to see what suits your particular needs.</p>

    <h3 id="download-compiled">Compiled CSS, JS, and fonts</h3>

    <p>The fastest way to get Bootstrap is to download the compiled and minified versions of our CSS and JavaScript,
        along with the included fonts. No documentation or original source files are included.</p>

    <p><a class="btn btn-lg btn-primary"
          href="https://github.com/twbs/bootstrap/releases/download/v3.0.0/bootstrap-3.0.0-dist.zip"
          onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download compiled']);">Download
            Bootstrap</a></p>

    <h3 id="download-additional">Additional downloads</h3>

    <div class="bs-docs-dl-options">
        <h4>
            <a href="https://github.com/twbs/bootstrap/archive/v3.0.0.zip"
               onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download source']);">Download latest
                source code</a>
        </h4>

        <p>Get the original files for all CSS and JavaScript by downloading the latest version directly from GitHub.</p>
        <h4>
            <a href="https://github.com/twbs/bootstrap"
               onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'GitHub project']);">Clone or fork via
                GitHub</a>
        </h4>

        <p>Clone the entire project or fork your own version of Bootstrap to make it your own by visiting us on
            GitHub.</p>
        <h4>
            Install with <a href="http://bower.io">Bower</a>
        </h4>

        <p>Install and manage the original files for all CSS and JavaScript, along with a local copy of the docs, using
            <a href="http://bower.io">Bower</a>.</p>

        <div class="highlight"><pre><code class="bash"><span class="nv">$ </span>bower install bootstrap
                </code></pre>
        </div>
    </div>
    <p>Append in Your Yii Layout:</p>

    <div class="hl-code">
        <div class="hl-main"><pre><span class="hl-inlinetags">&lt;?php</span>
<span class="hl-var">$cs</span><span class="hl-code"> = </span><span class="hl-identifier">Yii</span><span
                    class="hl-code">::</span><span class="hl-identifier">app</span><span
                    class="hl-brackets">(</span><span class="hl-brackets">)</span><span
                    class="hl-code">-&gt;</span><span class="hl-identifier">clientScript</span><span class="hl-code">;
</span><span class="hl-var">$themePath</span><span class="hl-code"> = </span><span class="hl-identifier">Yii</span><span
                    class="hl-code">::</span><span class="hl-identifier">app</span><span
                    class="hl-brackets">(</span><span class="hl-brackets">)</span><span
                    class="hl-code">-&gt;</span><span class="hl-identifier">theme</span><span
                    class="hl-code">-&gt;</span><span class="hl-identifier">baseUrl</span><span class="hl-code">;

</span><span class="hl-comment">/*</span><span class="hl-comment">*
 * StyleSHeets
 </span><span class="hl-comment">*/</span>
<span class="hl-var">$cs</span><span class="hl-code">
    -&gt;</span><span class="hl-identifier">registerCssFile</span><span class="hl-brackets">(</span><span
                    class="hl-var">$themePath</span><span class="hl-code">.</span><span class="hl-quotes">'</span><span
                    class="hl-string">/assets/css/bootstrap.css</span><span class="hl-quotes">'</span><span
                    class="hl-brackets">)</span><span class="hl-code">
    -&gt;</span><span class="hl-identifier">registerCssFile</span><span class="hl-brackets">(</span><span
                    class="hl-var">$themePath</span><span class="hl-code">.</span><span class="hl-quotes">'</span><span
                    class="hl-string">/assets/css/bootstrap-theme.css</span><span class="hl-quotes">'</span><span
                    class="hl-brackets">)</span><span class="hl-code">;

</span><span class="hl-comment">/*</span><span class="hl-comment">*
 * JavaScripts
 </span><span class="hl-comment">*/</span>
<span class="hl-var">$cs</span><span class="hl-code">
    -&gt;</span><span class="hl-identifier">registerCoreScript</span><span class="hl-brackets">(</span><span
                    class="hl-quotes">'</span><span class="hl-string">jquery</span><span class="hl-quotes">'</span><span
                    class="hl-code">,</span><span class="hl-identifier">CClientScript</span><span
                    class="hl-code">::</span><span class="hl-identifier">POS_END</span><span
                    class="hl-brackets">)</span><span class="hl-code">
    -&gt;</span><span class="hl-identifier">registerCoreScript</span><span class="hl-brackets">(</span><span
                    class="hl-quotes">'</span><span class="hl-string">jquery.ui</span><span
                    class="hl-quotes">'</span><span class="hl-code">,</span><span
                    class="hl-identifier">CClientScript</span><span class="hl-code">::</span><span
                    class="hl-identifier">POS_END</span><span class="hl-brackets">)</span><span class="hl-code">
    -&gt;</span><span class="hl-identifier">registerScriptFile</span><span class="hl-brackets">(</span><span
                    class="hl-var">$themePath</span><span class="hl-code">.</span><span class="hl-quotes">'</span><span
                    class="hl-string">/assets/js/bootstrap.min.js</span><span class="hl-quotes">'</span><span
                    class="hl-code">,</span><span class="hl-identifier">CClientScript</span><span
                    class="hl-code">::</span><span class="hl-identifier">POS_END</span><span
                    class="hl-brackets">)</span><span class="hl-code">

    -&gt;</span><span class="hl-identifier">registerScript</span><span class="hl-brackets">(</span><span
                    class="hl-quotes">'</span><span class="hl-string">tooltip</span><span
                    class="hl-quotes">'</span><span class="hl-code">,
        </span><span class="hl-quotes">"</span><span class="hl-string">$('[data-toggle=</span><span class="hl-special">\"</span><span
                    class="hl-string">tooltip</span><span class="hl-special">\"</span><span class="hl-string">]').tooltip();
        $('[data-toggle=</span><span class="hl-special">\"</span><span class="hl-string">popover</span><span
                    class="hl-special">\"</span><span class="hl-string">]').tooltip()</span><span
                    class="hl-quotes">"</span><span class="hl-code">
        ,</span><span class="hl-identifier">CClientScript</span><span class="hl-code">::</span><span
                    class="hl-identifier">POS_READY</span><span class="hl-brackets">)</span><span class="hl-code">;

</span><span class="hl-inlinetags">?&gt;</span><span class="hl-code">
&lt;!-- </span><span class="hl-identifier">HTML5</span> <span class="hl-identifier">shim</span> <span
                    class="hl-reserved">and</span> <span class="hl-identifier">Respond</span><span
                    class="hl-code">.</span><span class="hl-identifier">js</span> <span class="hl-identifier">IE8</span> <span
                    class="hl-identifier">support</span> <span class="hl-identifier">of</span> <span
                    class="hl-identifier">HTML5</span> <span class="hl-identifier">elements</span> <span
                    class="hl-reserved">and</span> <span class="hl-identifier">media</span> <span class="hl-identifier">queries</span><span
                    class="hl-code"> --&gt;
&lt;!--</span><span class="hl-brackets">[</span><span class="hl-reserved">if</span> <span
                    class="hl-identifier">lt</span> <span class="hl-identifier">IE</span> <span
                    class="hl-number">9</span><span class="hl-brackets">]</span><span class="hl-code">&gt;
    &lt;</span><span class="hl-identifier">script</span> <span class="hl-identifier">src</span><span
                    class="hl-code">=</span><span class="hl-quotes">"</span><span class="hl-string">&lt;?php echo Yii::app()-&gt;theme-&gt;baseUrl ?&gt;/assets/js/html5shiv.js</span><span
                    class="hl-quotes">"</span><span class="hl-code">&gt;&lt;/</span><span
                    class="hl-identifier">script</span><span class="hl-code">&gt;
    &lt;</span><span class="hl-identifier">script</span> <span class="hl-identifier">src</span><span
                    class="hl-code">=</span><span class="hl-quotes">"</span><span class="hl-string">&lt;?php echo Yii::app()-&gt;theme-&gt;baseUrl ?&gt;/assets/js/respond.min.js</span><span
                    class="hl-quotes">"</span><span class="hl-code">&gt;&lt;/</span><span
                    class="hl-identifier">script</span><span class="hl-code">&gt;
&lt;!</span><span class="hl-brackets">[</span><span class="hl-reserved">endif</span><span
                    class="hl-brackets">]</span><span class="hl-code">--&gt;</span></pre>
        </div>
    </div>

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
            <li>Update the configurations in <code>app/config/</code> to suit your needs. The <code>common/config/main.php</code>
                is configured to use <strong>sqllite</strong> by default. Change your
                <code>common/config/env/dev.php</code>
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
            <pre><span class="hl-code">/</span><span class="hl-identifier">config</span><span
                    class="hl-code">/</span><span class="hl-identifier">main</span><span class="hl-code">.</span><span
                    class="hl-identifier">php</span></pre>
    </div>
</div>

<p>with</p>

<div class="hl-code">
    <div class="hl-main"><pre><span class="hl-inlinetags">&lt;?php</span>
    <span class="hl-quotes">'</span><span class="hl-string">aliases</span><span class="hl-quotes">'</span><span
                class="hl-code"> =&gt; </span><span class="hl-reserved">array</span><span
                class="hl-brackets">(</span>
            <span class="hl-quotes">'</span><span class="hl-string">bootstrap</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span class="hl-quotes">'</span><span
                class="hl-string">application.modules.bootstrap</span><span class="hl-quotes">'</span><span
                class="hl-code">,
    </span><span class="hl-brackets">)</span><span class="hl-code">,
    </span><span class="hl-quotes">'</span><span class="hl-string">modules</span><span class="hl-quotes">'</span><span
                class="hl-code"> =&gt; </span><span class="hl-reserved">array</span><span
                class="hl-brackets">(</span>
            <span class="hl-quotes">'</span><span class="hl-string">bootstrap</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span
                class="hl-reserved">array</span><span
                class="hl-brackets">(</span>
                <span class="hl-quotes">'</span><span class="hl-string">class</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span class="hl-quotes">'</span><span
                class="hl-string">bootstrap.BootStrapModule</span><span class="hl-quotes">'</span>
            <span class="hl-brackets">)</span><span class="hl-code">,
            </span><span class="hl-quotes">'</span><span class="hl-string">gii</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span
                class="hl-reserved">array</span><span
                class="hl-brackets">(</span>
                <span class="hl-quotes">'</span><span class="hl-string">generatorPaths</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span
                class="hl-reserved">array</span><span
                class="hl-brackets">(</span><span class="hl-quotes">'</span><span
                class="hl-string">bootstrap.gii</span><span class="hl-quotes">'</span><span
                class="hl-brackets">)</span><span class="hl-code">,
                </span><span class="hl-quotes">'</span><span class="hl-string">class</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span class="hl-quotes">'</span><span
                class="hl-string">system.gii.GiiModule</span><span class="hl-quotes">'</span><span class="hl-code">,
                </span><span class="hl-quotes">'</span><span class="hl-string">password</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span class="hl-quotes">'</span><span
                class="hl-string">yaa</span><span class="hl-quotes">'</span><span class="hl-code">,
                </span><span class="hl-quotes">'</span><span class="hl-string">ipFilters</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span
                class="hl-reserved">array</span><span
                class="hl-brackets">(</span><span class="hl-quotes">'</span><span
                class="hl-string">127.0.0.1</span><span
                class="hl-quotes">'</span><span class="hl-code">,</span><span class="hl-quotes">'</span><span
                class="hl-string">::1</span><span class="hl-quotes">'</span><span class="hl-brackets">)</span><span
                class="hl-code">,
    </span><span class="hl-brackets">)</span><span class="hl-code">,
 
    </span><span class="hl-brackets">)</span><span class="hl-code">,
    </span><span class="hl-quotes">'</span><span class="hl-string">components</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span
                class="hl-reserved">array</span><span
                class="hl-brackets">(</span>
            <span class="hl-quotes">'</span><span class="hl-string">bsHtml</span><span class="hl-quotes">'</span><span
                class="hl-code"> =&gt; </span><span class="hl-reserved">array</span><span
                class="hl-brackets">(</span>
                <span class="hl-quotes">'</span><span class="hl-string">class</span><span
                class="hl-quotes">'</span><span class="hl-code"> =&gt; </span><span class="hl-quotes">'</span><span
                class="hl-string">bootstrap.components.BSHtml</span><span class="hl-quotes">'</span>
            <span class="hl-brackets">)</span><span class="hl-code">,
    </span><span class="hl-brackets">)</span>
    <span class="hl-inlinetags">?&gt;</span></pre>
    </div>
</div>

<p>
    <a href="https://bitbucket.org/DrMabuse/yii-bootstrap-3-module-example/src/bf91414d4a6ff5dd2a6c34d09d309c5a122d97c4/app/config/main.php?at=master"
       title="">Full Config Example</a></p>
</div>