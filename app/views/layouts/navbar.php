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
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Examples <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= Yii::app()->baseUrl.'/site/css' ?>">css examples</a></li>
                        <li><a href="<?= Yii::app()->baseUrl.'/site/components' ?>">components examples</a></li>
                    </ul>
                </li>
                <li>

                </li>
<!--                <li>-->
<!--                    <a href="components">Components</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="../javascript">JavaScript</a>-->
<!--                </li>-->
                <li>
                    <a href="/doc">Class Reference</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<?php //$this->widget('bootstrap.widgets.BsNavbar', array(
//    'brandLabel' => 'Title',
//    'display' => null, // default is static to top
//    'htmlOptions' => array(
//        'class' => 'navbar-fixed-top bs-docs-nav'
//    ),
//    'items' => array(
//        array(
//            'class' => 'bootstrap.widgets.BsNav',
//            'items' => array(
//                array('label' => 'Home', 'url' => '#', 'active' => true),
//                array('label' => 'Link', 'url' => '#'),
//                array('label' => 'Link', 'url' => '#'),
//            ),
//        ),
//    ),
//)); ?>