<!-- Buttons
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="buttons">Buttons</h1>
</div>

<h2 id="buttons-options">Options</h2>

<p>Use any of the available button classes to quickly create a styled button.</p>

<div class="bs-example">
    <?php echo BSHtml::button(
        'Primary',
        array(
            'color' => BSHtml::BUTTON_COLOR_PRIMARY,
        )
    );
    ?>
    <?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER)); ?>
    <?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING)); ?>
    <?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS)); ?>
    <?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO)); ?>
    <?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE)); ?>
    <?php echo BSHtml::button('Default'); ?>
    <?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK)); ?>
</div>
<div class="highlight">
    <pre class="linenums prettyprint ">
        &lt;?php echo BSHtml::button(
            'Primary',
            array(
                'color' =&gt; BSHtml::BUTTON_COLOR_PRIMARY,
            )
        );
        ?&gt;
        &lt;?php echo BSHtml::button('Danger', array('color' =&gt; BSHtml::BUTTON_COLOR_DANGER)); ?&gt;
        &lt;?php echo BSHtml::button('Warning', array('color' =&gt; BSHtml::BUTTON_COLOR_WARNING)); ?&gt;
        &lt;?php echo BSHtml::button('Success', array('color' =&gt; BSHtml::BUTTON_COLOR_SUCCESS)); ?&gt;
        &lt;?php echo BSHtml::button('Info', array('color' =&gt; BSHtml::BUTTON_COLOR_INFO)); ?&gt;
        &lt;?php echo BSHtml::button('Inverse', array('color' =&gt; BSHtml::BUTTON_COLOR_INVERSE)); ?&gt;
        &lt;?php echo BSHtml::button('Default'); ?&gt;
        &lt;?php echo BSHtml::button('Link', array('color' =&gt; BSHtml::BUTTON_COLOR_LINK)); ?&gt;
    </pre>
</div>

<h2 id="buttons-sizes">Sizes</h2>

<p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for
    additional sizes.</p>

<div class="bs-example">
    <p>
        <?php echo BSHtml::button(
            'Large Button',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_LARGE
            )
        );
        ?>
        <?php echo BSHtml::button(
            'Large Button',
            array(
                'size' => BSHtml::BUTTON_SIZE_LARGE
            )
        ); ?>
    </p>
    <p>
        <?php echo BSHtml::button(
            'Default button',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY
            )
        );
        ?>
        <?php echo BSHtml::button('Default button'); ?>
    </p>
    <p>
        <?php echo BSHtml::button(
            'Small Button',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_SMALL
            )
        );
        ?>
        <?php echo BSHtml::button(
            'Small Button',
            array(
                'size' => BSHtml::BUTTON_SIZE_SMALL
            )
        ); ?>
    </p>
    <p>
        <?php echo BSHtml::button(
            'Extra Small Button',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_MINI
            )
        );
        ?>
        <?php echo BSHtml::button(
            'Extra small button',
            array(
                'size' => BSHtml::BUTTON_SIZE_MINI
            )
        ); ?>
    </p>
</div>
<div class="highlight">
    <pre class="linenums prettyprint lang-js">
&lt;?php echo BSHtml::button(
'Large Button',
array(
'color' =&gt; BSHtml::BUTTON_COLOR_PRIMARY,
'size' =&gt; BSHtml::BUTTON_SIZE_LARGE
)
);
?&gt;
&lt;?php echo BSHtml::button(
'Large Button',
array(
'size' =&gt; BSHtml::BUTTON_SIZE_LARGE
)
); ?&gt;
&lt;?php echo BSHtml::button(
'Default button',
array(
'color' =&gt; BSHtml::BUTTON_COLOR_PRIMARY
)
);
?&gt;
&lt;?php echo BSHtml::button('Default button'); ?&gt;

&lt;?php echo BSHtml::button(
'Small Button',
array(
'color' =&gt; BSHtml::BUTTON_COLOR_PRIMARY,
'size' =&gt; BSHtml::BUTTON_SIZE_SMALL
)
);
?&gt;
&lt;?php echo BSHtml::button(
'Small Button',
array(
'size' =&gt; BSHtml::BUTTON_SIZE_SMALL
)
); ?&gt;

&lt;?php echo BSHtml::button(
'Extra Small Button',
array(
'color' =&gt; BSHtml::BUTTON_COLOR_PRIMARY,
'size' =&gt; BSHtml::BUTTON_SIZE_MINI
)
);
?&gt;
&lt;?php echo BSHtml::button(
'Extra small button',
array(
'size' =&gt; BSHtml::BUTTON_SIZE_MINI
)
); ?&gt;
    </pre>
</div>

<p>Create block level buttons—those that span the full width of a parent— by adding <code>.btn-block</code>.</p>

<div class="bs-example">
    <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
        <?php echo BSHtml::button('Block button',
            array('block' => true, 'color' => BSHtml::BUTTON_COLOR_PRIMARY, 'size'=>BSHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BSHtml::button('Block button',
            array('block' => true, 'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
    </div>
</div>
<div class="highlight">
    <pre class="linenums prettyprint ">
 &lt;?php echo BSHtml::button('Block button',
     array('block' =&gt; true, 'color' =&gt; BSHtml::BUTTON_COLOR_PRIMARY, 'size'=&gt;BSHtml::BUTTON_SIZE_LARGE)); ?&gt;
 &lt;?php echo BSHtml::button('Block button',
     array('block' =&gt; true, 'size' =&gt; BSHtml::BUTTON_SIZE_LARGE)); ?&gt;
    </pre>
</div>


<h2 id="buttons-disabled">Disabled state</h2>

<p>Make buttons look unclickable by fading them back 50%.</p>

<h3>Button element</h3>

<p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>

<p class="bs-example">
    <?php echo BSHtml::button('Primary button',
        array('disabled' => true, 'size'=>BSHtml::BUTTON_SIZE_LARGE, 'color' => BSHtml::BUTTON_COLOR_PRIMARY)); ?>
    <?php echo BSHtml::button('Button',
        array('disabled' => true, 'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span
                class="s">"button"</span> <span class="na">class=</span><span
                class="s">"btn btn-lg btn-primary"</span> <span class="na">disabled=</span><span
                class="s">"disabled"</span><span
                class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default btn-lg"</span> <span
                class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Button<span
                class="nt">&lt;/button&gt;</span>
        </code></pre>
</div>

<div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>

    <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and
        below will render text gray with a nasty text-shadow that we cannot fix.</p>
</div>

<h3>Anchor element</h3>

<p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>

<p class="bs-example">
    <a href="#" class="btn btn-primary btn-lg disabled">Primary link</a>
    <a href="#" class="btn btn-default btn-lg disabled">Link</a>
</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span
                class="s">"#"</span> <span class="na">class=</span><span
                class="s">"btn btn-primary btn-lg disabled"</span><span class="nt">&gt;</span>Primary link<span
                class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span
                class="s">"btn btn-default btn-lg disabled"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
        </code></pre>
</div>
<p>
    We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no
    prefix is required.
</p>

<div class="bs-callout bs-callout-warning">
    <h4>Link functionality not impacted</h4>

    <p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom
        JavaScript to disable links here.</p>
</div>


<h2 id="buttons-tags">Button tags</h2>

<p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code>
    element.</p>

<form class="bs-example">
    <a class="btn btn-default" href="#">Link</a>
    <button class="btn btn-default" type="submit">Button</button>
    <input class="btn btn-default" type="button" value="Input">
    <input class="btn btn-default" type="submit" value="Submit">
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span
                class="s">"btn btn-default"</span> <span class="na">href=</span><span class="s">"#"</span><span
                class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span
                class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"submit"</span><span
                class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span>
            <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span
                class="s">"Input"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-default"</span>
            <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span
                class="s">"Submit"</span><span class="nt">&gt;</span>
        </code></pre>
</div>

<div class="bs-callout bs-callout-warning">
    <h4>Cross-browser rendering</h4>

    <p>As a best practice, <strong>we highly recommend using the <code>&lt;button&gt;</code> element whenever
            possible</strong> to ensure matching cross-browser rendering.</p>

    <p>Among other things, there's <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=697451">a Firefox bug</a>
        that prevents us from setting the <code>line-height</code> of <code>&lt;input&gt;</code>-based buttons,
        causing them to not exactly match the height of other buttons on Firefox.</p>
</div>

</div>