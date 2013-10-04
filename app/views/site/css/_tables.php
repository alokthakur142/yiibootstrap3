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
$a = array(BSHtml::GRID_TYPE_COLUMN_DANGER,BSHtml::GRID_TYPE_COLUMN_WARNING,BSHtml::GRID_TYPE_COLUMN_SUCCESS,BSHtml::GRID_TYPE_COLUMN_ACTIVE,'');
for($i = 0,$l=50;$i < $l;$i++){
    $depth = rand(0,2);
//    CVarDumper::dump($persons[$depth]->attributes,10,true);
//    exit;
    $person = new Person();
    $person->firstName= $persons[$depth]->firstName;
    $person->lastName= $persons[$depth]->lastName;
    $person->language= $persons[$depth]->language;
    $person->hours = rand(1,128);
    $person->cssClass = $a[rand(0,4)];
    $person->id = $i+1;
    array_push($provArray,$person);
}
$gridDataProvider = new CArrayDataProvider(
    $provArray,
    array(
        'keyField' => 'id',         // PRIMARY KEY
        'id' => 'buyers_list',
        'sort'=>array(
            'attributes'=>array(
                'id'
            ),
        ),
        'pagination'=>array(
            'pageSize'=>5,
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
        'id' => uniqid('table_'),
        'dataProvider' => $gridDataProvider,
        'columns' => $gridColumns,
    )); ?>
</div>
<!-- /example -->
<div class="highlight">
    <pre class="linenums prettyprint lang-py">
&lt;?php $this->widget('bootstrap.widgets.BsGridView', array(
    'dataProvider' => $gridDataProvider,
    
    'columns' => $gridColumns,
)); ?&gt;
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
<pre class="linenums prettyprint lang-py">
&lt;?php $this->widget('bootstrap.widgets.BsGridView', array(
'dataProvider' => $gridDataProvider,

'columns' => $gridColumns,
'type' => BSHtml::GRID_TYPE_STRIPED
)); ?&gt;
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
<pre class="linenums prettyprint lang-py">
&lt;?php $this->widget('bootstrap.widgets.BsGridView', array(
'dataProvider' => $gridDataProvider,

'columns' => $gridColumns,
'type' => BSHtml::GRID_TYPE_BORDERED
)); ?&gt;
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
<pre class="linenums prettyprint lang-py">
&lt;?php $this->widget('bootstrap.widgets.BsGridView', array(
'dataProvider' => $gridDataProvider,

'columns' => $gridColumns,
'type' => BSHtml::GRID_TYPE_HOVER
)); ?&gt;
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
<pre class="linenums prettyprint lang-py">
&lt;?php $this->widget('bootstrap.widgets.BsGridView', array(
'dataProvider' => $gridDataProvider,

'columns' => $gridColumns,
'type' => BSHtml::GRID_TYPE_CONDENSED
)); ?&gt;
</pre>
</div>


<h2 id="tables-contextual-classes">Contextual classes</h2>

<p>Use contextual classes to color table rows or individual cells.</p>
<div class="bs-example">
    <?php
    $grid_DataProvider = new CArrayDataProvider(
        $provArray,
        array(
            'keyField' => 'id',         // PRIMARY KEY
            'id' => 'buyers_list',
            'sort'=>array(
                'attributes'=>array(
                    'id'
                ),
            ),
            'pagination'=>array(
                'pageSize'=>50,
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
        'type' => BSHtml::GRID_TYPE_CONDENSED.' '.BSHtml::GRID_TYPE_BORDERED.' '.BSHtml::GRID_TYPE_STRIPED
    )); ?>
</div>
<!-- /example -->
<div class="highlight">
<pre class="linenums prettyprint lang-py">
 &lt;?php $col = array(
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
    );
    $this->widget('bootstrap.widgets.BsGridView', array(
        'dataProvider' => $grid_DataProvider,
        'id' => uniqid('table_'),
        'template' => '{items}',
        'columns' => $col,
        'type' => BSHtml::GRID_TYPE_CONDENSED.' '.BSHtml::GRID_TYPE_BORDERED.' '.BSHtml::GRID_TYPE_STRIPED
    )); ?&gt;
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
<pre class="linenums prettyprint lang-py">
&lt;?php $this->widget('bootstrap.widgets.BsGridView', array(
'dataProvider' => $gridDataProvider,

'columns' => $gridColumns,
'type' => BSHtml::GRID_TYPE_RESPONSIVE
)); ?&gt;
</pre>
</div>

</div>