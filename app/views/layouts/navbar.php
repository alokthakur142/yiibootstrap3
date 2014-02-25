<?php
function isActive($url){
    if(Yii::app()->request->url === $url){
        return true;
    }
    return false;
}
$urls = [
    [
      'label' => 'CSS',
      'url'   => Yii::app()->baseUrl.'/site/css',
      'active'=> isActive(Yii::app()->baseUrl.'/site/css')
    ],
    [
      'label' => 'Components',
      'url'   => Yii::app()->baseUrl.'/site/components',
      'active'=> isActive(Yii::app()->baseUrl.'/site/components')
    ],
    [
      'label' => 'Javascript',
      'url'   => Yii::app()->baseUrl.'/site/javascript',
      'active'=> isActive(Yii::app()->baseUrl.'/site/javascript')
    ],
    [
      'label' => 'Class Reference',
      'url'   => Yii::app()->baseUrl.'/doc',
      'active'=> isActive(Yii::app()->baseUrl.'/doc')
    ],
    [
        'label'         => CHtml::image(Yii::app()->baseUrl.'/img/bootstrap.png','Bootstrap3 ;)',array('class' => '','height' => 20)),
        'linkOptions'   => ['target' => 'blank'],
        'url'           => 'http://getbootstrap.com',
    ],
    [
        'label'         => CHtml::image(Yii::app()->baseUrl.'/img/yii.png','Yii ;)',array('class' => '','height' => 20)),
        'linkOptions'   => ['target' => 'blank'],
        'url'           => 'http://www.yiiframework.com/extension/yii-bootstrap3-module/',
    ],
    [
        'label'         => CHtml::image(Yii::app()->baseUrl.'/img/bitbucket_logo_landing.png','Bitbucket ;)',array('class' => '','height' => 20)),
        'linkOptions'   => ['target' => 'blank'],
        'url'           => 'https://bitbucket.org/DrMabuse/yii-bootstrap-3-module',
    ],
    [
        'label'         => CHtml::image(Yii::app()->baseUrl.'/img/logo.png','Packagist ;)',array('class' => '','height' => 20)),
        'linkOptions'   => ['target' => 'blank'],
        'url'           => 'https://packagist.org/packages/drmabuse/yii-bootstrap-3-module'

    ]
];
?>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../" class="navbar-brand">Yii Bootstrap3 Module</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items'         => $urls,
                'encodeLabel'  => false,
                'htmlOptions'   => [
                    'class' => 'nav navbar-nav'
                ]
            ));
            ?>
        </nav>
    </div>
</header>
