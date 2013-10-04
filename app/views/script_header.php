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
    ->registerScript('affix',
        "  var _window = $(window)
            var _body   = $(document.body)

            var navHeight = $('.navbar').outerHeight(true) + 10

            _body.scrollspy({
                target: '.bs-sidebar',
                offset: navHeight
            })

            _window.on('load', function () {
                _body.scrollspy('refresh')
            })

            $('.bs-docs-container [href=#]').click(function (e) {
                e.preventDefault()
            })

            // back to top
            setTimeout(function () {
                var _sideBar = $('.bs-sidebar')

                _sideBar.affix({
                    offset: {
                        top: function () {
                            var offsetTop      = _sideBar.offset().top
                            var sideBarMargin  = parseInt(_sideBar.children(0).css('margin-top'), 10)
                            var navOuterHeight = $('.bs-docs-nav').height()

                            return (this.top = offsetTop - navOuterHeight - sideBarMargin)
                        }
                        , bottom: function () {
                            return (this.bottom = $('.bs-footer').outerHeight(true))
                        }
                    }
                })
            }, 100)

            setTimeout(function () {
                $('.bs-top').affix()
            }, 100)

            // tooltip demo
            $('.tooltip-demo').tooltip({
                selector: '[data-toggle=tooltip]',
                container: 'body'
            })

            $('.tooltip-test').tooltip()
            $('.popover-test').popover()

            $('.bs-docs-navbar').tooltip({
                selector: 'a[data-toggle=tooltip]',
                container: '.bs-docs-navbar .nav'
            })

            // popover demo
            $('[data-toggle=popover]')
                .popover()

            // button state demo
            $('#fat-btn')
                .click(function () {
                    var btn = $(this)
                    btn.button('loading')
                    setTimeout(function () {
                        btn.button('reset')
                    }, 3000)
                })

            // carousel demo
            $('.bs-docs-carousel-example').carousel()",
        CClientScript::POS_READY
    );

?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="<?php echo $themePath ?>/js/html5shiv.js"></script>
    <script src="<?php echo $themePath ?>/js/respond.min.js"></script>
<![endif]-->
