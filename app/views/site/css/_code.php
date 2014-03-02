<!-- Code
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="code">Code</h1>
    </div>

    <h2>Inline</h2>

    <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>

    <div class="bs-example">
        For example, <?php echo BsHtml::code(BsHtml::italics('Sample text here...')); ?> should be wrapped as inline.
    </div>

    <div class="highlight">
        <pre >
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                   class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                   class="pre_blue">code</span><span class="pre_green">(</span><span
                   class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                   class="pre_blue">italics</span><span class="pre_green">(</span><span
                    class="pre_red">'Sample&nbsp;text&nbsp;here...'</span><span class="pre_green">));<br></span><span
                   class="pre_blue">?&gt;</span>
</span>
        </pre>
    </div>

    <h2>Basic block</h2>

    <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for
        proper rendering.</p>

    <div class="bs-example">
        <?php echo BsHtml::codeBlock(BsHtml::emphasis('Sample text here...')); ?>
    </div>
    <div class="highlight">
        <pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                   class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                   class="pre_blue">codeBlock</span><span class="pre_green">(</span><span
                   class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                   class="pre_blue">emphasis</span><span class="pre_green">(</span><span
                    class="pre_red">'Sample&nbsp;text&nbsp;here...'</span><span class="pre_green">));<br></span><span
                   class="pre_blue">?&gt;</span>
</span>
        </pre>
    </div>

    <p>You may optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 350px and provide a
        y-axis scrollbar.</p>
</div>