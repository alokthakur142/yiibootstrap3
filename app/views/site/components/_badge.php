<!-- Badges
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="badges">Badges</h1>
    </div>
    <p class="lead">Easily highlight new or unread items by adding a <code>&lt;span class="badge"&gt;</code> to links,
        Bootstrap navs, and more.</p>

    <div class="bs-example">
        <?= BSHtml::link('Inbox ' . BSHtml::badge(42)) ?>
    </div>
    <div class="highlight">
        <pre><span class="pre_black">
<span class="pre_blue">&lt;?=&nbsp;BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">link</span><span class="pre_green">(</span><span
                    class="pre_red">'Inbox&nbsp;'&nbsp;</span><span class="pre_green">.&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">badge</span><span class="pre_green">(</span><span
                    class="pre_blue">42</span><span class="pre_green">))&nbsp;</span><span
                    class="pre_blue">?&gt;</span>
</span></pre>
    </div>

    <h4>Self collapsing</h4>

    <p>When there are no new or unread items, badges will simply collapse (via CSS's <code>:empty</code> selector)
        provided no content exists within.</p>

    <div class="bs-callout bs-callout-danger">
        <h4>Cross-browser compatibility</h4>

        <p>Badges won't self collapse in Internet Explorer 8 because it lacks support for the <code>:empty</code>
            selector.</p>
    </div>

    <h4>Adapts to active nav states</h4>

    <p>Built-in styles are included for placing badges in active states in pill and list navigations.</p>

    <div class="bs-example">
        <p>
            <?php
            echo BSHtml::pills(array(
                array(
                    'label' => 'Home ' . BSHtml::badge('23'),
                    'url' => '#',
                    'active' => true
                ),
                array(
                    'label' => 'Profile',
                    'url' => '#'
                ),
                array(
                    'label' => BSHtml::badge('56', array('pull' => BSHtml::PULL_RIGHT)) . ' Messages',
                    'url' => '#'
                )
            ));
            ?>
        </p>

        <p>
            <?php
            echo BSHtml::stackedPills(array(
                array(
                    'label' => 'Home ' . BSHtml::badge('23'),
                    'url' => '#',
                    'active' => true
                ),
                array(
                    'label' => 'Profile',
                    'url' => '#'
                ),
                array(
                    'label' => BSHtml::badge('56', array('pull' => BSHtml::PULL_RIGHT)) . ' Messages',
                    'url' => '#'
                )
            ), array(
                'style' => 'max-width:300px'
            ));
            ?>
        </p>
    </div>
    <div class="highlight">
        <pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">pills</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Home&nbsp;'&nbsp;</span><span class="pre_green">.&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">badge</span><span class="pre_green">(</span><span
                    class="pre_red">'23'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Profile'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">badge</span><span class="pre_green">(</span><span
                    class="pre_red">'56'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'pull'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">PULL_RIGHT<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">))&nbsp;.&nbsp;</span><span
                    class="pre_red">'&nbsp;Messages'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">stackedPills</span><span
                    class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Home&nbsp;'&nbsp;</span><span class="pre_green">.&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">badge</span><span class="pre_green">(</span><span
                    class="pre_red">'23'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'Profile'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'label'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">badge</span><span class="pre_green">(</span><span
                    class="pre_red">'56'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'pull'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">PULL_RIGHT<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_green">))&nbsp;.&nbsp;</span><span
                    class="pre_red">'&nbsp;Messages'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    class="pre_red">'url'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'#'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>),&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'style'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">'max-width:300px'<br></span><span
                    class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span> &nbsp; &nbsp; &nbsp; &nbsp;</span>
        </pre>
    </div>
</div>