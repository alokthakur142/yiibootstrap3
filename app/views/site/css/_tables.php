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
    <h1 id="tables">Tables</h1>
</div>

<h2 id="tables-example">Basic example</h2>

<p>For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
    It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date
    pickers, we've opted to isolate our custom table styles.</p>

<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsGridView', array(
        'dataProvider' => $gridDataProvider,

        'columns' => $gridColumns,
    )); ?>
</div>
<!-- /example -->
<div class="highlight">
    <pre>

            <span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
                    class="pre_blue">widget</span><span
                    class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsGridView'</span><span
                    class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'id'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span>
    <span class
          ="pre_blue">uniqid</span><span class="pre_green">(</span><span class="pre_red">'table_'</span><span
                    class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'dataProvider'&nbsp;</span><span
                    class="pre_green">=&gt;&nbsp;</span>
    <span class
          ="pre_blue">$gridDataProvider</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
                    class="pre_red">'columns'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span>
    <span class
          ="pre_blue">$gridColumns<br></span><span class="pre_green">));<br></span>
    <span class
          ="pre_blue">?&gt;</span>
        </span>
    </pre>
</div>


<h2 id="tables-striped">Striped rows</h2>

<p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>

<div class="bs-callout bs-callout-danger">
    <h4>Cross-browser compatibility</h4>

    <p>Striped tables are styled via the <code>:nth-child</code> CSS selector, which is not available in Internet
        Explorer 8.</p>
</div>
<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsGridView', array(
        'dataProvider' => $gridDataProvider,
        'id' => uniqid('table_'),

        'columns' => $gridColumns,
        'type' => BSHtml::GRID_TYPE_STRIPED
    )); ?>
</div>
<!-- /example -->
<div class="highlight">
<pre>
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
        class="pre_blue">widget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsGridView'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'dataProvider'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridDataProvider</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span class="pre_green">(</span><span
        class="pre_red">'table_'</span><span
        class="pre_green">),<br>&nbsp;&nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'columns'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridColumns</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'type'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
        class="pre_blue">GRID_TYPE_STRIPED<br></span>
    <span class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
    </span>
</pre>
</div>


<h2 id="tables-bordered">Bordered table</h2>

<p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>

<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsGridView', array(
        'dataProvider' => $gridDataProvider,
        'id' => uniqid('table_'),

        'columns' => $gridColumns,
        'type' => BSHtml::GRID_TYPE_BORDERED
    )); ?>
</div>
<!-- /example -->
<div class="highlight">
<pre>
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
        class="pre_blue">widget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsGridView'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'dataProvider'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridDataProvider</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span class="pre_green">(</span><span
        class="pre_red">'table_'</span><span
        class="pre_green">),<br>&nbsp;&nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'columns'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridColumns</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'type'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
        class="pre_blue">GRID_TYPE_BORDERED<br></span>
    <span class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
    </span>
</pre>
</div>


<h2 id="tables-hover-rows">Hover rows</h2>

<p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>

<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsGridView', array(
        'dataProvider' => $gridDataProvider,
        'id' => uniqid('table_'),

        'columns' => $gridColumns,
        'type' => BSHtml::GRID_TYPE_HOVER
    )); ?>
</div>
<!-- /example -->
<div class="highlight">
<pre>
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
        class="pre_blue">widget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsGridView'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'dataProvider'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridDataProvider</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span class="pre_green">(</span><span
        class="pre_red">'table_'</span><span
        class="pre_green">),<br>&nbsp;&nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'columns'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridColumns</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'type'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
        class="pre_blue">GRID_TYPE_HOVER<br></span>
    <span class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
    </span>
</pre>
</div>


<h2 id="tables-condensed">Condensed table</h2>

<p>Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.</p>

<div class="bs-example">
    <?php $this->widget('bootstrap.widgets.BsGridView', array(
        'dataProvider' => $gridDataProvider,
        'id' => uniqid('table_'),

        'columns' => $gridColumns,
        'type' => BSHtml::GRID_TYPE_CONDENSED
    )); ?>
</div>
<!-- /example -->
<div class="highlight">
<pre>
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
        class="pre_blue">widget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsGridView'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'dataProvider'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridDataProvider</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span class="pre_green">(</span><span
        class="pre_red">'table_'</span><span
        class="pre_green">),<br>&nbsp;&nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'columns'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridColumns</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'type'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
        class="pre_blue">GRID_TYPE_CONDENSED<br></span>
    <span class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
    </span>
</pre>
</div>


<h2 id="tables-contextual-classes">Contextual classes</h2>

<p>Use contextual classes to color table rows or individual cells.</p>

<div class="bs-example">
    <?php
    $grid_DataProvider = new CArrayDataProvider(
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
                'pageSize' => 50,
            ),
        )
    );
    $col = array(
        array(
            'name' => 'id',
            'cssClassExpression' => '$data->cssClass',
            'value' => 'BSHtml::badge($data->id)',
            'type' => 'raw'
        ),
        array(
            'name' => 'firstName',
            'cssClassExpression' => '$data->cssClass',
            'value' => '$data->firstName',
            'type' => 'raw'
        ),
        array(
            'name' => 'lastName',
            'cssClassExpression' => '$data->cssClass',
            'value' => '$data->lastName',
            'type' => 'raw'
        )
    );?>
    <?php $this->widget('bootstrap.widgets.BsGridView', array(
        'dataProvider' => $grid_DataProvider,
        'id' => uniqid('table_'),
        'template' => '{items}',
        'columns' => $col,
        'type' => BSHtml::GRID_TYPE_CONDENSED . ' ' . BSHtml::GRID_TYPE_BORDERED . ' ' . BSHtml::GRID_TYPE_STRIPED
    )); ?>
</div>
<!-- /example -->
<div class="highlight">
<pre>
 <span class="pre_black">
<span class="pre_blue">&lt;?php<br>$grid_DataProvider&nbsp;</span><span class="pre_green">=&nbsp;new&nbsp;</span><span
         class="pre_blue">CArrayDataProvider</span><span
         class="pre_green">(</span><span class="pre_blue">$provArray</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
         class="pre_red">'keyField'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'id'</span><span class="pre_green">,&nbsp;</span><span style="color: #FF8000;">//&nbsp;PRIMARY&nbsp;KEY<br>&nbsp;&nbsp; &nbsp;</span><span
         class="pre_red">'id'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'buyers_list'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
         class="pre_red">'sort'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'attributes'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'id'<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span class="pre_green">)<br>&nbsp;&nbsp; &nbsp;),<br>&nbsp;&nbsp; &nbsp;</span><span
         class="pre_red">'pagination'&nbsp;</span><span class="pre_green">=&gt;&nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'pageSize'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">50<br>&nbsp;&nbsp; &nbsp;</span>
    <span class="pre_green">)<br>));<br></span><span class="pre_blue">$col &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
    <span class="pre_green">=&nbsp;array(<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'name'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'id'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'cssClassExpression'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'$data-&gt;cssClass'</span><span
         class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'value'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'BSHtml::badge($data-&gt;id)'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'raw'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'name'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'firstName'</span><span
         class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'cssClassExpression'&nbsp;</span><span
         class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'$data-&gt;cssClass'</span><span
         class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'value'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'$data-&gt;firstName'</span><span
         class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'raw'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;array(<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'name'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'lastName'</span><span
         class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'cssClassExpression'&nbsp;</span><span
         class="pre_green">=&gt;&nbsp;</span><span class="pre_red">'$data-&gt;cssClass'</span><span
         class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'value'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'$data-&gt;lastName'</span><span
         class="pre_green">,<br>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span><span
         class="pre_red">'type'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'raw'<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_green">)<br>);<br></span><span
         class="pre_blue">?&gt;<br>&lt;?php<br>$this</span>
    <span class="pre_green">-&gt;</span><span class="pre_blue">widget</span><span class="pre_green">(</span><span
         class="pre_red">'bootstrap.widgets.BsGridView'</span><span class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
         class="pre_red">'dataProvider'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$grid_DataProvider</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
         class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span class="pre_green">(</span><span
         class="pre_red">'table_'</span><span class="pre_green">),<br>&nbsp;&nbsp; &nbsp;</span><span
         class="pre_red">'template'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_red">'{items}'</span><span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span
         class="pre_red">'columns'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span
         class="pre_blue">$col</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'type'&nbsp;</span><span
         class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
         class="pre_blue">GRID_TYPE_CONDENSED&nbsp;</span>
    <span class="pre_green">.&nbsp;</span><span class="pre_red">'&nbsp;'&nbsp;</span><span
         class="pre_green">.&nbsp;</span><span class="pre_blue">BSHtml</span>
    <span class="pre_green">::</span><span class="pre_blue">GRID_TYPE_BORDERED&nbsp;</span><span class="pre_green">.&nbsp;</span><span
         class="pre_red">'&nbsp;'&nbsp;</span><span class="pre_green">.&nbsp;</span><span class="pre_blue">BSHtml</span>
    <span class="pre_green">::</span><span class="pre_blue">GRID_TYPE_STRIPED<br></span><span
         class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
    </span>
</pre>
</div>

<h2 id="tables-responsive">Responsive tables</h2>

<p>Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll
    horizontally up to small devices (under 768px). When viewing on anything larger than 768px wide, you will not see
    any difference in these tables.</p>

<div class="bs-example">

    <?php $this->widget('bootstrap.widgets.BsGridView', array(
        'dataProvider' => $gridDataProvider,
        'id' => uniqid('table_'),

        'columns' => $gridColumns,
        'type' => BSHtml::GRID_TYPE_RESPONSIVE
    )); ?>
</div>
<!-- /example -->
<div class="highlight">
<pre>
<span class="pre_black">
<span class="pre_blue">&lt;?php<br>$this</span><span class="pre_green">-&gt;</span><span
        class="pre_blue">widget</span><span
        class="pre_green">(</span><span class="pre_red">'bootstrap.widgets.BsGridView'</span><span
        class="pre_green">,&nbsp;array(<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'dataProvider'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridDataProvider</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'id'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">uniqid</span><span class="pre_green">(</span><span
        class="pre_red">'table_'</span><span
        class="pre_green">),<br>&nbsp;&nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp;</span><span
        class="pre_red">'columns'&nbsp;</span><span class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">$gridColumns</span>
    <span class="pre_green">,<br>&nbsp;&nbsp; &nbsp;</span><span class="pre_red">'type'&nbsp;</span><span
        class="pre_green">=&gt;&nbsp;</span><span class="pre_blue">BSHtml</span><span class="pre_green">::</span><span
        class="pre_blue">GRID_TYPE_RESPONSIVE<br></span>
    <span class="pre_green">));<br></span><span class="pre_blue">?&gt;</span>
    </span>
</pre>
</div>

</div>