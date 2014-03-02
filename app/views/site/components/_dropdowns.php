<!-- Dropdowns
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="dropdowns">Dropdowns</h1>
    </div>
    <p class="lead">Toggleable, contextual menu for displaying lists of links. Made interactive with the <a
            href="../javascript/#dropdowns">dropdown JavaScript plugin</a>.</p>

    <h3 id="dropdowns-example">Example</h3>

    <p>Wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares
        <code>position: relative;</code>. Then add the menu's HTML.</p>

    <div class="bs-example">
        <?php echo BsHtml::buttonDropdown(
            'Dropdown',
            array(
                array('label' => 'Action', 'url' => '#'),
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Something else here', 'url' => '#'),
                BsHtml::menuDivider(),
                array('label' => 'Separate link', 'url' => '#'),
            )
            , array(
                'split' => true,
                'size' => BsHtml::BUTTON_SIZE_SMALL,
                'color' => BsHtml::BUTTON_COLOR_INFO
            )
        );?>
    </div>
    <!-- /example -->
    <div class="highlight">
        <pre >
           <span class="pre_black">
&nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                   class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                   class="pre_blue">buttonDropdown</span><span class="pre_green">(</span><span
                   class="pre_red">'Dropdown'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'Action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'Another&nbsp;action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'Something&nbsp;else&nbsp;here'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
                   class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                   class="pre_blue">menuDivider</span><span class="pre_green">(),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'Separate&nbsp;link'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                   class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                   class="pre_red">'split'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_blue">true</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                   class="pre_red">'size'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                   class="pre_blue">BUTTON_SIZE_SMALL</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                   class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                   class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                   class="pre_blue">BUTTON_COLOR_INFO<br></span><span class="pre_green">));<br></span><span
                   class="pre_blue">?&gt;</span>
</span>
        </pre>
    </div>

    <h3 id="dropdowns-alignment">Aligninment options</h3>

    <p>Add <code>.pull-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</p>

    <div class="highlight">
        <pre >
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'split'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'size'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">BUTTON_SIZE_SMALL</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">BUTTON_COLOR_INFO</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'split'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'dropup'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'menuOptions'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'pull'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">PULL_RIGHT<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>);<br></span><span
                    class="pre_blue">?&gt;</span>
</span>
        </pre>
    </div>

    <h3 id="dropdowns-headers">Headers</h3>

    <p>Add a header to label sections of actions in any dropdown menu.</p>

    <div class="bs-example">
        <?php echo BsHtml::buttonDropdown(
            'Dropdown',
            array(
                BsHtml::dropDownHeader('Dropdown Header'),
                array('label' => 'Action', 'url' => '#'),
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Something else here', 'url' => '#'),
                BsHtml::menuDivider(),
                BsHtml::dropDownHeader('Dropdown Header'),
                array('label' => 'Separate link', 'url' => '#'),
            )
        );?>
    </div>
    <!-- /example -->
    <div class="highlight"><pre >
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">buttonDropdown</span><span class="pre_green">(</span><span
                    class="pre_red">'Dropdown'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">dropDownHeader</span><span class="pre_green">(</span><span
                    class="pre_red">'Dropdown&nbsp;Header'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Another&nbsp;action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Something&nbsp;else&nbsp;here'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">menuDivider</span><span
                    class="pre_green">(),<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">dropDownHeader</span><span
                    class="pre_green">(</span><span class="pre_red">'Dropdown&nbsp;Header'</span><span
                    class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Separate&nbsp;link'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>));<br></span><span
                    class="pre_blue">?&gt;</span>
</span>
        </pre>
    </div>

    <h3 id="dropdowns-disabled">Disabled menu items</h3>

    <p>Add <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.</p>

    <div class="bs-example">
        <?php echo BsHtml::buttonDropdown(
            'Dropdown',
            array(
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Action', 'url' => '#', 'disabled' => true),
                array('label' => 'Another action', 'url' => '#'),
            )
            ,
            array(
                'split' => true,
                'size' => BsHtml::BUTTON_SIZE_SMALL,
                'color' => BsHtml::BUTTON_COLOR_WARNING
            )
        );?>
    </div>
    <!-- /example -->
    <div class="highlight"><pre >
            <span class="pre_black">
&nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">buttonDropdown</span><span class="pre_green">(</span><span
                    class="pre_red">'Dropdown'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Another&nbsp;action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'disabled'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Another&nbsp;action'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'split'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'size'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">BUTTON_SIZE_SMALL</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">BUTTON_COLOR_WARNING<br></span><span
                    class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
</span>
        </pre>
    </div>
</div>