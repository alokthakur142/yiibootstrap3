<!-- Buttons
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="buttons">Buttons</h1>
</div>

<h2 id="buttons-options">Options</h2>

<p>Use any of the available button classes to quickly create a styled button.</p>

<div class="bs-example">
    <?php echo BsHtml::button(
        'Primary',
        array(
            'color' => BsHtml::BUTTON_COLOR_PRIMARY,
        )
    );
    ?>
    <?php echo BsHtml::button('Danger', array('color' => BsHtml::BUTTON_COLOR_DANGER)); ?>
    <?php echo BsHtml::button('Warning', array('color' => BsHtml::BUTTON_COLOR_WARNING)); ?>
    <?php echo BsHtml::button('Success', array('color' => BsHtml::BUTTON_COLOR_SUCCESS)); ?>
    <?php echo BsHtml::button('Info', array('color' => BsHtml::BUTTON_COLOR_INFO)); ?>
    <?php echo BsHtml::button('Default'); ?>
    <?php echo BsHtml::button('Link', array('color' => BsHtml::BUTTON_COLOR_LINK)); ?>
</div>
<div class="highlight">
    <pre>
       <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
            class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Primary'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY<br></span><span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>
        &nbsp; &nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Danger'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_DANGER<br></span><span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>
        &nbsp; &nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Warning'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_WARNING<br></span><span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>
        &nbsp; &nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Success'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_SUCCESS<br></span><span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>
        &nbsp; &nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Info'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_INFO<br></span><span
            class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>
        &nbsp; &nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Default'</span><span class="pre_green">);<br></span><span class="pre_blue">?&gt;<br></span>
        &nbsp; &nbsp;<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Link'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_LINK<br></span><span
            class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
        </span>
    </pre>
</div>

<h2 id="buttons-sizes">Sizes</h2>

<p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for
    additional sizes.</p>

<div class="bs-example">
    <p>
        <?php echo BsHtml::button(
            'Large Button',
            array(
                'color' => BsHtml::BUTTON_COLOR_PRIMARY,
                'size' => BsHtml::BUTTON_SIZE_LARGE
            )
        );
        ?>
        <?php echo BsHtml::button(
            'Large Button',
            array(
                'size' => BsHtml::BUTTON_SIZE_LARGE
            )
        ); ?>
    </p>

    <p>
        <?php echo BsHtml::button(
            'Default button',
            array(
                'color' => BsHtml::BUTTON_COLOR_PRIMARY
            )
        );
        ?>
        <?php echo BsHtml::button('Default button'); ?>
    </p>

    <p>
        <?php echo BsHtml::button(
            'Small Button',
            array(
                'color' => BsHtml::BUTTON_COLOR_PRIMARY,
                'size' => BsHtml::BUTTON_SIZE_SMALL
            )
        );
        ?>
        <?php echo BsHtml::button(
            'Small Button',
            array(
                'size' => BsHtml::BUTTON_SIZE_SMALL
            )
        ); ?>
    </p>

    <p>
        <?php echo BsHtml::button(
            'Extra Small Button',
            array(
                'color' => BsHtml::BUTTON_COLOR_PRIMARY,
                'size' => BsHtml::BUTTON_SIZE_MINI
            )
        );
        ?>
        <?php echo BsHtml::button(
            'Extra small button',
            array(
                'size' => BsHtml::BUTTON_SIZE_MINI
            )
        ); ?>
    </p>
</div>
<div class="highlight">
    <pre>
<span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
            class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Large&nbsp;Button'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY</span>
        <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_LARGE<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Large&nbsp;Button'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_LARGE<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Default&nbsp;button'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Default&nbsp;button'</span><span class="pre_green">);<br></span><span class="pre_blue">?&gt;<br></span>
        <br><br><span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Small&nbsp;Button'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY</span>
        <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_SMALL<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Small&nbsp;Button'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_SMALL<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span><br><br><span class="pre_blue">&lt;?php<br></span><span
            class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">button</span>
        <span class="pre_green">(</span><span class="pre_red">'Extra&nbsp;Small&nbsp;Button'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY</span>
        <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_MINI<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Extra&nbsp;small&nbsp;button'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'size'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_MINI<br></span><span
            class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>
        </span>
    </pre>
</div>

<p>Create block level buttons—those that span the full width of a parent— by adding <code>.btn-block</code>.</p>

<div class="bs-example">
    <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
        <?php echo BsHtml::button('Block button',
            array('block' => true, 'color' => BsHtml::BUTTON_COLOR_PRIMARY, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BsHtml::button('Block button',
            array('block' => true, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
    </div>
</div>
<div class="highlight">
    <pre >
 <span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
            class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Block&nbsp;button'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'block'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'color'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'size'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_LARGE<br></span><span
            class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Block&nbsp;button'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'block'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'size'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_LARGE<br></span><span
            class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
        </span>
    </pre>
</div>


<h2 id="buttons-disabled">Disabled state</h2>

<p>Make buttons look unclickable by fading them back 50%.</p>

<h3>Button element</h3>

<p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>

<p class="bs-example">
    <?php echo BsHtml::button('Primary button',
        array('disabled' => true, 'size' => BsHtml::BUTTON_SIZE_LARGE, 'color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
    <?php echo BsHtml::button('Button',
        array('disabled' => true, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
</p>

<div class="highlight">
    <pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
            class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Primary&nbsp;button'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'disabled'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span>
        <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_LARGE</span>
        <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">button</span><span class="pre_green">(</span><span
            class="pre_red">'Button'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'disabled'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span>
        <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_LARGE<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
        </span>
    </pre>
</div>

<div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>

    <p>If you add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code>, Internet Explorer 9 and
        below will render text gray with a nasty text-shadow that we cannot fix.</p>
</div>

<h3>Anchor element</h3>

<p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>

<p class="bs-example">
    <?php echo BsHtml::linkButton('Primary link',
        array('disabled' => true, 'size' => BsHtml::BUTTON_SIZE_LARGE, 'color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
    <?php echo BsHtml::linkButton('Link',
        array('disabled' => true, 'size' => BsHtml::BUTTON_SIZE_LARGE)); ?>
</p>

<div class="highlight"> <pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
            class="pre_green">::</span><span class="pre_blue">linkButton</span><span class="pre_green">(</span><span
            class="pre_red">'Primary&nbsp;link'</span><span
            class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'disabled'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span>
        <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_LARGE</span>
        <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'color'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_COLOR_PRIMARY<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span>
        <span class="pre_green">::</span><span class="pre_blue">linkButton</span><span class="pre_green">(</span><span
            class="pre_red">'Link'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'disabled'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">true</span>
        <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'size'&nbsp;</span><span
            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">BUTTON_SIZE_LARGE<br></span>
        <span class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
        </span>
    </pre>
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
    <?php echo BsHtml::linkButton('Link'); ?>
    <?php echo BsHtml::button('Button'); ?>
    <?php echo BsHtml::inputButton('Input'); ?>
    <?php echo BsHtml::inputSubmitButton('Submit', array('type' => 'input')); ?>
    <?php echo BsHtml::submitButton('Submit Button', array('type' => 'input')); ?>
</form>
<div class="highlight"><pre >
<span class="pre_black">
<span class="pre_blue">&lt;?php<br></span><span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span
            class="pre_green">::</span><span class="pre_blue">linkButton</span><span class="pre_green">(</span><span
            class="pre_red">'Link'</span><span class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span>
        <span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">button</span>
        <span class="pre_green">(</span><span class="pre_red">'Button'</span><span class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span>
        <span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">inputButton</span>
        <span class="pre_green">(</span><span class="pre_red">'Input'</span><span class="pre_green">);<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span>
        <span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">inputSubmitButton</span>
        <span class="pre_green">(</span><span class="pre_red">'Submit'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_red">'input'<br></span><span class="pre_green">));<br></span><span class="pre_blue">?&gt;<br>&lt;?php<br></span>
        <span class="pre_green">echo&nbsp;</span><span class="pre_blue">BsHtml</span><span class="pre_green">::</span><span class="pre_blue">submitButton</span>
        <span class="pre_green">(</span><span class="pre_red">'Submit&nbsp;Button'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
            class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
            class="pre_red">'input'<br></span><span class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
        </span>
</pre>
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