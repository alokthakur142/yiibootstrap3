<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Layout Column2 for Presentage</title>
    <?php $this->renderPartial('//script_header') ?>
</head>
<body>

<div id="wrap">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="page-header">
                <ul class="list-inline list-unstyled">
                    <li>
                        <h1>Yii <small>Bootstrap-3-Module</small></h1>
                    </li>
                    <li class="text-right">
                        <?php echo BSHtml::link(
                            CHtml::image(
                                Yii::app()->baseUrl.'/img/yii.png',
                                'Yii ;)',
                                array(
                                    'class' => 'img-rounded',
                                    'height' => 40
                                )
                            ),
                            'http://www.yiiframework.com/extension/yii-bootstrap3-module/',
                            array(
                                'target' => '_blank',
                            )
                        )
                        ?>
                    </li>
                    <li class="text-right">
                        <?php echo BSHtml::link(
                            CHtml::image(
                                Yii::app()->baseUrl.'/img/bitbucket_logo_landing.png',
                                'Bitbucket ;)',
                                array(
                                    'class' => 'img-rounded',
                                    'height' => 40
                                )
                            ),
                            'https://bitbucket.org/DrMabuse/yii-bootstrap-3-module-example',
                            array(
                                'target' => '_blank',
                            )
                        )
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Begin page content -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
                <?php echo $content ?>
            </div>
            <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                <?php $this->renderPartial('//layouts_column_2/sidebar') ?>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
    </div>
</div>
<div id="demo_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="clearfix"></div>
</body>
</html>

