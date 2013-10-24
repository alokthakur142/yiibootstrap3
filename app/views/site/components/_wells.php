<!-- Wells
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="wells">Wells</h1>
    </div>

    <h3>Default well</h3>
    <p>Use the well as a simple effect on an element to give it an inset effect.</p>
    <div class="bs-example">
        <?= BSHtml::well("Look, I'm in a well!"); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
    <h3>Optional classes</h3>
    <p>Control padding and rounded corners with two optional modifier classes.</p>
    <div class="bs-example">
        <?= BSHtml::well("Look, I'm in a well!",array('size' => BSHtml::WELL_SIZE_LARGE)); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre></div>

    <div class="bs-example">
        <?= BSHtml::well("Look, I'm in a well!",array('size' => BSHtml::WELL_SIZE_SMALL)); ?>
    </div>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            </code></pre></div>
</div>