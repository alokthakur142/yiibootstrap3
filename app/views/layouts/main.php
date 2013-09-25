<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Yii-Bootstrap-3-Module</title>
    <?php $this->renderPartial('//script_header') ?>
</head>
<body>

<div id="wrap">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
            <div class="container ">
                <ul class=" nav navbar-nav hidden-xs hidden-sm">
                    <li>
                        <a href="<?php echo  Yii::app()->createAbsoluteUrl('/') ?>">
                            <h1 style="margin-top: 0">Yii <small>Bootstrap-3-Module</small></h1>
                        </a>
                    </li>
                    <li class=" ">
                        <?php echo BSHtml::link(
                            CHtml::image(
                                Yii::app()->baseUrl.'/img/bootstrap.png',
                                'Yii ;)',
                                array(
                                    'class' => '',
                                    'height' => 30
                                )
                            ),
                            'http://getbootstrap.com',
                            array(
                                'target' => '_blank',
                            )
                        )
                        ?>
                        <?php echo BSHtml::link(
                            CHtml::image(
                                Yii::app()->baseUrl.'/img/yii.png',
                                'Yii ;)',
                                array(
                                    'class' => '',
                                    'height' => 30
                                )
                            ),
                            'http://www.yiiframework.com/extension/yii-bootstrap3-module/',
                            array(
                                'target' => '_blank',
                            )
                        )
                        ?>
                    </li>
                    <li class="">
                        <?php echo BSHtml::link(
                            CHtml::image(
                                Yii::app()->baseUrl.'/img/bitbucket_logo_landing.png',
                                'Bitbucket ;)',
                                array(
                                    'class' => '',
                                    'height' => 30
                                )
                            ),
                            'https://bitbucket.org/DrMabuse/yii-bootstrap-3-module',
                            array(
                                'target' => '_blank',
                            )
                        )
                        ?>
                    </li>
                    <li class="">
                        <?php echo BSHtml::link(
                            CHtml::image(
                                Yii::app()->baseUrl.'/img/logo.png',
                                'Packagist ;)',
                                array(
                                    'class' => '',
                                    'height' => 30
                                )
                            ),
                            'https://packagist.org/packages/drmabuse/yii-bootstrap-3-module',
                            array(
                                'target' => '_blank',
                            )
                        )
                        ?>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php echo BSHtml::link(BSHtml::icon(BSHtml::GLYPHICON_BOOKMARK).' Class Reference','doc',array('style' => 'font-size:16px;margin-top:20px;')) ?>
                    </li>
<!--                    <li class="dropdown">-->
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li><a href="#">Action</a></li>-->
<!--                            <li><a href="#">Another action</a></li>-->
<!--                            <li><a href="#">Something else here</a></li>-->
<!--                            <li><a href="#">Separated link</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                </ul>
            </div>
    </div>

    <!-- Begin page content -->
    <div class="container">
        <?php echo $content ?>
    </div>
</div>

<div id="footer">
    <div class="container">
        <p class="text-muted credit"><?php echo BSHtml::link('Pascal Brewing '.BSHtml::icon(BSHtml::GLYPHICON_COPYRIGHT_MARK),'http://www.pascal-brewing.de') ?></p>
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

