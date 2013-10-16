<!-- Pagination
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="pagination">Pagination</h1>
    </div>
    <p class="lead">Provide pagination links for your site or app with the multi-page pagination component, or the simpler <a href="#pagination-pager">pager alternative</a>.</p>

    <h2 id="pagination-default">Default pagination</h2>
    <p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
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
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>

    <h3>Disabled and active states</h3>
    <p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>
    <div class="bs-example">
        <?php
        $list = array(
            array('label' => '«', 'url' => '#','disabled' => true),
            array('label' => '1', 'url' => '#','active' => true),
            array('label' => '2', 'url' => '#'),
            array('label' => '3', 'url' => '#'),
            array('label' => '4', 'url' => '#'),
            array('label' => '5', 'url' => '#'),
            array('label' => '»', 'url' => '#'),
        );
        ?>
        <?php echo BSHtml::pagination($list); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>
    <p>You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code> to remove click functionality while retaining intended styles.</p>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;span&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;span&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>


    <h3>Sizing</h3>
    <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
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
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
                <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
                <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>


    <h2 id="pagination-pager">Pager</h2>
    <p>Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>

    <h3>Default example</h3>
    <p>By default, the pager centers links.</p>
    <div class="bs-example">
        <?php echo BSHtml::pager(array(
            array('label' => 'Previous', 'url' => '#'),
            array('label' => 'Next', 'url' => '#'),
        )); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>

    <h3>Aligned links</h3>
    <p>Alternatively, you can align each link to the sides:</p>
    <div class="bs-example">
        <?php echo BSHtml::pager(array(
            array('label' => '&larr; Older', 'url' => '#', 'previous' => true),
            array('label' => 'Newer &rarr;', 'url' => '#', 'next' => true),
        )); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="ni">&amp;rarr;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>


    <h3>Optional disabled state</h3>
    <p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
    <div class="bs-example">
        <?php echo BSHtml::pager(array(
                array('label' => '&larr; Older', 'url' => '#', 'previous' => true, 'disabled' => true),
                array('label' => 'Newer &rarr;', 'url' => '#', 'next' => true),
        )); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="ni">&amp;rarr;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>
</div>





