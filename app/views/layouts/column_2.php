<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
        <?php echo $content ?>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 hidden-xs hidden-sm">
        <?php $this->renderPartial('//layouts_column_2/sidebar') ?>
    </div>
</div>
<?php $this->endContent(); ?>