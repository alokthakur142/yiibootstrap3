
<!-- Navs
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="nav">Navs</h1>
    </div>

    <p class="lead">Navs available in Bootstrap have shared markup, starting with the base <code>.nav</code> class, as well as shared states. Swap modifier classes to switch between each style.</p>

    <h2 id="nav-tabs">Tabs</h2>
    <p>Note the <code>.nav-tabs</code> class requires the <code>.nav</code> base class.</p>
    <div class="bs-example">
        <?php echo BSHtml::tabs(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#',),
            array('label' => 'Messages', 'url' => '#',),
        )); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>

    <h2 id="nav-pills">Pills</h2>
    <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>
    <div class="bs-example">
        <?php echo BSHtml::pills(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#',),
            array('label' => 'Messages', 'url' => '#',),
        )); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>
    <p>Pills are also vertically stackable. Just add <code>.nav-stacked</code>.</p>
    <div class="bs-example">
        <?php echo BSHtml::stackedPills(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#'),
            array('label' => 'Messages', 'url' => '#')
        ),array('style' => 'max-width:300px')); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-stacked"</span><span class="nt">&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>


    <h2 id="nav-justified">Justified</h2>
    <p>Easily make tabs or pills equal widths of their parent with <code>.nav-justified</code>.</p>
    <div class="bs-example">
        <?php echo BSHtml::tabs(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#',),
            array('label' => 'Messages', 'url' => '#',),
        ),array('justified' => true)); ?>
        <br>
        <?php echo BSHtml::pills(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#',),
            array('label' => 'Messages', 'url' => '#',),
        ),array('justified' => true)); ?>

    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs nav-justified"</span><span class="nt">&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
                <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-justified"</span><span class="nt">&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>


    <h2 id="nav-disabled-links">Disabled links</h2>
    <p>For any nav component (tabs, pills, or list), add <code>.disabled</code> for <strong>gray links and no hover effects</strong>.</p>

    <div class="bs-callout bs-callout-warning">
        <h4>Link functionality not impacted</h4>
        <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom JavaScript to disable links here.</p>
    </div>

    <div class="bs-example">
        <ul class="nav nav-pills">
            <li><a href="#">Clickable link</a></li>
            <li><a href="#">Clickable link</a></li>
            <li class="disabled"><a href="#">Disabled link</a></li>
        </ul>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
                ...
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>


    <h2 id="nav-dropdowns">Using dropdowns</h2>
    <p>Add dropdown menus with a little extra HTML and the <a href="../javascript/#dropdowns">dropdowns JavaScript plugin</a>.</p>

    <h3>Tabs with dropdowns</h3>
    <div class="bs-example">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Help</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
                ...
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
                <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>

    <h3>Pills with dropdowns</h3>
    <div class="bs-example">
        <ul class="nav nav-pills">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Help</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /example -->
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
                ...
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
                <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                ...
                <span class="nt">&lt;/ul&gt;</span>
            </code></pre></div>

</div>
