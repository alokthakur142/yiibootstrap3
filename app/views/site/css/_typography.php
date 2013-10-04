<!-- Typography ================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="type">Typography</h1>
</div>

<!-- Headings -->
<h2 id="type-headings">Headings</h2>

<p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.</p>

<div class="bs-example bs-example-type">
    <table class="table">
        <tbody>
        <tr>
            <td><h1>h1. Bootstrap heading</h1></td>
            <td>Semibold 36px</td>
        </tr>
        <tr>
            <td><h2>h2. Bootstrap heading</h2></td>
            <td>Semibold 30px</td>
        </tr>
        <tr>
            <td><h3>h3. Bootstrap heading</h3></td>
            <td>Semibold 24px</td>
        </tr>
        <tr>
            <td><h4>h4. Bootstrap heading</h4></td>
            <td>Semibold 18px</td>
        </tr>
        <tr>
            <td><h5>h5. Bootstrap heading</h5></td>
            <td>Semibold 14px</td>
        </tr>
        <tr>
            <td><h6>h6. Bootstrap heading</h6></td>
            <td>Semibold 12px</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;h1&gt;</span>...<span class="nt">&lt;/h1&gt;</span>
            <span class="nt">&lt;h2&gt;</span>...<span class="nt">&lt;/h2&gt;</span>
            <span class="nt">&lt;h3&gt;</span>...<span class="nt">&lt;/h3&gt;</span>
            <span class="nt">&lt;h4&gt;</span>...<span class="nt">&lt;/h4&gt;</span>
            <span class="nt">&lt;h5&gt;</span>...<span class="nt">&lt;/h5&gt;</span>
            <span class="nt">&lt;h6&gt;</span>...<span class="nt">&lt;/h6&gt;</span>
        </code></pre>
</div>

<!-- Body copy -->
<h2 id="type-body-copy">Body copy</h2>

<p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of
    <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code>
    (paragraphs) receive a bottom margin of half their computed line-height (10px by default).</p>

<div class="bs-example">
    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient
        montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>

    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non
        metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem
        nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>

    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus.
        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
        </code></pre>
</div>

<!-- Body copy .lead -->
<h3>Lead body copy</h3>

<p>Make a paragraph stand out by adding <code>.lead</code>.</p>

<div class="bs-example">
    <?php
        echo BSHtml::lead(
            'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
            Duis mollis, est non commodo luctus.'
        )
    ?>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
        <code class="html ">
&lt;?php
    echo BSHtml::lead(
        'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
        Duis mollis, est non commodo luctus.'
    )
?&gt;
        </code>
    </pre>
</div>

<!-- Using LESS -->
<h3>Built with Less</h3>

<p>The typographic scale is based on two LESS variables in <strong>variables.less</strong>: <code>@font-size-base</code>
    and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base
    line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all
    our type and more. Customize them and Bootstrap adapts.</p>


<!-- Emphasis -->
<h2 id="type-emphasis">Emphasis</h2>

<p>Make use of HTML's default emphasis tags with lightweight styles.</p>

<h3>Small text</h3>

<p>For de-emphasizing inline or blocks of text, use the <code>&lt;small&gt;</code> tag to set text at 85% the size of
    the parent. Heading elements receive their own <code>font-size</code> for nested <code>&lt;small&gt;</code>
    elements.</p>

<div class="bs-example">
    <p>
        <?php echo BSHtml::small('This line of text is meant to be treated as fine print.') ?>
    </p>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::small('This line of text is meant to be treated as fine print.') ?&gt;
    </pre>
</div>


<h3>Bold</h3>

<p>For emphasizing a snippet of text with a heavier font-weight.</p>
<div class="bs-example">
    <p>The following snippet of text is <?php echo BSHtml::bold('rendered as bold text.')?></p>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::bold('rendered as bold text.')?&gt;
    </pre>
</div>

<h3>Italics</h3>

<p>For emphasizing a snippet of text with italics.</p>

<div class="bs-example">
    <p>The following snippet of text is <?php echo BSHtml::italics('rendered as italicized text') ?>.</p>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::italics('rendered as italicized text') ?>&gt;
    </pre>
</div>

<div class="bs-callout bs-callout-info">
    <h4>Alternate elements</h4>

    <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to
        highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for
        voice, technical terms, etc.</p>
</div>

<h3>Alignment classes</h3>

<p>Easily realign text to components with text alignment classes.</p>

<div class="bs-example">
    <?php echo BSHtml::emphasis('Left aligned text.',array('color' => BSHtml::TEXT_ALIGN_LEFT)) ?>
    <?php echo BSHtml::emphasis('Center aligned text.',array('color' => BSHtml::TEXT_ALIGN_CENTER)) ?>
    <?php echo BSHtml::emphasis('Right aligned text.',array('color' => BSHtml::TEXT_ALIGN_RIGHT)) ?>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::emphasis('Left aligned text.',array('color' =&gt; BSHtml::TEXT_ALIGN_LEFT)) ?&gt;<br />
&lt;?php echo BSHtml::emphasis('Center aligned text.',array('color' =&gt; BSHtml::TEXT_ALIGN_CENTER)) ?&gt;<br />
&lt;?php echo BSHtml::emphasis('Right aligned text.',array('color' =&gt; BSHtml::TEXT_ALIGN_RIGHT)) ?&gt;<br />
    </pre>
</div>

<h3>Emphasis classes</h3>

<p>Convey meaning through color with a handful of emphasis utility classes.</p>

<div class="bs-example">
    <?php echo BSHtml::emphasis('Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.',array('color' => BSHtml::TEXT_COLOR_MUTED)); ?>
    <?php echo BSHtml::emphasis('Etiam porta sem malesuada magna mollis euismod.', array('color' => BSHtml::TEXT_COLOR_PRIMARY)); ?>
    <?php echo BSHtml::emphasis('Donec ullamcorper nulla non metus auctor fringilla.', array('color' => BSHtml::TEXT_COLOR_SUCCESS)); ?>
    <?php echo BSHtml::emphasis('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.', array('color' => BSHtml::TEXT_COLOR_INFO)); ?>
    <?php echo BSHtml::emphasis('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', array('color' => BSHtml::TEXT_COLOR_WARNING)); ?>
    <?php echo BSHtml::emphasis('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.', array('color' => BSHtml::TEXT_COLOR_DANGER)); ?>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::emphasis(
    'Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.',
    array('color' => BSHtml::TEXT_MUTED)
);?&gt;

&lt;?php echo BSHtml::emphasis(
    'Etiam porta sem malesuada magna mollis euismod.',
    array('color' =&gt; BSHtml::TEXT_PRIMARY)
);?&gt;

&lt;?php echo BSHtml::emphasis(
    'Donec ullamcorper nulla non metus auctor fringilla.',
    array('color' =&gt; BSHtml::TEXT_SUCCESS)
);?&gt;

&lt;?php echo BSHtml::emphasis(
    'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.',
    array('color' =&gt; BSHtml::TEXT_INFO)
); ?&gt;

&lt;?php echo BSHtml::emphasis(
    'Duis mollis, est non commodo luctus, nisi erat porttitor ligula.',
    array('color' =&gt; BSHtml::TEXT_WARNING));
?&gt;

&lt;?php echo BSHtml::emphasis(
    'Duis mollis, est non commodo luctus, nisi erat porttitor ligula.',
    array('color' =&gt; BSHtml::TEXT_DANGER)
); ?&gt;
    </pre>
</div>


<!-- Abbreviations -->
<h2 id="type-abbreviations">Abbreviations</h2>

<p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the
    expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a
    help cursor on hover, providing additional context on hover.</p>

<h3>Basic abbreviation</h3>

<p>For expanded text on long hover of an abbreviation, include the <code>title</code> attribute with the <code>&lt;abbr&gt;</code>
    element.</p>

<div class="bs-example">
    <?php echo BSHtml::emphasis('An abbreviation of the word attribute is '.BSHtml::abbr('atrr','attribute').'.') ?>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::emphasis(
'An abbreviation of the word attribute is '.BSHtml::abbr('atrr','attribute').'.'
) ?&gt;
    </pre>
</div>

<h3>Initialism</h3>

<p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>

<div class="bs-example">
    <p>
        <?php echo BSHtml::abbr('HTML','HyperText Markup Language',array('type' => BSHtml::TEXT_ABBR_INITIALISM)) ?> is the best thing since sliced bread
    </p>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::abbr(
    'HTML',
    'HyperText Markup Language',
    array('type' => BSHtml::TEXT_ABBR_INITIALISM)
) ?&gt;
    </pre>
</div>


<!-- Addresses -->
<h2 id="type-addresses">Addresses</h2>

<p>Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all
    lines with <code>&lt;br&gt;</code>.</p>

<div class="bs-example">
    <address>
        <strong>Twitter, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
    </address>
    <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">first.last@example.com</a>
    </address>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;address&gt;</span>
            <span class="nt">&lt;strong&gt;</span>Twitter, Inc.<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
            795 Folsom Ave, Suite 600<span class="nt">&lt;br&gt;</span>
            San Francisco, CA 94107<span class="nt">&lt;br&gt;</span>
            <span class="nt">&lt;abbr</span> <span class="na">title=</span><span class="s">"Phone"</span><span
                class="nt">&gt;</span>P:<span class="nt">&lt;/abbr&gt;</span> (123) 456-7890
            <span class="nt">&lt;/address&gt;</span>

            <span class="nt">&lt;address&gt;</span>
            <span class="nt">&lt;strong&gt;</span>Full Name<span class="nt">&lt;/strong&gt;&lt;br&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"mailto:#"</span><span
                class="nt">&gt;</span>first.last@example.com<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/address&gt;</span>
        </code></pre>
</div>


<!-- Blockquotes -->
<h2 id="type-blockquotes">Blockquotes</h2>

<p>For quoting blocks of content from another source within your document.</p>

<h3>Default blockquote</h3>

<p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For
    straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>

<div class="bs-example">
    <?php echo BSHtml::quote('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.') ?>
</div>
<div class="highlight">
<pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::quote(<br />
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.'<br />
) ?&gt;
</pre>
</div>

<h3>Blockquote options</h3>

<p>Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.</p>

<h4>Naming a source</h4>

<p>Add <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of the source work in <code>
        &lt;cite&gt;</code>.</p>

<div class="bs-example" style="overflow: hidden;">
    <?php echo BSHtml::quote(
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
        array(
        'small' => 'Someone famous in',
        'cite' => 'Source Title'
    )); ?>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::quote(
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
    array(
        'small' => 'Someone famous in',
        'cite' => 'Source Title'
    )
); ?&gt;
    </pre>
</div>

<h4>Alternate displays</h4>

<p>Use <code>.pull-right</code> for a floated, right-aligned blockquote.</p>

<div class="bs-example" style="overflow: hidden;">
    <?php echo BSHtml::quote('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', array(
        'small' => 'Someone famous in',
        'cite' => 'Source Title',
        'pull' => BSHtml::PULL_RIGHT,
    )); ?>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php echo BSHtml::quote(
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
array('small' => 'Someone famous in','cite' => 'Source Title','pull' => BSHtml::PULL_RIGHT,)
); ?&gt;
    </pre>
</div>


<!-- Lists -->
<h2 id="type-lists">Lists</h2>

<h3>Unordered</h3>

<p>A list of items in which the order does <em>not</em> explicitly matter.</p>

<div class="bs-example">
    <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
            <ul>
                <li>Phasellus iaculis neque</li>
                <li>Purus sodales ultricies</li>
                <li>Vestibulum laoreet porttitor sem</li>
                <li>Ac tristique libero volutpat at</li>
            </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
    </ul>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul&gt;</span>
            <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
        </code></pre>
</div>

<h3>Ordered</h3>

<p>A list of items in which the order <em>does</em> explicitly matter.</p>

<div class="bs-example">
    <ol>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit</li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
    </ol>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ol&gt;</span>
            <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;/ol&gt;</span>
        </code></pre>
</div>

<h3>Unstyled</h3>

<p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only
        applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists
    as well.</p>

<div class="bs-example">
    <ul class="list-unstyled">
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
            <ul>
                <li>Phasellus iaculis neque</li>
                <li>Purus sodales ultricies</li>
                <li>Vestibulum laoreet porttitor sem</li>
                <li>Ac tristique libero volutpat at</li>
            </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
    </ul>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span
                class="s">"list-unstyled"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
        </code></pre>
</div>

<h3>Inline</h3>

<p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>

<div class="bs-example">
    <ul class="list-inline">
        <li>Lorem ipsum</li>
        <li>Phasellus iaculis</li>
        <li>Nulla volutpat</li>
    </ul>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span
                class="s">"list-inline"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;</span>...<span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
        </code></pre>
</div>

<h3>Description</h3>

<p>A list of terms with their associated descriptions.</p>

<div class="bs-example">
    <dl>
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
    </dl>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;dl&gt;</span>
            <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
            <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
            <span class="nt">&lt;/dl&gt;</span>
        </code></pre>
</div>

<h4>Horizontal description</h4>

<p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>
        &lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>

<div class="bs-example">
    <dl class="dl-horizontal">
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
        <dt>Felis euismod semper eget lacinia</dt>
        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
            risus.
        </dd>
    </dl>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span
                class="s">"dl-horizontal"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;dt&gt;</span>...<span class="nt">&lt;/dt&gt;</span>
            <span class="nt">&lt;dd&gt;</span>...<span class="nt">&lt;/dd&gt;</span>
            <span class="nt">&lt;/dl&gt;</span>
        </code></pre>
</div>

<div class="bs-callout bs-callout-info">
    <h4>Auto-truncating</h4>

    <p>Horizontal description lists will truncate terms that are too long to fit in the left column with <code>text-overflow</code>.
        In narrower viewports, they will change to the default stacked layout.</p>
</div>
</div>

