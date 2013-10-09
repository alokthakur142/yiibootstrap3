<!-- Dropdowns
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="dropdowns">Dropdowns</h1>
    </div>
    <p class="lead">Toggleable, contextual menu for displaying lists of links. Made interactive with the <a href="../javascript/#dropdowns">dropdown JavaScript plugin</a>.</p>

    <h3 id="dropdowns-example">Example</h3>
    <p>Wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then add the menu's HTML.</p>
    <div class="bs-example">
        <?php echo BSHtml::buttonDropdown(
            'Dropdown',
            array(
                array('label' => 'Action', 'url' => '#'),
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Something else here', 'url' => '#'),
                BSHtml::menuDivider(),
                array('label' => 'Separate link', 'url' => '#'),
            )
            ,array(
                'split' => true,
                'size' => BSHtml::BUTTON_SIZE_SMALL,
                'color' =>BSHtml::BUTTON_COLOR_INFO
            )
        );?>
    </div><!-- /example -->
    <div class="highlight">
        <pre class="linenums prettyprint">
            &lt;?php echo BSHtml::buttonDropdown(
                'Dropdown',
                array(
                    array('label' => 'Action', 'url' => '#'),
                    array('label' => 'Another action', 'url' => '#'),
                    array('label' => 'Something else here', 'url' => '#'),
                    BSHtml::menuDivider(),
                    array('label' => 'Separate link', 'url' => '#'),
                )
                ,array(
                    'split' => true,
                    'size' => BSHtml::BUTTON_SIZE_SMALL,
                    'color' =>BSHtml::BUTTON_COLOR_INFO
                )
            );?&gt;
        </pre>
    </div>

    <h3 id="dropdowns-alignment">Aligninment options</h3>
    <p>Add <code>.pull-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</p>
    <div class="highlight">
        <pre class="linenums prettyprint">
            array(
                'split' => true,
                'size' => BSHtml::BUTTON_SIZE_SMALL,
                'color' =>BSHtml::BUTTON_COLOR_INFO,
                'split' => true,
                'dropup' => true,
                'menuOptions' => array('pull' => BSHtml::PULL_RIGHT),
            )
        </pre>
    </div>

    <h3 id="dropdowns-headers">Headers</h3>
    <p>Add a header to label sections of actions in any dropdown menu.</p>
    <div class="bs-example">
        <?php echo BSHtml::buttonDropdown(
            'Dropdown',
            array(
                BSHtml::dropDownHeader('Dropdown Header'),
                array('label' => 'Action', 'url' => '#'),
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Something else here', 'url' => '#'),
                BSHtml::menuDivider(),
                BSHtml::dropDownHeader('Dropdown Header'),
                array('label' => 'Separate link', 'url' => '#'),
            )
            ,array(
                'split' => false,
                'size' => BSHtml::BUTTON_SIZE_SMALL,
                'color' =>BSHtml::BUTTON_COLOR_INFO,

            )
        );?>
    </div><!-- /example -->
    <div class="highlight"><pre class="linenums prettyprint">
            &lt;?php echo BSHtml::buttonDropdown(
                'Dropdown',
                array(
                    BSHtml::dropDownHeader('Dropdown Header'),
                    array('label' => 'Action', 'url' => '#'),
                    array('label' => 'Another action', 'url' => '#'),
                    array('label' => 'Something else here', 'url' => '#'),
                    BSHtml::menuDivider(),
                    BSHtml::dropDownHeader('Dropdown Header'),
                    array('label' => 'Separate link', 'url' => '#'),
                )
                ,array(
                    'split' => true,
                    'size' => BSHtml::BUTTON_SIZE_SMALL,
                    'color' =>BSHtml::BUTTON_COLOR_INFO,
                    'split' => true,
                    'dropup' => true,
                    'menuOptions' => array('pull' => BSHtml::PULL_RIGHT),
                )
            );?&gt;
        </pre>
    </div>

    <h3 id="dropdowns-disabled">Disabled menu items</h3>
    <p>Add <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.</p>
    <div class="bs-example">
        <?php echo BSHtml::buttonDropdown(
            'Dropdown',
            array(
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Action', 'url' => '#','disabled' => true),
                array('label' => 'Another action', 'url' => '#'),
            )
            ,
            array(
                'split' => true,
                'size' => BSHtml::BUTTON_SIZE_SMALL,
                'color' =>BSHtml::BUTTON_COLOR_WARNING
            )
        );?>
    </div><!-- /example -->
    <div class="highlight"><pre class="linenums prettyprint">
            &lt;?php echo BSHtml::buttonDropdown(
                'Dropdown',
                array(
                    array('label' => 'Another action', 'url' => '#'),
                    array('label' => 'Action', 'url' => '#','disabled' => true),
                    array('label' => 'Another action', 'url' => '#'),
                )
                ,
                array(
                    'split' => true,
                    'size' => BSHtml::BUTTON_SIZE_SMALL,
                    'color' =>BSHtml::BUTTON_COLOR_WARNING
                )
            );?&gt;
        </pre>
    </div>
</div>