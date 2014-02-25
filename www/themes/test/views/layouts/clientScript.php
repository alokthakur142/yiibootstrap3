<?php
$cs         = Yii::app()->clientScript;
$themePath  = Yii::app()->theme->baseUrl;
$version    = trim(str_replace(' Version ', '', Yii::app()->params->version));

//CSS
if (YII_DEBUG) {
    $cs
        ->registerCssFile($themePath . '/bower_components/bootstrap-sass/dist/css/bootstrap.min.css');
} else {
    $cs
        ->registerCssFile($themePath . '/bower_components/bootstrap-sass/dist/css/bootstrap.min.css')
        ->registerCssFile($themePath . '/bower_components/bootstrap-sass/examples/grid/grid.css');
}
//jquery
$cs
    ->registerCoreScript('jquery', CClientScript::POS_END);


if (YII_DEBUG) {

} else {

}
$cs
    ->registerScriptFile('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css', CClientScript::POS_END)
    ->registerScriptFile($themePath.'/bower_components/handlebars/handlebars.runtime.js', CClientScript::POS_END)
//    ->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();", CClientScript::POS_READY)
//    ->registerScript('popover', "$('[data-toggle=\"popover\"]').popover();", CClientScript::POS_READY)
    ->registerScript('analytics',
        "
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-34355526-3', 'pascal-brewing.de');
          ga('send', 'pageview');
          ga('set', 'anonymizeIp', true);
        "
        , CClientScript::POS_END
    );
?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->baseUrl ?>/js/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->baseUrl ?>/js/respond.min.js"></script>
<![endif]

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
