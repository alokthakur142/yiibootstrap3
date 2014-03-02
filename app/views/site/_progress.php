<?php echo BsHtml::progressBar(
    90,
    array(
        'color' => BsHtml::PROGRESS_COLOR_INFO
    )
); ?>

<?php echo BsHtml::progressBar(
    60,
    array(
        'color' => BsHtml::PROGRESS_COLOR_SUCCESS
    )
); ?>


<?php echo BsHtml::progressBar(
    40,
    array(
        'color' => BsHtml::PROGRESS_COLOR_DEFAULT
    )
); ?>


<?php echo BsHtml::progressBar(
    80,
    array(
        'color' => BsHtml::PROGRESS_COLOR_WARNING
    )
); ?>


<?php echo BsHtml::progressBar(
    20,
    array(
        'color' => BsHtml::PROGRESS_COLOR_DANGER
    )
); ?>


<?php echo BsHtml::stackedProgressBar(
    array(
        array('color' => BsHtml::PROGRESS_COLOR_SUCCESS, 'width' => 35),
        array('color' => BsHtml::PROGRESS_COLOR_WARNING, 'width' => 20),
        array('color' => BsHtml::PROGRESS_COLOR_DANGER, 'width' => 10),
    )
); ?>
<pre class="pre-scrollable hidden-sm hidden-xs  linenums prettyprint lang-py prettyprint lang-py">
&lt;?php echo BsHtml::progressBar(
    90,
    array(
        'color' => BsHtml::PROGRESS_COLOR_INFO
    )
); ?&gt;


&lt;?php echo BsHtml::progressBar(
    60,
    array(
        'color' => BsHtml::PROGRESS_COLOR_SUCCESS
    )
); ?&gt;


&lt;?php echo BsHtml::progressBar(
    40,
    array(
        'color' => BsHtml::PROGRESS_COLOR_DEFAULT
    )
); ?&gt;


&lt;?php echo BsHtml::progressBar(
    80,
    array(
        'color' => BsHtml::PROGRESS_COLOR_WARNING
    )
); ?&gt;


&lt;?php echo BsHtml::progressBar(
    20,
    array(
        'color' => BsHtml::PROGRESS_COLOR_DANGER
    )
); ?&gt;


&lt;?php echo BsHtml::stackedProgressBar(
    array(
        array('color' => BsHtml::PROGRESS_COLOR_SUCCESS, 'width' => 35),
        array('color' => BsHtml::PROGRESS_COLOR_WARNING, 'width' => 20),
        array('color' => BsHtml::PROGRESS_COLOR_DANGER, 'width' => 10),
    )
); ?&gt;
</pre>
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <div class="progress-radial progress-danger-25">
        <div class="overlay">25%</div>
    </div>
    <div class="progress-radial progress-info-50">
        <div class="overlay">50%</div>
    </div>
    <div class="progress-radial progress-75">
        <div class="overlay">75%</div>
    </div>
    <div class="progress-radial progress-100">
        <div class="overlay">100%</div>
    </div>
</div>
