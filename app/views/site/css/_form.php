<div class="bs-docs-section">
<div class="page-header">
    <h1 id="forms">Forms</h1>
</div>

<h2 id="forms-example">Basic example</h2>

<p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>
        &lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to
    <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>

<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
//        'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
        'enableAjaxValidation' => true,
        'id' => 'user_form',
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<fieldset>
    <legend>Legend</legend>
    <?php echo $form->textFieldControlGroup(
        $model,
        'username'
    ); ?>
    <?php echo $form->passwordFieldControlGroup(
        $model,
        'password'
    ); ?>
    <?php echo $form->emailFieldControlGroup(
        $model,
        'email'
    ); ?>
    <?php echo BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)) ?>
</fieldset>
<?php $this->endWidget(); ?>
<!-- /example -->
<div class="highlight"><pre class="linenums prettyprint lang-py">
&lt;?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => 'user_form'
    )
); ?&gt;
    &lt;?php echo $form-&gt;textFieldControlGroup(
        $model,
        'username'
    ); ?&gt;
    &lt;?php echo $form-&gt;passwordFieldControlGroup(
        $model,
        'password'
    ); ?&gt;
    &lt;?php echo $form-&gt;emailFieldControlGroup(
        $model,
        'email'
    ); ?&gt;
    &lt;?php echo BSHtml::formActions(array(
        BSHtml::submitButton('Submit', array('color' =&gt; BSHtml::BUTTON_COLOR_PRIMARY)),

    )); ?&gt;
&lt;?php $this-&gt;endWidget(); ?&gt;
    </pre>
</div>


<h2 id="forms-inline">Inline form</h2>

<p>Add <code>.form-inline</code> for left-aligned and inline-block controls for a compact layout.</p>

<div class="bs-callout bs-callout-danger">
    <h4>Requires custom widths</h4>

    <p>Inputs, selects, and textareas are 100% wide by default in Bootstrap. To use the inline form, you'll have to set
        a width on the form controls used within.</p>
</div>
<div class="bs-callout bs-callout-danger">
    <h4>Always add labels</h4>

    <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline
        forms, you can hide the labels using the <code>.sr-only</code> class.</p>
</div>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'layout' => BSHtml::FORM_LAYOUT_INLINE,
        'enableAjaxValidation' => true,
        'id' => 'user_form_inline',
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<fieldset>
    <legend>Legend</legend>
    <?php echo $form->textFieldControlGroup(
        $model,
        'username'
    ); ?>
    <?php echo $form->passwordFieldControlGroup(
        $model,
        'password'
    ); ?>
    <?php echo $form->emailFieldControlGroup(
        $model,
        'email'
    ); ?>
    <?php echo BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)); ?>
</fieldset>
<?php $this->endWidget(); ?>
<!-- /example -->
<div class="highlight"><pre class="linenums prettyprint lang-py">
&lt;?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => 'user_form',
        'layout' => BSHtml::FORM_LAYOUT_INLINE,
    )
); ?&gt;
    &lt;?php echo $form-&gt;textFieldControlGroup(
        $model,
        'username'
    ); ?&gt;
    &lt;?php echo $form-&gt;passwordFieldControlGroup(
        $model,
        'password'
    ); ?&gt;
    &lt;?php echo $form-&gt;emailFieldControlGroup(
        $model,
        'email'
    ); ?&gt;
    &lt;?php echo BSHtml::formActions(array(
        BSHtml::submitButton('Submit', array('color' =&gt; BSHtml::BUTTON_COLOR_PRIMARY)),

    )); ?&gt;
&lt;?php $this-&gt;endWidget(); ?&gt;
    </pre>
</div>


<h2 id="forms-horizontal">Horizontal form</h2>

<p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding
    <code>.form-horizontal</code> to the form. Doing so changes <code>.form-group</code>s to behave as grid rows, so no
    need for <code>.row</code>.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
        'enableAjaxValidation' => true,
        'id' => 'user_form_horizontal',
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<fieldset>
    <legend>Legend</legend>
    <?php echo $form->textFieldControlGroup(
        $model,
        'username'
    ); ?>
    <?php echo $form->textFieldControlGroup($model, 'username', array('prepend' => BSHtml::icon(BSHtml::GLYPHICON_USER))); ?>
    <?php echo $form->textFieldControlGroup($model, 'username', array('append' => BSHtml::icon(BSHtml::GLYPHICON_USER))); ?>
    <?php echo $form->passwordFieldControlGroup(
        $model,
        'password'
    ); ?>
    <?php echo $form->emailFieldControlGroup(
        $model,
        'email'
    ); ?>

    <?php echo BSHtml::formActions(array(
        BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)),
    )); ?>
</fieldset>
<?php $this->endWidget(); ?>
<!-- /example -->
<div class="highlight"><pre class="linenums prettyprint lang-py">
&lt;?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => 'user_form',
        'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
    )
); ?&gt;
    &lt;?php echo $form-&gt;textFieldControlGroup(
        $model,
        'username'
    ); ?&gt;
    &lt;?php echo $form-&gt;passwordFieldControlGroup(
        $model,
        'password'
    ); ?&gt;
    &lt;?php echo $form-&gt;emailFieldControlGroup(
        $model,
        'email'
    ); ?&gt;
    &lt;?php echo BSHtml::formActions(array(
        BSHtml::submitButton('Submit', array('color' =&gt; BSHtml::BUTTON_COLOR_PRIMARY)),

    )); ?&gt;
&lt;?php $this-&gt;endWidget(); ?&gt;
    </pre>
</div>

<h2 id="forms-controls">Supported controls</h2>

<p>Examples of standard form controls supported in an example form layout.</p>

<h3>Inputs</h3>

<p>Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>,
    <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>,
    <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and
    <code>color</code>.</p>

<div class="bs-callout bs-callout-danger">
    <h4>Type declaration required</h4>

    <p>Inputs will only be fully styled if their <code>type</code> is properly declared.</p>
</div>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<?php echo $form->textField($model, 'username',array('placeholder' => 'textField')); ?>
<br />
<?php echo $form->passwordField($model, 'username',array('placeholder' => 'passwordField')); ?>
<br />
<?php echo $form->numberField($model, 'username',array('placeholder' => 'numberField')); ?>
<br />
<?php echo $form->emailField($model, 'username',array('placeholder' => 'emailField')); ?>
<br />
<?php echo $form->urlField($model, 'username',array('placeholder' => 'urlField')); ?>
<br />
<?php echo $form->rangeField($model, 'username',array('placeholder' => 'rangeField')); ?>
<br />
<?php echo $form->dateField($model, 'username',array('placeholder' => 'dateField')); ?>
<br />
<?php echo $form->fileField($model, 'username',array('placeholder' => 'fileField')); ?>
<br />
<?php $this->endWidget() ?>

<div class="highlight">
    <pre class="linenums prettyprint lang-py">
        &lt;?php $form = $this-&gt;beginWidget('bootstrap.widgets.BsActiveForm',
            array(
                'enableAjaxValidation' =&gt; true,
                'id' =&gt; uniqid('user_'),
                'htmlOptions' =&gt; array(
                    'class' =&gt; 'bs-example'
                )
            )
        ); ?&gt;
        &lt;?php echo $form-&gt;textField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;passwordField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;numberField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;emailField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;urlField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;rangeField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;dateField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;fileField($model, 'username'); ?&gt;
        &lt;?php $this-&gt;endWidget() ?&gt;
    </pre>
</div>

<h3>Textarea</h3>

<p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>

<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<?php echo $form->textArea($model, 'username'); ?>
<?php $this->endWidget() ?>

<div class="highlight">
    <pre class="linenums prettyprint lang-py">
        &lt;?php $form = $this-&gt;beginWidget('bootstrap.widgets.BsActiveForm',
            array(
                'enableAjaxValidation' =&gt; true,
                'id' =&gt; uniqid('user_'),
                'htmlOptions' =&gt; array(
                    'class' =&gt; 'bs-example'
                )
            )
        ); ?&gt;
        &lt;?php echo $form-&gt;textArea($model, 'username'); ?&gt;
        &lt;?php $this-&gt;endWidget() ?&gt;
    </pre>
</div>

<h3>Checkboxes and radios</h3>

<p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from
    many.</p>
<h4>Default (stacked)</h4>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<?php echo $form->checkBoxControlGroup($model, 'profile'); ?>
<?php echo $form->inlineCheckBoxListControlGroup($model, 'profile', array('1', '2', '3')); ?>
<?php echo $form->checkBoxListControlGroup($model, 'profile',
    array("Option one is this and that—be sure to include why it's great")); ?>

<?php echo $form->radioButtonControlGroup($model, 'profile'); ?>
<?php $this->endWidget() ?>

<div class="highlight">
    <pre class="linenums prettyprint lang-py">
        &lt;?php $form = $this-&gt;beginWidget('bootstrap.widgets.BsActiveForm',
            array(
                'enableAjaxValidation' =&gt; true,
                'id' =&gt; uniqid('user_'),
                'htmlOptions' =&gt; array(
                    'class' =&gt; 'bs-example'
                )
            )
        ); ?&gt;
        &lt;?php echo $form-&gt;textField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;passwordField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;numberField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;emailField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;urlField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;rangeField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;dateField($model, 'username'); ?&gt;
        &lt;?php echo $form-&gt;fileField($model, 'username'); ?&gt;
        &lt;?php $this-&gt;endWidget() ?&gt;
    </pre>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"checkbox"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span
                class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
            Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
            <span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span
                class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span
                class="s">"optionsRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span
                class="na">checked</span><span class="nt">&gt;</span>
            Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
            <span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span
                class="na">name=</span><span class="s">"optionsRadios"</span> <span class="na">id=</span><span
                class="s">"optionsRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span><span
                class="nt">&gt;</span>
            Option two can be something else and selecting it will deselect option one
            <span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h4>Inline checkboxes</h4>

<p>Use <code>.checkbox-inline</code> or <code>.radio-inline</code> class to a series of checkboxes or radios for
    controls appear on the same line.</p>

<form class="bs-example">
    <label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
    </label>
    <label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
    </label>
    <label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
    </label>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span
                class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span
                class="na">id=</span><span class="s">"inlineCheckbox1"</span> <span class="na">value=</span><span
                class="s">"option1"</span><span class="nt">&gt;</span> 1
            <span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span
                class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span
                class="na">id=</span><span class="s">"inlineCheckbox2"</span> <span class="na">value=</span><span
                class="s">"option2"</span><span class="nt">&gt;</span> 2
            <span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span
                class="s">"checkbox-inline"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span
                class="na">id=</span><span class="s">"inlineCheckbox3"</span> <span class="na">value=</span><span
                class="s">"option3"</span><span class="nt">&gt;</span> 3
            <span class="nt">&lt;/label&gt;</span>
        </code></pre>
</div>

<h3>Selects</h3>

<p>Use the default option, or add <code>multiple</code> to show multiple options at once.</p>

<form class="bs-example">
    <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
    <br>
    <select multiple="" class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span
                class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;/select&gt;</span>

            <span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span
                class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;/select&gt;</span>
        </code></pre>
</div>


<h2 id="forms-controls-static">Static control</h2>

<p>When you need to place plain text next to a form label within a horizontal form, use the
    <code>.form-control-static</code> class on a <code>&lt;p&gt;</code>.</p>

<form class="bs-example form-horizontal">
    <div class="form-group">
        <label class="col-lg-2 control-label">Email</label>

        <div class="col-lg-10">
            <p class="form-control-static">email@example.com</p>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Password</label>

        <div class="col-lg-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span
                class="s">"form-horizontal"</span> <span class="na">role=</span><span class="s">"form"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span
                class="s">"col-lg-2 control-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-10"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;p</span> <span class="na">class=</span><span
                class="s">"form-control-static"</span><span class="nt">&gt;</span>email@example.com<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword"</span> <span
                class="na">class=</span><span class="s">"col-lg-2 control-label"</span><span class="nt">&gt;</span>Password<span
                class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-10"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span
                class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span
                class="s">"inputPassword"</span> <span class="na">placeholder=</span><span
                class="s">"Password"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/form&gt;</span>
        </code></pre>
</div>


<h2 id="forms-control-states">Form states</h2>

<p>Provide feedback to users or visitors with basic feedback states on form controls and labels.</p>

<h3 id="forms-input-focus">Input focus</h3>

<p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its
    place for <code>:focus</code>.</p>

<form class="bs-example">
    <input class="form-control" id="focusedInput" type="text" value="This is focused...">
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span
                class="s">"form-control"</span> <span class="na">id=</span><span class="s">"focusedInput"</span> <span
                class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"This is focused..."</span><span
                class="nt">&gt;</span>
        </code></pre>
</div>

<h3 id="forms-disabled-inputs">Disabled inputs</h3>

<p>Add the <code>disabled</code> attribute on an input to prevent user input and trigger a slightly different look.</p>

<form class="bs-example">
    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span
                class="s">"form-control"</span> <span class="na">id=</span><span class="s">"disabledInput"</span> <span
                class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span
                class="s">"Disabled input here..."</span> <span class="na">disabled</span><span class="nt">&gt;</span>
        </code></pre>
</div>

<h3 id="forms-disabled-fieldsets">Disabled fieldsets</h3>

<p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within the
    <code>&lt;fieldset&gt;</code> at once.</p>

<div class="bs-callout bs-callout-warning">
    <h4>Link functionality of <code>&lt;a&gt;</code> not impacted</h4>

    <p>This class will only change the appearance of <code>&lt;a class="btn btn-default"&gt;</code> buttons, not their
        functionality. Use custom JavaScript to disable links here.</p>
</div>

<div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>

    <p>While Bootstrap will apply these styles in all browsers, Internet Explorer 9 and below don't actually support the
        <code>disabled</code> attribute on a <code>&lt;fieldset&gt;</code>. Use custom JavaScript to disable the
        fieldset in these browsers.</p>
</div>

<form class="bs-example">
    <fieldset disabled="">
        <div class="form-group">
            <label for="disabledTextInput">Disabled input</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
        <div class="form-group">
            <label for="disabledSelect">Disabled select menu</label>
            <select id="disabledSelect" class="form-control">
                <option>Disabled select</option>
            </select>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Can't check this
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span
                class="s">"form-inline"</span> <span class="na">role=</span><span class="s">"form"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;fieldset</span> <span class="na">disabled</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">for=</span><span
                class="s">"disabledTextInput"</span><span class="nt">&gt;</span>Disabled input<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span
                class="na">id=</span><span class="s">"disabledTextInput"</span> <span class="na">class=</span><span
                class="s">"form-control"</span> <span class="na">placeholder=</span><span
                class="s">"Disabled input"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledSelect"</span><span
                class="nt">&gt;</span>Disabled select menu<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"disabledSelect"</span> <span
                class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option&gt;</span>Disabled select<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;/select&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span
                class="nt">&gt;</span> Can't check this
            <span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span
                class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span
                class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/fieldset&gt;</span>
            <span class="nt">&lt;/form&gt;</span>
        </code></pre>
</div>

<h3 id="forms-validation">Validation states</h3>

<p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>,
    <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>,
    and <code>.help-block</code> within that element will receive the validation styles.</p>

<form class="bs-example">
    <div class="form-group has-success">
        <label class="control-label" for="inputSuccess">Input with success</label>
        <input type="text" class="form-control" id="inputSuccess">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning">Input with warning</label>
        <input type="text" class="form-control" id="inputWarning">
    </div>
    <div class="form-group has-error">
        <label class="control-label" for="inputError">Input with error</label>
        <input type="text" class="form-control" id="inputError">
    </div>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"form-group has-success"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span
                class="na">for=</span><span class="s">"inputSuccess"</span><span class="nt">&gt;</span>Input with
            success<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span
                class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span
                class="s">"inputSuccess"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"form-group has-warning"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span
                class="na">for=</span><span class="s">"inputWarning"</span><span class="nt">&gt;</span>Input with
            warning<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span
                class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span
                class="s">"inputWarning"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"form-group has-error"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span
                class="na">for=</span><span class="s">"inputError"</span><span class="nt">&gt;</span>Input with
            error<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span
                class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span
                class="s">"inputError"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>


<h2 id="forms-control-sizes">Control sizing</h2>

<p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like
    <code>.col-lg-*</code>.</p>

<h3>Height sizing</h3>

<p>Create larger or smaller form controls that match button sizes.</p>

<form class="bs-example bs-example-control-sizing">
    <div class="controls docs-input-sizes">
        <input class="form-control input-lg" type="text" placeholder=".input-lg">
        <input type="text" class="form-control" placeholder="Default input">
        <input class="form-control input-sm" type="text" placeholder=".input-sm">

        <select class="form-control input-lg">
            <option value="">.input-lg</option>
        </select>
        <select class="form-control">
            <option value="">Default select</option>
        </select>
        <select class="form-control input-sm">
            <option value="">.input-sm</option>
        </select>
    </div>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span
                class="s">"form-control input-lg"</span> <span class="na">type=</span><span class="s">"text"</span>
            <span class="na">placeholder=</span><span class="s">".input-lg"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span
                class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span
                class="s">"Default input"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span
                class="s">"form-control input-sm"</span> <span class="na">type=</span><span class="s">"text"</span>
            <span class="na">placeholder=</span><span class="s">".input-sm"</span><span class="nt">&gt;</span>

            <span class="nt">&lt;select</span> <span class="na">class=</span><span
                class="s">"form-control input-lg"</span><span class="nt">&gt;</span>...<span
                class="nt">&lt;/select&gt;</span>
            <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span><span
                class="nt">&gt;</span>...<span class="nt">&lt;/select&gt;</span>
            <span class="nt">&lt;select</span> <span class="na">class=</span><span
                class="s">"form-control input-sm"</span><span class="nt">&gt;</span>...<span
                class="nt">&lt;/select&gt;</span>
        </code></pre>
</div>

<h3>Column sizing</h3>

<p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>

<form class="bs-example" style="padding-bottom: 15px;">
    <div class="row">
        <div class="col-lg-2">
            <input type="text" class="form-control" placeholder=".col-lg-2">
        </div>
        <div class="col-lg-3">
            <input type="text" class="form-control" placeholder=".col-lg-3">
        </div>
        <div class="col-lg-4">
            <input type="text" class="form-control" placeholder=".col-lg-4">
        </div>
    </div>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-2"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span
                class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span
                class="s">".col-lg-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-3"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span
                class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span
                class="s">".col-lg-3"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-4"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span
                class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span
                class="s">".col-lg-4"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h2 id="forms-help-text">Help text</h2>

<p>Block level help text for form controls.</p>

<form class="bs-example">
    <input type="text" class="form-control">
    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</form>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span
                class="s">"help-block"</span><span class="nt">&gt;</span>A block of help text that breaks onto a new
            line and may extend beyond one line.<span class="nt">&lt;/span&gt;</span>
        </code></pre>
</div>

</div>