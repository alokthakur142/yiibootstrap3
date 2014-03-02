<!-- Labels
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="labels">Labels</h1>
    </div>
    <p class="lead"></p>

    <h3>Example</h3>

    <div class="bs-example">
        <h1>Example heading <?php echo BsHtml::bsLabel('New') ?></h1>

        <h2>Example heading <?php echo BsHtml::bsLabel('New') ?></h2>

        <h3>Example heading <?php echo BsHtml::bsLabel('New') ?></h3>
        <h4>Example heading <?php echo BsHtml::bsLabel('New') ?></h4>
        <h5>Example heading <?php echo BsHtml::bsLabel('New') ?></h5>
        <h6>Example heading <?php echo BsHtml::bsLabel('New') ?></h6>
    </div>
    <div class="highlight">
        <pre>
            <span class="pre_black">
                    &lt;h3&gt;<br>Example&nbsp;heading&nbsp;<br><span class="pre_blue">&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">labelTb</span><span
                    class="pre_green">(</span><span class="pre_red">'New'</span><span
                    class="pre_green">);<br></span><span
                    class="pre_blue">?&gt;<br></span>&lt;/h3&gt;
            </span>
        </pre>
    </div>
    <h3>Available variations</h3>

    <p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>

    <div class="bs-example">
        <?php echo BsHtml::bsLabel('Default') ?>
        <?php echo BsHtml::bsLabel('Primary', array('color' => BsHtml::LABEL_COLOR_PRIMARY)) ?>
        <?php echo BsHtml::bsLabel('Success', array('color' => BsHtml::LABEL_COLOR_SUCCESS)) ?>
        <?php echo BsHtml::bsLabel('Info', array('color' => BsHtml::LABEL_COLOR_INFO)) ?>
        <?php echo BsHtml::bsLabel('Warning', array('color' => BsHtml::LABEL_COLOR_WARNING)) ?>
        <?php echo BsHtml::bsLabel('Danger', array('color' => BsHtml::LABEL_COLOR_DANGER)) ?>
    </div>
    <div class="highlight">
        <pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">bsLabel</span><span class="pre_green">(</span><span
                    class="pre_red">'Default'</span><span class="pre_green">);<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bsLabel</span><span
                    class="pre_green">(</span><span class="pre_red">'Primary'</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">LABEL_COLOR_PRIMARY<br></span><span
                    class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bsLabel</span><span
                    class="pre_green">(</span><span class="pre_red">'Success'</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">LABEL_COLOR_SUCCESS<br></span><span
                    class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bsLabel</span><span
                    class="pre_green">(</span><span class="pre_red">'Info'</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">LABEL_COLOR_INFO<br></span><span
                    class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bsLabel</span><span
                    class="pre_green">(</span><span class="pre_red">'Warning'</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">LABEL_COLOR_WARNING<br></span><span
                    class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;<br>&lt;?php<br></span><span
                    class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">bsLabel</span><span
                    class="pre_green">(</span><span class="pre_red">'Danger'</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">LABEL_COLOR_DANGER<br></span><span
                    class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
</span>
        </pre>
    </div>
</div>