<?php
/* @var $this YiiLogController */
/* @var $model YiiLog */


$this->breadcrumbs = array(
    'Yii Logs' => array('index'),
    'Manage',
);

$this->menu = array(
    array('icon' => 'glyphicon glyphicon-home', 'label' => 'Manage YiiLog', 'url' => array('admin')),
    array('icon' => 'glyphicon glyphicon-plus-sign', 'label' => 'Create YiiLog', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search',
    "
    $('.search-button').click(function(){
        $('.search-form').toggle();
            return false;
        });
        $('.search-form form').submit(function(){
            $('#yii-log-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
        return false;
    });"
);
?>
<?php echo BsHtml::pageHeader('Manage', 'Yii Logs') ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo BsHtml::button('Advanced search', array('class' => 'search-button', 'icon' => BsHtml::GLYPHICON_SEARCH, 'color' => BsHtml::BUTTON_COLOR_PRIMARY), '#'); ?></h3>
    </div>
    <div class="panel-body">
        <p>
            You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
                &lt;&gt;</b>
            or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
        </p>

        <div class="search-form" style="display:none">
            <?php $this->renderPartial('_search', array(
                'model' => $model,
            )); ?>
        </div>
        <!-- search-form -->

        <?php $this->widget('bootstrap.widgets.BsGridView', array(
            'id' => 'yii-log-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'id',
                'level',
                'category',
                'logtime',
                'message',
                array(
                    'class' => 'bootstrap.widgets.BsButtonColumn',
                ),
            ),
        )); ?>
    </div>
</div>




