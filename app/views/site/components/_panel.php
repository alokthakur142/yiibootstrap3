<!-- Tables
================================================== -->
<?php
// $gridDataProvider
$mark = new Person();
$mark->firstName = 'Mark';
$mark->lastName = 'Otto';
$mark->language = 'CSS';
$mark->hours = 10;

$jacob = new Person();
$jacob->firstName = 'Jacob';
$jacob->lastName = 'Thornton';
$jacob->language = 'JavaScript';
$jacob->hours = 20;

$stu = new Person();
$stu->firstName = 'Stu';
$stu->lastName = 'Dent';
$stu->language = 'HTML';
$stu->hours = 10;

$persons = array($mark, $jacob, $stu);
$provArray = array();
$a = array(BSHtml::GRID_TYPE_COLUMN_DANGER, BSHtml::GRID_TYPE_COLUMN_WARNING, BSHtml::GRID_TYPE_COLUMN_SUCCESS, BSHtml::GRID_TYPE_COLUMN_ACTIVE, '');
for ($i = 0, $l = 50; $i < $l; $i++) {
    $depth = rand(0, 2);
//    CVarDumper::dump($persons[$depth]->attributes,10,true);
//    exit;
    $person = new Person();
    $person->firstName = $persons[$depth]->firstName;
    $person->lastName = $persons[$depth]->lastName;
    $person->language = $persons[$depth]->language;
    $person->hours = rand(1, 128);
    $person->cssClass = $a[rand(0, 4)];
    $person->id = $i + 1;
    array_push($provArray, $person);
}
$gridDataProvider = new CArrayDataProvider(
    $provArray,
    array(
        'keyField' => 'id', // PRIMARY KEY
        'id' => 'buyers_list',
        'sort' => array(
            'attributes' => array(
                'id'
            ),
        ),
        'pagination' => array(
            'pageSize' => 5,
        ),
    )
);
// $gridColumns
$gridColumns = array(
    'id',
    'firstName',
    'lastName',
);
?>
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="panels" class="page-header">Panels</h1><small>Thx to <?= CHtml::link(' Francis Beresford','https://bitbucket.org/fberesford') ?></small>
    </div>
    <p>By default, all the <code>.panel</code> does is apply some basic border and padding to contain some content.</p>
    <div id="panels-basic" class="bs-example">
        <h3>Basic Example</h3>
        <?php $this->beginWidget('bootstrap.widgets.BsPanel'); ?>
        Panel content
        <?php $this->endWidget(); ?>
        <div class="highlight">
            <pre>
                <code><span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
                            class="pre_blue">beginWidget</span><span class="pre_green">(</span><span
                            class="pre_red">'bootstrap.widgets.BsPanel'</span><span
                            class="pre_green">);<br></span><span class="pre_blue">?&gt;<br></span>Panel&nbsp;content<br><span
                            class="pre_blue">&lt;?php<br>$this</span><span
                            class="pre_green">-&gt;</span><span class="pre_blue">endWidget</span><span
                            class="pre_green">();<br></span><span class="pre_blue">?&gt;</span>
</span>
                </code>
            </pre>
        </div>
    </div>
    <div id="panels-heading" class="bs-example">
        <h3>Panel with heading</h3>
        <p>Easily add a heading container to your panel with <code>.panel-heading</code>. You may also include any <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code> with a <code>.panel-title</code> class to add a pre-styled heading.</p>
        <?php $this->beginWidget('bootstrap.widgets.BsPanel', array(
            'title' => 'Panel title',
        )); ?>
            Panel content
        <?php $this->endWidget(); ?>
        <div class="highlight">
            <pre>
                <code><span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
                            class="pre_blue">beginWidget</span><span class="pre_green">(</span><span
                            class="pre_red">'bootstrap.widgets.BsPanel'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                            class="pre_red">'title'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                            class="pre_red">'Panel&nbsp;title'<br></span><span
                            class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>Panel&nbsp;content<br><span
                            class="pre_blue">&lt;?php<br>$this</span><span
                            class="pre_green">-&gt;</span><span class="pre_blue">endWidget</span><span
                            class="pre_green">();<br></span><span class="pre_blue">?&gt;</span>
</span>
                </code>
            </pre>
        </div>
    </div>
    <div id="panels-footer" class="bs-example">
        <h3>Panel with footer</h3>
        <p>Wrap buttons or secondary text in <code>.panel-footer</code>. Note that panel footers <strong>do not</strong> inherit colors and borders when using contextual variations as they are not meant to be in the foreground.</p>
        <?php $this->beginWidget('bootstrap.widgets.BsPanel', array(
            'footer' => 'Panel footer',
        )); ?>
            Panel Content
        <?php $this->endWidget(); ?>
        <div class="highlight">
            <pre>
                <code><span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
                            class="pre_blue">beginWidget</span><span class="pre_green">(</span><span
                            class="pre_red">'bootstrap.widgets.BsPanel'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                            class="pre_red">'footer'&nbsp;</span><span
                            class="pre_green">=&gt;&nbsp;</span><span
                            class="pre_red">'Panel&nbsp;footer'<br></span><span class="pre_green">));<br></span><span
                            class="pre_blue">?&gt;<br></span>Panel&nbsp;Content<br><span class="pre_blue">&lt;?php<br>$this</span><span
                            class="pre_green">-&gt;</span><span class="pre_blue">endWidget</span><span
                            class="pre_green">();<br></span><span class="pre_blue">?&gt;</span>
</span>
                </code>
            </pre>
        </div>
    </div>
    <div id="panels-alternatives"  class="bs-example">
        <h3>Example of a contextual alternative and table</h3>
        <?php $this->beginWidget('bootstrap.widgets.BsPanel', array(
            'title' => 'Panel title',
            'type' => BSHtml::PANEL_TYPE_PRIMARY,
        )); ?>
        <?php $this->widget('bootstrap.widgets.BsGridView', array(
            'dataProvider' => $gridDataProvider,
            'id' => uniqid('table_'),

            'columns' => $gridColumns,
            'type' => BSHtml::GRID_TYPE_STRIPED
        )); ?>content
        <?php $this->endWidget(); ?>
        <div class="highlight">
            <pre>
                <code><span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
                            class="pre_blue">beginWidget</span><span class="pre_green">(</span><span
                            class="pre_red">'bootstrap.widgets.BsPanel'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                            class="pre_red">'title'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
                            class="pre_red">'Panel&nbsp;title'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                            class="pre_red">'type'&nbsp;</span><span
                            class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span
                            class="pre_green">::</span><span class="pre_blue">PANEL_TYPE_PRIMARY<br></span><span
                            class="pre_green">));<br></span><span class="pre_blue">?&gt;<br></span>Panel&nbsp;content<br><span
                            class="pre_blue">&lt;?php<br>$this</span><span
                            class="pre_green">-&gt;</span><span class="pre_blue">endWidget</span><span
                            class="pre_green">();<br></span><span class="pre_blue">?&gt;</span>
</span>
                </code>
            </pre>
        </div>
    </div>
</div>