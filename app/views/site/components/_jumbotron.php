<!-- Jumbotron
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="jumbotron">Jumbotron</h1>
    </div>
    <p>A lightweight, flexible component that can optional extend the entire viewport to showcase key content on your
        site. To make the jumbotron full width, don't include it within a <code>.container</code>. Placing it within a
        container will keep it at the width of the rest of your content and provide rounded corners.</p>

    <div class="bs-example">
        <?php echo
        BsHtml::jumbotron(
            'Hello, world!',
            $this->renderInternal(Yii::app()->basePath . '/views/site/components/_jumboPartial.php', array(), true)
        ) ?>
    </div>
    <div class="highlight"><pre><span class="pre_black">
<span class="pre_blue">&lt;?=&nbsp;BsHtml</span><span class="pre_green">::</span><span class="pre_blue">jumbotron</span><span
                    class="pre_green">(</span><span class="pre_red">'Hello,&nbsp;world!'</span><span class="pre_green">,&nbsp;</span><span
                    class="pre_blue">$this</span><span class="pre_green">-&gt;</span><span class="pre_blue">renderInternal</span><span
                    class="pre_green">(</span><span class="pre_blue">Yii</span><span class="pre_green">::</span><span
                    class="pre_blue">app</span><span class="pre_green">()-&gt;</span><span class="pre_blue">basePath&nbsp;</span><span
                    class="pre_green">.&nbsp;</span><span
                    class="pre_red">'/views/site/components/_jumboPartial.php'</span><span class="pre_green">,&nbsp;array(),&nbsp;</span><span
                    class="pre_blue">true</span><span class="pre_green">))&nbsp;</span><span
                    class="pre_blue">?&gt;</span>
</span></pre>
    </div>
</div>
