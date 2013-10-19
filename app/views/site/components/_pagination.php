<!-- Pagination
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="pagination">Pagination</h1>
    </div>
    <p class="lead">Provide pagination links for your site or app with the multi-page pagination component, or the
        simpler <a href="#pagination-pager">pager alternative</a>.</p>

    <h2 id="pagination-default">Default pagination</h2>

    <p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily
        scalable, and provides large click areas.</p>

    <div class="bs-example">
        <?php
        $list = array(
            array('label' => '«', 'url' => '#'),
            array('label' => '1', 'url' => '#'),
            array('label' => '2', 'url' => '#'),
            array('label' => '3', 'url' => '#'),
            array('label' => '4', 'url' => '#'),
            array('label' => '5', 'url' => '#'),
            array('label' => '»', 'url' => '#'),
        );
        ?>
        <?php echo BSHtml::pagination($list); ?>
    </div>
    <div class="highlight"><pre><span class="pre_black">
&nbsp;<span class="pre_blue">&lt;?php<br>$list&nbsp;</span><span class="pre_green">=&nbsp;array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'«'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'1'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'2'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'3'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'4'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'5'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'»'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_green">)<br>);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">pagination</span><span
                    class="pre_green">(</span><span class="pre_blue">$list</span><span
                    class="pre_green">);<br></span><span class="pre_blue">?&gt;</span>
</span></pre>
    </div>

    <h3>Disabled and active states</h3>

    <p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code>
        to indicate the current page.</p>

    <div class="bs-example">
        <?php
        $list = array(
            array('label' => '«', 'url' => '#', 'disabled' => true),
            array('label' => '1', 'url' => '#', 'active' => true),
            array('label' => '2', 'url' => '#'),
            array('label' => '3', 'url' => '#'),
            array('label' => '4', 'url' => '#'),
            array('label' => '5', 'url' => '#'),
            array('label' => '»', 'url' => '#'),
        );
        ?>
        <?php echo BSHtml::pagination($list); ?>
    </div>
    <div class="highlight"><pre><span class="pre_black">
<span class="pre_blue">&lt;?php<br>$list&nbsp;</span><span class="pre_green">=&nbsp;array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'«'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'disabled'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'1'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'2'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'3'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'4'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'5'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'»'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_green">)<br>);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">pagination</span><span
                    class="pre_green">(</span><span class="pre_blue">$list</span><span
                    class="pre_green">);<br></span><span class="pre_blue">?&gt;</span>
</span></pre>
    </div>


    <h3>Sizing</h3>

    <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional
        sizes.</p>

    <div class="bs-example">
        <div class="">
            <?php echo BSHtml::pagination($list, array('size' => BSHtml::PAGINATION_SIZE_LARGE)); ?>
        </div>
        <div class="">
            <?php echo BSHtml::pagination($list); ?>
        </div>
        <div class="">
            <?php echo BSHtml::pagination($list, array('size' => BSHtml::PAGINATION_SIZE_SMALL)); ?>
        </div>
    </div><span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
            class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">pagination</span><span
            class="pre_green">(</span><span class="pre_blue">$list</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
           class="pre_red">'size'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">PAGINATION_SIZE_LARGE<br></span><span
            class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
            class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
            class="pre_green">::</span><span class="pre_blue">pagination</span><span
            class="pre_green">(</span><span class="pre_blue">$list</span><span
            class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
            class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
            class="pre_green">::</span><span class="pre_blue">pagination</span><span
            class="pre_green">(</span><span class="pre_blue">$list</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
           class="pre_red">'size'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">PAGINATION_SIZE_SMALL<br></span><span
            class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
</span></pre></div>


<h2 id="pagination-pager">Pager</h2>
<p>Quick previous and next links for simple pagination implementations with light markup and styles. It's great for
    simple sites like blogs or magazines.</p>

<h3>Default example</h3>
<p>By default, the pager centers links.</p>
<div class="bs-example">
    <?php echo BSHtml::pager(array(
        array('label' => 'Previous', 'url' => '#'),
        array('label' => 'Next', 'url' => '#'),
    )); ?>
</div>
<div class="highlight"><pre><<span class="pre_black">
&nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">pager</span><span
                class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'Previous'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'Next'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;</span>
</span></pre>
</div>

<h3>Aligned links</h3>
<p>Alternatively, you can align each link to the sides:</p>
<div class="bs-example">
    <?php echo BSHtml::pager(array(
        array('label' => '&larr; Older', 'url' => '#', 'previous' => true),
        array('label' => 'Newer &rarr;', 'url' => '#', 'next' => true),
    )); ?>
</div>
<div class="highlight"><pre><<span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">pager</span><span
                class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'&amp;larr;&nbsp;Older'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'#'</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><spanclass="pre_red">'previous'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'Newer&nbsp;&amp;rarr;'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'#'</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><spanclass="pre_red">'next'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;</span>
</span></pre>
</div>


<h3>Optional disabled state</h3>
<p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
<div class="bs-example">
    <?php echo BSHtml::pager(array(
        array('label' => '&larr; Older', 'url' => '#', 'previous' => true, 'disabled' => true),
        array('label' => 'Newer &rarr;', 'url' => '#', 'next' => true),
    )); ?>
</div>
<div class="highlight"><pre><span class="pre_black">
&nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">pager</span><span
                class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'&amp;larr;&nbsp;Older'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'#'</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><spanclass="pre_red">'previous'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><spanclass="pre_red">'disabled'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'Newer&nbsp;&amp;rarr;'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
               class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
               class="pre_red">'#'</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><spanclass="pre_red">'next'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;</span>
</span></pre>
</div>
</div>





