
<!-- Progress bars
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="progress">Progress bars</h1>
    </div>
    <p class="lead">Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>

    <div class="bs-callout bs-callout-danger">
        <h4>Cross-browser compatibility</h4>
        <p>Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations.</p>
    </div>

    <h3 id="progress-basic">Basic example</h3>
    <p>Default progress bar.</p>
    <div class="bs-example">
        <?php echo BSHtml::progressBar(
            60

        ); ?>
    </div>
<!--    <div class="highlight"><pre></pre></div>-->

    <h3 id="progress-alternatives">Contextual alternatives</h3>
    <p>Progress bars use some of the same button and alert classes for consistent styles.</p>
    <div class="bs-example">
        <?php echo BSHtml::progressBar(
            20,
            array(
                'color' => BSHtml::PROGRESS_COLOR_SUCCESS
            )
        ); ?>
        <?php echo BSHtml::progressBar(
            40,
            array(
                'color' => BSHtml::PROGRESS_COLOR_INFO
            )
        ); ?>
        <?php echo BSHtml::progressBar(
            60,
            array(
                'color' => BSHtml::PROGRESS_COLOR_WARNING
            )
        ); ?>
        <?php echo BSHtml::progressBar(
            80,
            array(
                'color' => BSHtml::PROGRESS_COLOR_DANGER
            )
        ); ?>
    </div>
<!--    <div class="highlight"><pre></pre></div>-->

    <h3 id="progress-striped">Striped</h3>
    <p>Uses a gradient to create a striped effect. Not available in IE8.</p>
    <div class="bs-example">
        <?php echo BSHtml::progressBar(
            20,
            array(
                'color' => BSHtml::PROGRESS_COLOR_SUCCESS,
                'striped' => true
            )
        ); ?>
        <?php echo BSHtml::progressBar(
            40,
            array(
                'color' => BSHtml::PROGRESS_COLOR_INFO,
                'striped' => true
            )
        ); ?>
        <?php echo BSHtml::progressBar(
            60,
            array(
                'color' => BSHtml::PROGRESS_COLOR_WARNING,
                'striped' => true
            )
        ); ?>
        <?php echo BSHtml::progressBar(
            80,
            array(
                'color' => BSHtml::PROGRESS_COLOR_DANGER,
                'striped' => true
            )
        ); ?>
    </div>
<!--    <div class="highlight"><pre></pre></div>-->

    <h3 id="progress-animated">Animated</h3>
    <p>Add <code>.active</code> to <code>.progress-striped</code> to animate the stripes right to left. Not available in all versions of IE.</p>
    <div class="bs-example">
        <?php echo BSHtml::progressBar(
            20,
            array(
                'striped' => true,
                'active' => true
            )
        ); ?>
    </div>
<!--    <div class="highlight"><pre></pre></div>-->

    <h3 id="progress-stacked">Stacked</h3>
    <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>
    <div class="bs-example">
        <?php echo BSHtml::stackedProgressBar(
            array(
                array('color' => BSHtml::PROGRESS_COLOR_SUCCESS, 'width' => 35),
                array('color' => BSHtml::PROGRESS_COLOR_WARNING, 'width' => 20),
                array('color' => BSHtml::PROGRESS_COLOR_DANGER, 'width' => 10),
            )
        ); ?>
    </div>
<!--    <div class="highlight"><pre></pre></div>-->
</div>
