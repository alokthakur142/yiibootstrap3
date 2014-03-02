<!-- Wells
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="wells">Wells</h1>
    </div>

    <h3>Default well</h3>

    <p>Use the well as a simple effect on an element to give it an inset effect.</p>

    <div class="bs-example">
        <?php echo BsHtml::well("Look, I'm in a well!"); ?>
    </div>
    <div class="highlight"><pre><span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">well</span><span class="pre_green">(</span><span class="pre_red">"Look,&nbsp;I'm&nbsp;in&nbsp;a&nbsp;well!"</span><span
                    class="pre_green">);<br></span><span class="pre_blue">?&gt;</span>
</span></pre>
    </div>
    <h3>Optional classes</h3>

    <p>Control padding and rounded corners with two optional modifier classes.</p>

    <div class="bs-example">
        <?php echo BsHtml::well("Look, I'm in a well!", array('size' => BsHtml::WELL_SIZE_LARGE)); ?>
    </div>
    <div class="highlight"><pre>
            <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">well</span><span class="pre_green">(</span><span class="pre_red">"Look,&nbsp;I'm&nbsp;in&nbsp;a&nbsp;well!"</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">WELL_SIZE_LARGE<br></span><span class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;</span>
</span>
    </pre>
    </div>

    <div class="bs-example">
        <?php echo BsHtml::well("Look, I'm in a well!", array('size' => BsHtml::WELL_SIZE_SMALL)); ?>
    </div>
    <div class="highlight"><pre><span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span
                    class="pre_blue">BsHtml</span><span class="pre_green">::</span><span
                    class="pre_blue">well</span><span class="pre_green">(</span><span class="pre_red">"Look,&nbsp;I'm&nbsp;in&nbsp;a&nbsp;well!"</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span
                    class="pre_green">::</span><span class="pre_blue">WELL_SIZE_SMALL<br></span><span class="pre_green">));<br></span><span
                    class="pre_blue">?&gt;</span>
</span></pre>
    </div>
</div>