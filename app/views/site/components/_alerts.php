<!-- Alerts
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="alerts">Alerts</h1>
    </div>
    <p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and
        flexible alert messages.</p>

    <h2 id="alerts-examples">Examples</h2>

    <p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g.,
        <code>.alert-success</code>) for basic alert messages.</p>

    <div class="bs-callout bs-callout-info">
        <h4>No default class</h4>

        <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much
            sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or
            danger.</p>
    </div>

    <div class="bs-example">
        <?php echo BsHtml::alert(BsHtml::ALERT_COLOR_SUCCESS, BsHtml::bold('Well done !') . 'You successfully read this important alert message.') ?>
        <?php echo BsHtml::alert(BsHtml::ALERT_COLOR_INFO, BsHtml::bold('Well done !') . 'You successfully read this important alert message.') ?>
        <?php echo BsHtml::alert(BsHtml::ALERT_COLOR_WARNING, BsHtml::bold('Well done !') . 'You successfully read this important alert message.') ?>
        <?php echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('Well done !') . 'You successfully read this important alert message.') ?>
    </div>
    <div class="highlight"><pre><span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">alert</span><span class="pre_green">(</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">ALERT_COLOR_SUCCESS</span><span
                    class="pre_green">,&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bold</span><span class="pre_green">(</span><span
                    class="pre_red">'Well&nbsp;done&nbsp;!'</span><span
                    class="pre_green">)&nbsp;.&nbsp;</span><span class="pre_red">'You&nbsp;successfully&nbsp;read&nbsp;this&nbsp;important&nbsp;alert&nbsp;message.'</span><span
                    class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">alert</span><span class="pre_green">(</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">ALERT_COLOR_INFO</span><span
                    class="pre_green">,&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bold</span><span class="pre_green">(</span><span
                    class="pre_red">'Well&nbsp;done&nbsp;!'</span><span
                    class="pre_green">)&nbsp;.&nbsp;</span><span class="pre_red">'You&nbsp;successfully&nbsp;read&nbsp;this&nbsp;important&nbsp;alert&nbsp;message.'</span><span
                    class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">alert</span><span class="pre_green">(</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">ALERT_COLOR_WARNING</span><span
                    class="pre_green">,&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bold</span><span class="pre_green">(</span><span
                    class="pre_red">'Well&nbsp;done&nbsp;!'</span><span
                    class="pre_green">)&nbsp;.&nbsp;</span><span class="pre_red">'You&nbsp;successfully&nbsp;read&nbsp;this&nbsp;important&nbsp;alert&nbsp;message.'</span><span
                    class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">alert</span><span class="pre_green">(</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">ALERT_COLOR_DANGER</span><span
                    class="pre_green">,&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bold</span><span class="pre_green">(</span><span
                    class="pre_red">'Well&nbsp;done&nbsp;!'</span><span
                    class="pre_green">)&nbsp;.&nbsp;</span><span class="pre_red">'You&nbsp;successfully&nbsp;read&nbsp;this&nbsp;important&nbsp;alert&nbsp;message.'</span><span
                    class="pre_green">);<br></span><span class="pre_blue">?&gt;</span>
</span></pre>
    </div>

    <h2 id="alerts-dismissable">Dismissable alerts</h2>

    <p>Build on any alert by adding an optional <code>.alert-dismissable</code> and close button.</p>

    <div class="bs-example">
        <?php echo BsHtml::alert(BsHtml::ALERT_COLOR_DEFAULT, BsHtml::bold('Well done !') . 'You successfully read this important alert message.') ?>
    </div>
    <div class="highlight"><pre><span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">alert</span><span class="pre_green">(</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">ALERT_COLOR_DEFAULT</span><span
                    class="pre_green">,&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bold</span><span class="pre_green">(</span><span
                    class="pre_red">'Well&nbsp;done&nbsp;!'</span><span
                    class="pre_green">)&nbsp;.&nbsp;</span><span class="pre_red">'You&nbsp;successfully&nbsp;read&nbsp;this&nbsp;important&nbsp;alert&nbsp;message.'</span><span
                    class="pre_green">);<br></span><span class="pre_blue">?&gt;</span>
</span></pre>
    </div>

    <div class="bs-callout bs-callout-warning">
        <h4>Ensure proper behavior across all devices</h4>

        <p>Be sure to use the <code>&lt;button&gt;</code> element with the <code>data-dismiss="alert"</code> data
            attribute.</p>
    </div>

    <h2 id="alerts-links">Links in alerts</h2>

    <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>

    <div class="bs-example">
        <?php echo BsHtml::alert(
            BsHtml::ALERT_COLOR_SUCCESS,
            BsHtml::bold('Well done !') . ' You successfully read' . BsHtml::alertLink(
                ' this important alert message.', array('#' => '')
            )
        ) ?>
    </div>
    <div class="highlight"><pre><span class="pre_black">
&nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">alert</span><span class="pre_green">(</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">ALERT_COLOR_SUCCESS</span><span
                    class="pre_green">,&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bold</span><span class="pre_green">(</span><span
                    class="pre_red">'Well&nbsp;done&nbsp;!'</span><span
                    class="pre_green">)&nbsp;.&nbsp;</span><span class="pre_red">'You&nbsp;successfully&nbsp;read'&nbsp;</span><span
                    class="pre_green">.&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">alertLink</span><span
                    class="pre_green">(</span><span class="pre_red">'&nbsp;this&nbsp;important&nbsp;alert&nbsp;message.'</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'#'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_red">''<br></span><span class="pre_green">)));<br></span><span class="pre_blue">?&gt;</span>
</span></pre>
    </div>
</div>