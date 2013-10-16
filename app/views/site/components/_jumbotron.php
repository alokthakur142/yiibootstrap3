<!-- Jumbotron
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="jumbotron">Jumbotron</h1>
    </div>
    <p>A lightweight, flexible component that can optional extend the entire viewport to showcase key content on your site. To make the jumbotron full width, don't include it within a <code>.container</code>. Placing it within a container will keep it at the width of the rest of your content and provide rounded corners.</p>
    <div class="bs-example">
        <?= BSHtml::jumbotron(
            'Hello, world!',
            $this->renderInternal(Yii::app()->basePath.'/views/site/components/_jumboPartial.php',array(),true)
        ) ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
                <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Learn more<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>
