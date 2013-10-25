<!-- Progress bars
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="progress">Progress bars</h1>
</div>
<p class="lead">Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible
    progress bars.</p>

<div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>

    <p>Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not
        supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support
        animations.</p>
</div>

<h3 id="progress-basic">Basic example</h3>

<p>Default progress bar.</p>

<div class="bs-example">
    <?php echo BSHtml::progressBar(
        60
    ); ?>
</div>
<div class="highlight"><pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">progressBar</span><span class="pre_green">(</span><span
                    class="pre_blue">60</span><span class="pre_green">);<br></span><span
                    class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="progress-alternatives">Contextual alternatives</h3>

<p>Progress bars use some of the same button and alert classes for consistent styles.</p>

<div class="bs-example">
    <?php echo BSHtml::progressBar(
        20,
        array(
            'color' => BSHtml::PROGRESS_COLOR_SUCCESS
        )
    ); ?>
    <?php echo BSHtml::progressBar(
        40,
        array(
            'color' => BSHtml::PROGRESS_COLOR_INFO
        )
    ); ?>
    <?php echo BSHtml::progressBar(
        60,
        array(
            'color' => BSHtml::PROGRESS_COLOR_WARNING
        )
    ); ?>
    <?php echo BSHtml::progressBar(
        80,
        array(
            'color' => BSHtml::PROGRESS_COLOR_DANGER
        )
    ); ?>
</div>
<div class="highlight"><pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">progressBar</span><span class="pre_green">(</span><span
                    class="pre_blue">20</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">PROGRESS_COLOR_SUCCESS<br></span><span
                    class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">progressBar</span><span
                    class="pre_green">(</span><span class="pre_blue">40</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span style="color: #DD0000;">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">PROGRESS_COLOR_INFO<br></span><span
                    class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">progressBar</span><span
                    class="pre_green">(</span><span class="pre_blue">60</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span style="color: #DD0000;">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span
                    class="pre_blue">PROGRESS_COLOR_WARNING<br></span><span
                    class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">progressBar</span><span
                    class="pre_green">(</span><span class="pre_blue">80</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span style="color: #DD0000;">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">PROGRESS_COLOR_DANGER<br></span><span
                    class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="progress-striped">Striped</h3>

<p>Uses a gradient to create a striped effect. Not available in IE8.</p>

<div class="bs-example">
    <?php echo BSHtml::progressBar(
        20,
        array(
            'color' => BSHtml::PROGRESS_COLOR_SUCCESS,
            'striped' => true
        )
    ); ?>
    <?php echo BSHtml::progressBar(
        40,
        array(
            'color' => BSHtml::PROGRESS_COLOR_INFO,
            'striped' => true
        )
    ); ?>
    <?php echo BSHtml::progressBar(
        60,
        array(
            'color' => BSHtml::PROGRESS_COLOR_WARNING,
            'striped' => true
        )
    ); ?>
    <?php echo BSHtml::progressBar(
        80,
        array(
            'color' => BSHtml::PROGRESS_COLOR_DANGER,
            'striped' => true
        )
    ); ?>
</div>
<div class="highlight"><pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">progressBar</span><span class="pre_green">(</span><span
                    class="pre_blue">20</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">PROGRESS_COLOR_SUCCESS</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'striped'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br></span><span class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">progressBar</span><span
                    class="pre_green">(</span><span class="pre_blue">40</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span style="color: #DD0000;">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">PROGRESS_COLOR_INFO</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'striped'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br></span><span class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">progressBar</span><span
                    class="pre_green">(</span><span class="pre_blue">60</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span style="color: #DD0000;">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">PROGRESS_COLOR_WARNING</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'striped'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br></span><span class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">progressBar</span><span
                    class="pre_green">(</span><span class="pre_blue">80</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span style="color: #DD0000;">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">PROGRESS_COLOR_DANGER</span><span
                    class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'striped'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">true<br></span><span class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="progress-animated">Animated</h3>

<p>Add <code>.active</code> to <code>.progress-striped</code> to animate the stripes right to left. Not available in
    all versions of IE.</p>

<div class="bs-example">
    <?php echo BSHtml::progressBar(
        20,
        array(
            'striped' => true,
            'active' => true
        )
    ); ?>
</div>
<div class="highlight"><pre>
    <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
            class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
            class="pre_blue">progressBar</span><span
            class="pre_green">(</span><span class="pre_blue">20</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            style="color: #DD0000;">'striped'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_blue">true</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
            style="color: #DD0000;">'active'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_blue">true<br></span><span class="pre_green">));<br></span><span
            class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>

<h3 id="progress-stacked">Stacked</h3>

<p>Place multiple bars into the same <code>.progress</code> to stack them.</p>

<div class="bs-example">
    <?php echo BSHtml::stackedProgressBar(
        array(
            array('color' => BSHtml::PROGRESS_COLOR_SUCCESS, 'width' => 35),
            array('color' => BSHtml::PROGRESS_COLOR_WARNING, 'width' => 20),
            array('color' => BSHtml::PROGRESS_COLOR_DANGER, 'width' => 10),
        )
    ); ?>
</div>
<div class="highlight"><pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">stackedProgressBar</span><span class="pre_green">(array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">PROGRESS_COLOR_SUCCESS</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'width'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">35<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">PROGRESS_COLOR_WARNING</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'width'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">20<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">PROGRESS_COLOR_DANGER</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
                    style="color: #DD0000;">'width'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                    class="pre_blue">10<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_green">)<br>));<br></span><span class="pre_blue">?&gt;</span>
</span>
    </pre>
</div>
</div>
