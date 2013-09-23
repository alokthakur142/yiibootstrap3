<div class="row">
    <div class="secondNav">
        <div class="secTop">
            <div class="balance">
                <div class="balInfo">Balance:<span>Apr 21 2012</span></div>
                <div class="balAmount"><span class="balBars"><canvas width="59" height="18" style="display: inline-block; width: 59px; height: 18px; vertical-align: top;"></canvas></span><span>$58,990</span></div>
            </div>
            <a href="#" class="triangle-red"></a>
        </div>
        <?php  $this->beginWidget('zii.widgets.CPortlet', array(
            'title'=>'',
        ));
        ?>
            <?php if(isset($this->menu) && is_array($this->menu)) : ?>
                <?php echo BSHtml::listGroup($this->menu,array('class' => 'affix')); ?>
                <div class="divider"><span></span></div>
            <?php endif; ?>
            <?php if(!empty($this->secondNavPartials)) : ?>
                <?php $max = count($this->secondNavPartials)-1 ?>
                <?php foreach($this->secondNavPartials  as $key =>$value) : ?>
                    <?php if($value['partial'] !== null) : ?>
                        <?php $this->renderPartial($value['partial'],isset($value['params'])?$value['params']:array() ) ?>
                        <div class="clearfix"></div>
                    <?php endif; ?>
                    <?php if($key < $max) : ?>
                        <div class="divider"><span></span></div>
                    <?php endif ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php $this->endWidget(); ?>
        <div class="clearfix"></div>
    </div>
</div>