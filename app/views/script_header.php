<?php
/**
 * User: Pascal Brewing
 * Date: 08.09.13
 * Time: 19:56
 * @package ${DIR}.${NAME}
 * Class ${NAME}
 */
$cs = Yii::app()->clientScript;
$themePath = Yii::app()->baseUrl;

/**
 * StyleSHeets
 */
$cs
    ->registerCssFile($themePath.'/css/bootstrap.css')
    ->registerCssFile($themePath.'/css/bootstrap-theme.css');

/**
 * JavaScripts
 */
//echo CGoogleApi::init();

//echo CHtml::script(
//    CGoogleApi::load('jquery.min','1.8.3')
//);

$cs
    ->registerCoreScript('jquery',CClientScript::POS_END)
    ->registerCoreScript('jquery.ui',CClientScript::POS_END)
    ->registerScriptFile($themePath.'/js/bootstrap.min.js',CClientScript::POS_END)
    ->registerScriptFile($themePath.'/js/holder.js',CClientScript::POS_END)
    ->registerScriptFile($themePath.'/js/holder.js',CClientScript::POS_END)
    ->registerScriptFile('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css',CClientScript::POS_END)
    ->registerScript('tooltip',"$('[data-toggle=\"tooltip\"]').tooltip();",CClientScript::POS_READY)
    ->registerScript('popover',"$('[data-toggle=\"popover\"]').popover();",CClientScript::POS_READY)
    ->registerScript(
        'affix',
        "$('affix').affix({
            offset: {
              top: 100
            , bottom: function () {
                return (this.bottom = $('.bs-footer').outerHeight(true))
              }
            }
        })"
    ,CClientScript::POS_READY);

?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="<?php echo $themePath ?>/js/html5shiv.js"></script>
    <script src="<?php echo $themePath ?>/js/respond.min.js"></script>
<![endif]-->