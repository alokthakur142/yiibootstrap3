<!-- Labels
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="labels">Labels</h1>
    </div>
    <p class="lead"></p>

    <h3>Example</h3>
    <div class="bs-example">
        <h1>Example heading <?php echo BSHtml::bsLabel('New') ?></h1>
        <h2>Example heading <?php echo BSHtml::bsLabel('New') ?></h2>
        <h3>Example heading <?php echo BSHtml::bsLabel('New') ?></h3>
        <h4>Example heading <?php echo BSHtml::bsLabel('New') ?></h4>
        <h5>Example heading <?php echo BSHtml::bsLabel('New') ?></h5>
        <h6>Example heading <?php echo BSHtml::bsLabel('New') ?></h6>
    </div>
    <div class="highlight">
        <pre>
            <span style="color: #000000">
                    &lt;h3&gt;<br>Example&nbsp;heading&nbsp;<br><span style="color: #0000BB">&lt;?php<br></span><span
                    style="color: #007700;">echo&nbsp;</span><span style="color: #0000BB;">BSHtml</span><span
                    style="color: #007700;">::</span><span style="color: #0000BB;">labelTb</span><span
                    style="color: #007700;">(</span><span style="color: #DD0000;">'New'</span><span
                    style="color: #007700;">);<br></span><span
                    style="color: #0000BB;">?&gt;<br></span>&lt;/h3&gt;
            </span>
        </pre>
    </div>
    <h3>Available variations</h3>
    <p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>
    <div class="bs-example">
        <?php echo BSHtml::bsLabel('Default') ?>
        <?php echo BSHtml::bsLabel('Primary',array('color' => BSHtml::LABEL_COLOR_PRIMARY)) ?>
        <?php echo BSHtml::bsLabel('Success',array('color' => BSHtml::LABEL_COLOR_SUCCESS)) ?>
        <?php echo BSHtml::bsLabel('Info',array('color' => BSHtml::LABEL_COLOR_INFO)) ?>
        <?php echo BSHtml::bsLabel('Warning',array('color' => BSHtml::LABEL_COLOR_WARNING)) ?>
        <?php echo BSHtml::bsLabel('Danger',array('color' => BSHtml::LABEL_COLOR_DANGER)) ?>
    </div>
    <div class="highlight">
        <pre></pre>
    </div>
</div>