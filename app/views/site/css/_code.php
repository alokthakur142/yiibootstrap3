<!-- Code
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="code">Code</h1>
    </div>

    <h2>Inline</h2>

    <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>

    <div class="bs-example">
        For example, <?php echo BSHtml::code(BSHtml::italics('Sample text here...')); ?> should be wrapped as inline.
    </div>

    <div class="highlight">
        <pre class="linenums prettyprint lang-js">
            &lt;?php echo BSHtml::code(BSHtml::italics('Sample text here...')); ?&gt;
        </pre>
    </div>

    <h2>Basic block</h2>

    <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for
        proper rendering.</p>

    <div class="bs-example">
        <?php echo BSHtml::codeBlock(BSHtml::emphasis('Sample text here...')); ?>
    </div>
    <div class="highlight">
        <pre>
            &lt;?php echo BSHtml::codeBlock(BSHtml::emphasis('Sample text here...')); ?&gt;
        </pre>
    </div>

    <p>You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and provide a
        y-axis scrollbar.</p>
</div>