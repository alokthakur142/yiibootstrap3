<!-- Navbar
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="navbar">Navbar</h1>
</div>

<h2 id="navbar-default">Default navbar</h2>
<p>Navbars are responsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases.</p>

<div class="bs-callout bs-callout-info">
    <h4>Customize the collapsing point</h4>
    <p>Depending on the content in your navbar, you might need to change the point at which your navbar switches between collapsed and horizontal mode. Customize the <code>@grid-float-breakpoint</code> variable or add your own media query.</p>
</div>

<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'brandLabel' => BSHtml::icon(BSHtml::GLYPHICON_HOME),
            'brandUrl' => Yii::app()->homeUrl,
            'items'    => array(
                array(
                    'class' => 'bootstrap.widgets.BsNav',
                    'type'  => 'navbar',
                    'activateParents' => true,
                    'items' => array(
                        array(
                            'label' => 'Home', 'url' => array('/site/index'),
                            'items' => array(
                                BSHtml::menuHeader(BSHtml::icon(BSHtml::GLYPHICON_BOOKMARK),array('class' => 'text-center','style' => 'color:#99cc32;font-size:32px;')),
                                array('label' => 'Home', 'url' => array('/site/index')),
                                array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                                array('label' => 'Contact', 'url' => array('/site/contact')),
                                BSHtml::menuDivider(),
                                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest,'icon' => BSHtml::GLYPHICON_LOG_IN),
                                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'Home', 'url' => array('/site/index'),'icon' => BSHtml::GLYPHICON_HOME),
                                array('label' => 'About', 'url' => array('/site/page', 'view' => 'about'),'icon' => BSHtml::GLYPHICON_PAPERCLIP),
                                array('label' => 'Contact', 'url' => array('/site/contact'),'icon' => BSHtml::GLYPHICON_FLOPPY_OPEN),
                            ),
                        ),
                    ),
                ),
                array(
                    'class' => 'bootstrap.widgets.BsNav',
                    'type'  => 'navbar',
                    'activateParents' => true,
                    'items' => array(
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'),'pull' => BSHtml::NAVBAR_NAV_PULL_RIGHT, 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')','pull' => BSHtml::NAVBAR_NAV_PULL_RIGHT, 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                    'htmlOptions' => array(
                        'pull' =>BSHtml::NAVBAR_NAV_PULL_RIGHT
                    )
                )

            ),
        )
    ); ?>
</div>
<div class="highlight">
    <pre>
        <span class="pre_black">
            <span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
                class="pre_blue">widget</span><span class="pre_green">(</span><span
                class="pre_red">'bootstrap.widgets.BsNavbar'</span><span
                class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'collapse'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'brandLabel'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">icon</span><span class="pre_green">(</span><span class="pre_blue">BSHtml</span><span
                class="pre_green">::</span><span class="pre_blue">GLYPHICON_HOME</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'brandUrl'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">homeUrl</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'bootstrap.widgets.BsNav'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'navbar'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'activateParents'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/index'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">menuHeader</span><span class="pre_green">(</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">icon</span><span class="pre_green">(</span><span class="pre_blue">BSHtml</span><span
                class="pre_green">::</span><span class="pre_blue">GLYPHICON_BOOKMARK</span><span
                class="pre_green">),&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'text-center'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'style'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'color:#99cc32;font-size:32px;'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/index'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'About'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/page'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'view'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'about'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Contact'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/contact'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">menuDivider</span><span class="pre_green">(),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Login'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/login'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'visible'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">user</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">isGuest</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'icon'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">GLYPHICON_LOG_IN<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Logout&nbsp;('&nbsp;</span><span class="pre_green">.&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">user</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">name&nbsp;</span><span
                class="pre_green">.&nbsp;</span><span class="pre_red">')'</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/logout'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'visible'&nbsp;</span><span class="pre_green">=&gt;&nbsp;!</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">user</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">isGuest<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Home'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/index'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'icon'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">GLYPHICON_HOME<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'About'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/page'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'view'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'about'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'icon'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">GLYPHICON_PAPERCLIP<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Contact'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/contact'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'icon'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">GLYPHICON_FLOPPY_OPEN<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'class'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'bootstrap.widgets.BsNav'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'navbar'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'activateParents'&nbsp;</span><span
                class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'About'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/page'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'view'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'about'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Contact'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/contact'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Login'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/login'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'pull'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">NAVBAR_NAV_PULL_RIGHT</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'visible'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">user</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">isGuest<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_red">'Logout&nbsp;('&nbsp;</span><span class="pre_green">.&nbsp;</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">user</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">name&nbsp;</span><span
                class="pre_green">.&nbsp;</span><span class="pre_red">')'</span><span
                class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'pull'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">NAVBAR_NAV_PULL_RIGHT</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'/site/logout'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'visible'&nbsp;</span><span class="pre_green">=&gt;&nbsp;!</span><span
                class="pre_blue">Yii</span><span class="pre_green">::</span><span class="pre_blue">app</span><span
                class="pre_green">()-&gt;</span><span class="pre_blue">user</span><span
                class="pre_green">-&gt;</span><span class="pre_blue">isGuest<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'htmlOptions'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_red">'pull'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                class="pre_blue">NAVBAR_NAV_PULL_RIGHT<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                class="pre_green">)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;)<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp;)<br>));<br></span><span
                class="pre_blue">?&gt;</span>
        </span>
    </pre>
</div>

<div class="bs-callout bs-callout-danger">
    <h4>Plugin dependency</h4>
    <p>The responsive navbar requires the <a href="../javascript/#collapse">collapse plugin</a> to be included in your version of Bootstrap.</p>
</div>

<div class="bs-callout bs-callout-warning">
    <h4>Make navbars accessible</h4>
    <p>Be sure to add a <code>role="navigation"</code> to every navbar to help with accessibility.</p>
</div>


<h2 id="navbar-buttons">Buttons</h2>
<p>For buttons not residing in a <code>&lt;form&gt;</code>, add this class to vertically center buttons within a navbar.</p>
<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'brandLabel' => '',
            'brandUrl' => '',
            'items'    => array(
                BSHtml::linkButton('sign',array(
                        'icon' => BSHtml::GLYPHICON_BOOKMARK,
                        'url' => array('/site/index'),
                        'type' => BSHtml::BUTTON_TYPE_NAVBARBUTTON,
                        'color' => BSHtml::BUTTON_COLOR_INFO
                    )
                ),
                array(
                    'class' => 'bootstrap.widgets.BsNav',
                    'type'  => 'navbar',
                    'activateParents' => true,
                    'items' => array(
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                    'htmlOptions' => array(
                        'pull' =>BSHtml::NAVBAR_NAV_PULL_RIGHT
                    )
                )
            ),
        )
    ); ?>
</div>
<div class="highlight">
    <pre>
    <span class="pre_black">
        <span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
            class="pre_blue">widget</span><span class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsNavbar'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'collapse'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_blue">true</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'brandLabel'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_red">''</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'brandUrl'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_red">''</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'items'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">linkButton</span><span
            class="pre_green">(</span><span class="pre_red">'sign'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'icon'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">GLYPHICON_BOOKMARK</span><span
            class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="pre_red">'url'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_red">'/site/index'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="pre_red">'type'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span
            class="pre_green">::</span><span class="pre_blue">BUTTON_TYPE_NAVBARBUTTON<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
            class="pre_green">))<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp;)<br>));<br></span><span
            class="pre_blue">?&gt;</span>
    </span>    
</pre></div>


<h2 id="navbar-text">Text</h2>
<p>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p&gt;</code> tag for proper leading and color.</p>
<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'brandLabel' => 'Home',
            'items'    => array(
                BSHtml::menuText('Signed in as Mark Otto'),
            ),
        )
    ); ?>
</div>
<div class="highlight">
    <?= BSHtml::codeBlock("'items'    => array(
                BSHtml::menuText('Signed in as Mark Otto'),
            ),")
    ?>
</div>


<h2 id="navbar-links">Non-nav links</h2>
<p>For folks using standard links that are not within the regular navbar navigation component, use the <code>.navbar-link</code> class to add the proper colors for the default and inverse navbar options.</p>
<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'brandLabel' => 'Home',
            'items'    => array(
                BSHtml::menuText(
                    'Signed in as '.BSHtml::link(
                        'Mark Otto',
                        array('site/user','id' => Yii::app()->user->id),
                        array('class' => 'navbar-link')
                    ),
                    array('pull' => BSHtml::NAVBAR_NAV_PULL_RIGHT)
                ),
            ),
        )
    ); ?>
</div>
<div class="highlight">
    <?= BSHtml::codeBlock("'items'    => array(
                BSHtml::menuText(
                    'Signed in as '.BSHtml::link(
                        'Mark Otto',
                        array('site/user','id' => Yii::app()->user->id),
                        array('class' => 'navbar-link')
                    ),
                    array('pull' => BSHtml::NAVBAR_NAV_PULL_RIGHT)
                ),
            ),")
    ?>
</div>


<h2 id="navbar-component-alignment">Component alignment</h2>
<p>Align nav links, forms, buttons, or text, using the <code>.navbar-left</code> or <code>.navbar-right</code> utility classes. Both classes will add a CSS float in the specified direction. For example, to align nav links, put them in a separate <code>&lt;ul&gt;</code> with the respective utility class applied.</p>
<p>These classes are mixin-ed versions of <code>.pull-left</code> and <code>.pull-right</code>, but they're scoped to media queries for easier handling of navbar components across device sizes.</p>


<h2 id="navbar-fixed-top">Fixed to top</h2>
<p>Add <code>.navbar-fixed-top</code>.</p>
<div class="bs-example bs-navbar-top-example">
    <?php $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'position' => BSHtml::NAVBAR_POSITION_FIXED_TOP,
            'brandLabel' => 'Home',
            'htmlOptions' => array(
                'containerOptions' => array(
                    'fluid' => true
                ),
            ),
            'items'    => array(
                array(
                    'class' => 'bootstrap.widgets.BsNav',
                    'type'  => 'navbar',
                    'activateParents' => true,
                    'items' => array(
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about'),'active' => true),
                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                )
            ),
        )
    ); ?>
</div><!-- /example -->
<div class="highlight">
    <?= BSHtml::codeBlock("'position' => BSHtml::NAVBAR_POSITION_FIXED_TOP") ?>
    <?= BSHtml::codeBlock(
        "'htmlOptions' => array(
        'containerOptions' => array(
            'fluid' => true
        ),
    ),"
    ) ?>
</div>

<div class="bs-callout bs-callout-danger">
    <h4>Body padding required</h4>
    <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the top of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>
    <div class="highlight"><pre><code class="css"><span class="nt">body</span> <span class="p">{</span> <span class="k">padding-top</span><span class="o">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span>
            </code></pre></div>
    <p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
</div>


<h2 id="navbar-fixed-bottom">Fixed to bottom</h2>
<p>Add <code>.navbar-fixed-bottom</code> instead.</p>
<div class="bs-example bs-navbar-bottom-example">
    <?php $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'position' => BSHtml::NAVBAR_POSITION_FIXED_BOTTOM,
            'brandLabel' => 'Home',
            'items'    => array(
                array(
                    'class' => 'bootstrap.widgets.BsNav',
                    'type'  => 'navbar',
                    'activateParents' => true,
                    'items' => array(
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about'),'active' => true),
                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                )
            ),
        )
    ); ?>
</div><!-- /example -->
<div class="highlight">
    <?= BSHtml::codeBlock("'position' => BSHtml::NAVBAR_POSITION_FIXED_BOTTOM") ?>
</div>

<div class="bs-callout bs-callout-danger">
    <h4>Body padding required</h4>
    <p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the bottom of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>
    <div class="highlight">
        <pre><code class="css"><span class="nt">body</span> <span class="p">{</span> <span class="k">padding-bottom</span><span class="o">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span>
            </code></pre>
    </div>
    <p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
</div>


<h2 id="navbar-static-top">Static top</h2>
<p>Create a full-width navbar that scrolls away with the page by adding <code>.navbar-static-top</code>. Unlike the <code>.navbar-fixed-*</code> classes, you do not need to change any padding on the <code>body</code>.</p>
<div class="bs-example bs-navbar-top-example">
    <?php $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'position' => BSHtml::NAVBAR_POSITION_STATIC_TOP,
            'brandLabel' => 'Home',
            'items'    => array(
                array(
                    'class' => 'bootstrap.widgets.BsNav',
                    'type'  => 'navbar',
                    'activateParents' => true,
                    'items' => array(
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about'),'active' => true),
                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                )
            ),
        )
    ); ?>
</div><!-- /example -->
<div class="highlight">
    <?= BSHtml::codeBlock("'position' => BSHtml::NAVBAR_POSITION_STATIC_TOP") ?>
</div>


<h2 id="navbar-inverted">Inverted navbar</h2>
<p>Modify the look of the navbar by adding <code>.navbar-inverse</code>.</p>
<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'color' => BSHtml::NAVBAR_COLOR_INVERSE,
            'brandLabel' => 'Home',
            'items'    => array(
                array(
                    'class' => 'bootstrap.widgets.BsNav',
                    'type'  => 'navbar',
                    'activateParents' => true,
                    'items' => array(
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about'),'active' => true),
                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                )
            ),
        )
    ); ?>
</div><!-- /example -->
<div class="highlight">
    <?= BSHtml::codeBlock("'color' => BSHtml::NAVBAR_COLOR_INVERSE") ?>
</div>

</div>
