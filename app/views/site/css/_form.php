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
<div class="highlight"><pre class="linenums prettyprint ">
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
<div class="highlight"><pre class="linenums prettyprint ">
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
    <?php echo $form->dropDownListControlGroup($model, 'profile',
        array('1', '2', '3', '4', '5'),
        array('empty' => 'Something ...')
    ); ?>
    <?php echo $form->dropDownListControlGroup($model, 'profile',
        array('1', '2', '3', '4', '5'), array('multiple' => true)); ?>

    <?php echo $form->checkBoxControlGroup($model, 'profile'); ?>
    <?php echo $form->inlineCheckBoxListControlGroup($model, 'profile', array('1', '2', '3')); ?>
    <?php echo $form->checkBoxListControlGroup($model, 'profile',
        array("Option one is this and that—be sure to include why it's great")); ?>

    <?php echo $form->radioButtonControlGroup($model, 'profile'); ?>
    <?php echo $form->radioButtonListControlGroup($model, 'profile', array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can is something else and selecting it will deselect option one',
    )); ?>
</fieldset>
    <?php echo BSHtml::formActions(array(
        BSHtml::submitButton('Submit', array('color' => BSHtml::BUTTON_COLOR_PRIMARY)),
    )); ?>

<?php $this->endWidget(); ?>
<!-- /example -->
<div class="highlight"><pre class="linenums prettyprint ">
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
    &lt;?php echo $form-&gt;checkBoxControlGroup($model, 'profile'); ?&gt;
    &lt;?php echo $form-&gt;inlineCheckBoxListControlGroup($model, 'profile', array('1', '2', '3')); ?&gt;
    &lt;?php echo $form-&gt;checkBoxListControlGroup($model, 'profile',
        array("Option one is this and that—be sure to include why it's great")); ?&gt;

    &lt;?php echo $form-&gt;radioButtonControlGroup($model, 'profile'); ?&gt;
    &lt;?php echo $form-&gt;radioButtonListControlGroup($model, 'profile', array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can is something else and selecting it will deselect option one',
    )); ?&gt;
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
    <pre class="linenums prettyprint ">
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
    <pre class="linenums prettyprint ">
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
<?php echo $form->radioButtonListControlGroup($model, 'profile', array(
    'Option one is this and that—be sure to include why it\'s great',
    'Option two can is something else and selecting it will deselect option one',
)); ?>
<?php $this->endWidget() ?>

<div class="highlight">
    <pre class="linenums prettyprint ">
        &lt;?php $form = $this-&gt;beginWidget('bootstrap.widgets.BsActiveForm',
            array(
                'enableAjaxValidation' =&gt; true,
                'id' =&gt; uniqid('user_'),

            )
        ); ?&gt;
       &lt;?php echo $form-&gt;checkBoxControlGroup($model, 'profile'); ?&gt;
    &lt;?php echo $form-&gt;inlineCheckBoxListControlGroup($model, 'profile', array('1', '2', '3')); ?&gt;
    &lt;?php echo $form-&gt;checkBoxListControlGroup($model, 'profile',
        array("Option one is this and that—be sure to include why it's great")); ?&gt;

    &lt;?php echo $form-&gt;radioButtonControlGroup($model, 'profile'); ?&gt;
    &lt;?php echo $form-&gt;radioButtonListControlGroup($model, 'profile', array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can is something else and selecting it will deselect option one',
    )); ?&gt;
        &lt;?php $this-&gt;endWidget() ?&gt;
    </pre>
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
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example bs-example-control-sizing'
        )
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username',
    array(
        'disabled' => true,
    )
); ?>

<?php $this->endWidget() ?>
<div class="highlight">
    <pre class="linenums prettyprint ">
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username',
    array(
        'disabled' => true,
    )));
?&gt;
    </pre>
</div>

<h3 id="forms-validation">Validation states</h3>

<p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>,
    <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>,
    and <code>.help-block</code> within that element will receive the validation styles.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'layout' => BSHtml::FORM_LAYOUT_HORIZONTAL,
        'htmlOptions' => array(
            'class' => 'bs-example bs-example-control-sizing'
        )
    )
); ?>
    <?php echo $form->textFieldControlGroup($model, 'username',
        array(
            'controlOptions' => array('class' => 'has-success col-lg-10'),
        )
    ); ?>
    <?php echo $form->textFieldControlGroup($model, 'username',
        array(
            'groupOptions' => array('class' => 'has-success'),
        )
    ); ?>
    <?php echo $form->textFieldControlGroup($model, 'username',
        array(
            'controlOptions' => array('class' => 'has-warning col-lg-10'),
        )
    ); ?>
    <?php echo $form->textFieldControlGroup($model, 'username',
        array(
            'controlOptions' => array('class' => 'has-error col-lg-10'),
        )
    ); ?>
<?php $this->endWidget() ?>
<div class="highlight">
    <pre class="linenums prettyprint ">
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username',
    array(
        'controlOptions' => array('class' => 'has-sucess col-lg-10'),
    )));
?&gt;
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username',
    array(
        'groupOptions' => array('class' => 'has-sucess'),
    )));
?&gt;
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username',
    array(
        'controlOptions' => array('class' => 'has-warning col-lg-10'),
    )));
?&gt;
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username',
    array(
        'controlOptions' => array('class' => 'has-error col-lg-10'),
    )));
?&gt;
    </pre>
</div>


<h2 id="forms-control-sizes">Control sizing</h2>

<p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like
    <code>.col-lg-*</code>.</p>

<h3>Height sizing</h3>

<p>Create larger or smaller form controls that match button sizes.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example bs-example-control-sizing'
        )
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username',array('class' => BSHtml::INPUT_SIZE_LG)); ?>
<?php echo $form->textFieldControlGroup($model, 'username'); ?>
<?php echo $form->textFieldControlGroup($model, 'username',array('class' => BSHtml::INPUT_SIZE_SM)); ?>
<?php echo $form->dropDownListControlGroup($model, 'profile',
    array('1', '2', '3', '4', '5'),
    array('empty' => 'Something ...','class' => BSHtml::INPUT_SIZE_LG)
); ?>
<?php echo $form->dropDownListControlGroup($model, 'profile',
    array('1', '2', '3', '4', '5'),
    array('empty' => 'Something ...')
); ?>
<?php echo $form->dropDownListControlGroup($model, 'profile',
    array('1', '2', '3', '4', '5'),
    array('empty' => 'Something ...','class' => BSHtml::INPUT_SIZE_SM)
); ?>
<?php $this->endWidget() ?>
<div class="highlight">
    <pre class="linenums prettyprint ">
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username',
        array('class' =&gt; BSHtml::INPUT_SIZE_LG));
?&gt;
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username'); ?&gt;
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username',
        array('class' =&gt; BSHtml::INPUT_SIZE_SM));
?&gt;
&lt;?php echo $form-&gt;dropDownListControlGroup($model, 'profile',
    array('1', '2', '3', '4', '5'),
    array('empty' =&gt; 'Something ...','class' =&gt; BSHtml::INPUT_SIZE_LG)
); ?&gt;
&lt;?php echo $form-&gt;dropDownListControlGroup($model, 'profile',
    array('1', '2', '3', '4', '5'),
    array('empty' =&gt; 'Something ...')
); ?&gt;
&lt;?php echo $form-&gt;dropDownListControlGroup($model, 'profile',
    array('1', '2', '3', '4', '5'),
    array('empty' =&gt; 'Something ...','class' =&gt; BSHtml::INPUT_SIZE_SM)
); ?&gt;
    </pre>
</div>

<h3>Column sizing</h3>

<p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example bs-example-control-sizing'
        )
    )
); ?>
<div class="row">
    <?php echo $form->textFieldControlGroup($model, 'username',
        array(
            'placeholder' => 'col-lg-2',
            'controlOptions' => array('class' => 'col-lg-12'),
            'groupOptions' => array('class' => 'col-lg-2')
        )
    ); ?>
    <?php echo $form->textFieldControlGroup($model, 'username',
        array(
            'placeholder' => 'col-lg-6',
            'controlOptions' => array('class' => 'col-lg-12'),
            'groupOptions' => array('class' => 'col-lg-6')
        )
    ); ?>
</div>
<?php $this->endWidget() ?>
<div class="highlight">
    <pre class="linenums prettyprint ">
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username',
    array('groupOptions' =&gt; array('class' =&gt; 'col-lg-2',
        'controlOptions' => array('class' => 'col-lg-12')
    )));
?&gt;
    </pre>
</div>


<h2 id="forms-help-text">Help text</h2>

<p>Block level help text for form controls.</p>
<?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm',
    array(
        'enableAjaxValidation' => true,
        'id' => uniqid('user_'),
        'htmlOptions' => array(
            'class' => 'bs-example'
        )
    )
); ?>
<?php echo $form->textFieldControlGroup($model, 'username',
    array(
        'placeholder' => '',
        'help' => 'A block of help text that breaks onto a new line and may extend beyond one line.'
    )
); ?>
<?php $this->endWidget() ?>
<div class="highlight">
    <pre class="linenums prettyprint ">
&lt;?php echo $form-&gt;textFieldControlGroup($model, 'username',
    array(
        'placeholder' => '',
        'help' => 'A block of help text that breaks onto a new line and may extend beyond one line.'
    )));
?&gt;
    </pre>
</div>
</div>