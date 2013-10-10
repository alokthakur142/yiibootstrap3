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
    <div class="highlight"><pre class="linenums prettyprint ">
&lt;?php echo BSHtml::imageRounded('holder.js/140x140'); ?&gt;
&lt;?php echo BSHtml::imageCircle('holder.js/140x140'); ?&gt;
&lt;?php echo BSHtml::imageThumbnail('holder.js/140x140'); ?&gt;
</pre>
    </div>

    <div class="bs-callout bs-callout-warning">
        <h4>Responsive images</h4>

        <p>Looking for how to make images more responsive? <a href="../css#overview-responsive-images">Check out the
                responsive images section</a> up top.</p>
    </div>

</div>