<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="images">Images</h1>
    </div>

    <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>

    <div class="bs-callout bs-callout-danger">
        <h4>Cross-browser compatibility</h4>

        <p>Keep in mind that Internet Explorer 8 lacks support for rounded corners.</p>
    </div>
    <div class="bs-example bs-example-images">
        <?php echo BSHtml::imageRounded('holder.js/140x140'); ?>
        <?php echo BSHtml::imageCircle('holder.js/140x140'); ?>
        <?php echo BSHtml::imageThumbnail('holder.js/140x140'); ?>
    </div>
    <div class="highlight"><pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">imageRounded</span><span class="pre_green">(</span><span class="pre_red">'holder.js/140x140'</span><span class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">imageCircle</span><span class="pre_green">(</span><span class="pre_red">'holder.js/140x140'</span><span class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BSHtml</span><span class="pre_green">::</span><span class="pre_blue">imageThumbnail</span><span class="pre_green">(</span><span class="pre_red">'holder.js/140x140'</span><span class="pre_green">);<br></span><span class="pre_blue">?&gt;</span>
</span>
</pre>
    </div>

    <div class="bs-callout bs-callout-warning">
        <h4>Responsive images</h4>

        <p>Looking for how to make images more responsive? <a href="../css#overview-responsive-images">Check out the
                responsive images section</a> up top.</p>
    </div>

</div>