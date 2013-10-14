<!-- Navs
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="nav">Navs</h1>
    </div>

    <p class="lead">Navs available in Bootstrap have shared markup, starting with the base <code>.nav</code> class, as
        well as shared states. Swap modifier classes to switch between each style.</p>

    <h2 id="nav-tabs">Tabs</h2>

    <p>Note the <code>.nav-tabs</code> class requires the <code>.nav</code> base class.</p>

    <div class="bs-example">
        <?php echo BSHtml::tabs(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#',),
            array('label' => 'Messages', 'url' => '#',),
        )); ?>
    </div>
    <div class="highlight">
        <pre>
        <span class="pre_black">
            <span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">tabs</span><span
                class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span class="pre_red">'active'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Profile'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Messages'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;</span>
        </span>
        </pre>
    </div>

    <h2 id="nav-pills">Pills</h2>

    <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>

    <div class="bs-example">
        <?php echo BSHtml::pills(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#',),
            array('label' => 'Messages', 'url' => '#',),
        )); ?>
    </div>
    <div class="highlight">
        <pre>
            <span class="pre_black">
                <span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">pills</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Profile'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Messages'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>));<br></span><span
                    class="pre_blue">?&gt;</span>
            </span>
        </pre>
    </div>
    <p>Pills are also vertically stackable. Just add <code>.nav-stacked</code>.</p>

    <div class="bs-example">
        <?php echo BSHtml::stackedPills(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#'),
            array('label' => 'Messages', 'url' => '#')
        ), array('style' => 'max-width:300px')); ?>
    </div>
    <div class="highlight">
        <pre>
            <span class="pre_black">
                <span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">stackedPills</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Profile'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Messages'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'style'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'max-width:300px'<br></span><span
                    class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
            </span>
        </pre>
    </div>


    <h2 id="nav-justified">Justified</h2>

    <p>Easily make tabs or pills equal widths of their parent with <code>.nav-justified</code>.</p>

    <div class="bs-example">
        <?php echo BSHtml::tabs(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#',),
            array('label' => 'Messages', 'url' => '#',),
        ), array('justified' => true)); ?>
        <br>
        <?php echo BSHtml::pills(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#',),
            array('label' => 'Messages', 'url' => '#',),
        ), array('justified' => true)); ?>

    </div>
    <div class="highlight">
        <pre>
            <span class="pre_black">
                <span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">tabs</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Profile'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Messages'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'justified'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true<br></span><span
                    class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">pills</span><span
                    class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Profile'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Messages'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'justified'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true<br></span><span
                    class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
            </span>
        </pre>
    </div>


    <h2 id="nav-disabled-links">Disabled links</h2>

    <p>For any nav component (tabs, pills, or list), add <code>.disabled</code> for <strong>gray links and no hover
            effects</strong>.</p>

    <div class="bs-callout bs-callout-warning">
        <h4>Link functionality not impacted</h4>

        <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom
            JavaScript to disable links here.</p>
    </div>

    <div class="bs-example">
        <?php echo BSHtml::pills(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Profile', 'url' => '#',),
            array('label' => 'Messages', 'url' => '#', 'disabled' => true),
        ), array('justified' => true)); ?>
    </div>
    <div class="highlight"><pre>
            <span class="pre_black">
&nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">pills</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Profile'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Messages'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'disabled'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'justified'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true<br></span><span
                    class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
</span>
    </pre>
    </div>


    <h2 id="nav-dropdowns">Using dropdowns</h2>

    <p>Add dropdown menus with a little extra HTML and the <a href="../javascript/#dropdowns">dropdowns JavaScript
            plugin</a>.</p>

    <h3>Tabs with dropdowns</h3>

    <div class="bs-example">
        <?php echo BSHtml::tabs(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Help', 'url' => '#'),
            array('label' => 'Dropdown', 'items' => array(
                array('label' => 'Action', 'url' => '#'),
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Something else here', 'url' => '#'),
                BSHtml::menuDivider(),
                array('label' => 'Separate link', 'url' => '#'),
            )),
        )); ?>
    </div>
    <div class="highlight"><pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">tabs</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Help'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Dropdown'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Another&nbsp;action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Something&nbsp;else&nbsp;here'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">menuDivider</span><span class="pre_green">(),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Separate&nbsp;link'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;)<br>));<br></span><span
                    class="pre_blue">?&gt;</span>
</span>
    </pre>
    </div>

    <h3>Pills with dropdowns</h3>

    <div class="bs-example">
        <?php echo BSHtml::pills(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Help', 'url' => '#'),
            array('label' => 'Dropdown', 'items' => array(
                array('label' => 'Action', 'url' => '#'),
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Something else here', 'url' => '#'),
                BSHtml::menuDivider(),
                array('label' => 'Separate link', 'url' => '#'),
            )),
        )); ?>
    </div>
    <!-- /example -->
    <div class="highlight"><pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">pills</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Help'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Dropdown'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Another&nbsp;action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Something&nbsp;else&nbsp;here'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">menuDivider</span><span class="pre_green">(),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Separate&nbsp;link'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp;)<br>));<br></span><span
                    class="pre_blue">?&gt;</span>
</span>
    </pre>
    </div>

</div>
