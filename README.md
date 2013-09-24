### Config Example
    <?php
    'aliases' => array(
            'bootstrap' => 'application.modules.bootstrap',
    ),
    'modules' => array(
            'bootstrap' => array(
                'class' => 'bootstrap.BootStrapModule'
            ),
    ),
    'components' => array(
            'bsHtml' => array(
                'class' => 'bootstrap.components.BSHtml'
            ),
    )
    ?>
### Forms

    <?php $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
        'layout' => BsHtml::FORM_LAYOUTHORIZONTAL,
    )); ?>

    <fieldset>

        <legend>Legend</legend>

        <?php echo $form->textFieldControlGroup($model, 'textField',
            array('help' => 'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
        <?php echo $form->dropDownListControlGroup($model, 'dropDown',
            array('1', '2', '3', '4', '5'), array('empty' => 'Something ...')); ?>
        <?php echo $form->dropDownListControlGroup($model, 'multiDropDown',
            array('1', '2', '3', '4', '5'), array('multiple' => true)); ?>
        <?php echo $form->fileFieldControlGroup($model, 'fileField'); ?>
        <?php echo $form->textAreaControlGroup($model, 'textArea',
            array('span' => 8, 'rows' => 5)); ?>
        <?php echo $form->uneditableFieldControlGroup($model, 'uneditableField'); ?>
        <?php echo $form->textFieldControlGroup($model, 'disabled', array('disabled' => true)); ?>
        <?php echo $form->textFieldControlGroup($model, 'prepend', array('prepend' => '@')); ?>
        <?php echo $form->textFieldControlGroup($model, 'append', array('append' => '.00')); ?>
        <?php echo $form->checkBoxControlGroup($model, 'disabledCheckbox', array('disabled' => true)); ?>
        <?php echo $form->inlineCheckBoxListControlGroup($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
        <?php echo $form->checkBoxListControlGroup($model, 'checkboxes', array(
            'Option one is this and that—be sure to include why it\'s great',
            'Option two can also be checked and included in form results',
            'Option three can—yes, you guessed it—also be checked and included in form results',
        ), array('help' => '<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>
        <?php echo $form->radioButtonControlGroup($model, 'radioButton'); ?>
        <?php echo $form->radioButtonListControlGroup($model, 'radioButtons', array(
            'Option one is this and that—be sure to include why it\'s great',
            'Option two can is something else and selecting it will deselect option one',
        )); ?>

    </fieldset>

    <?php echo BsHtml::formActions(array(
        BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)),
        BsHtml::resetButton('Reset'),
    )); ?>

    <?php $this->endWidget(); ?>


### Alert

     <?php echo BSHtml::alert(BSHtml::ALERT_COLOR_DANGER, "Sorry, it seems like a(n)  error has occured during your request."); ?>
     <?php echo BSHtml::alert(BSHtml::ALERT_COLOR_INFO, "<strong>Message:</strong> Lorem Ipsum Dolor"); ?>
     <?php echo BSHtml::alert(BSHtml::ALERT_COLOR_DEFAULT, "<strong>Message:</strong> Lorem Ipsum Dolor"); ?>
     <?php echo BSHtml::alert(BSHtml::ALERT_COLOR_WARNING, "<strong>Message:</strong> Lorem Ipsum Dolor"); ?>
     <?php echo BSHtml::alert(BSHtml::ALERT_COLOR_SUCCESS, "<strong>Message:</strong> Lorem Ipsum Dolor"); ?>


### Yii-Buttons


    <?php echo BSHtml::linkButton('Google',array(
        'url' => 'http://www.google.de',
        'target' => '_blank',
        'size' => BSHtml::BUTTON_SIZE_SMALL,

    ))
    ?>
    <?php echo BSHtml::submitButton('BSHtml::submitButton',
        array(
            'color' => BSHtml::BUTTON_COLOR_INFO,
            'confirm' => 'Whooza ?'
        )
    ); ?>
    <?php echo BSHtml::ajaxButton(
        'BSHtml::ajaxButton',
        Yii::app()->createAbsoluteUrl('bootstrap/default/ajaxTest'),
        array(
            'cache' => true,
            'data' => array(
                'message' => 'Lorem Ipsum Message.'
            ),
            'type' => 'POST',
            'success' => 'js:function(data){
                console.log(data);
                $(".modal-body").html(data);
                $("#demo_modal").modal("show");
            }',
        ),
        array(
            'color' => BSHtml::BUTTON_COLOR_INFO,
            'icon' => BSHtml::ICON_BELL
        )
    ); ?>
    <?php echo BSHtml::ajaxLink('BSHtml::ajaxLink',
        Yii::app()->createAbsoluteUrl('bootstrap/default/ajaxTest'),
        array(
            'cache' => true,
            'data' => array(
                'message' => 'Lorem Ipsum Message.'
            ),
            'type' => 'POST',
            'success' => 'js:function(data){
                console.log(data);
            }',
        ),
        array(
            'icon' => BSHtml::ICON_BELL
        )
    ); ?>


### Dropdowns Switch Groups SIZES

    <?php echo BSHtml::checkBox('test',true,array()); ?>
    <?php $this->widget('bootstrap.extensions.ibutton.IButton', array(
        'selector'=>':checkbox',
        'options' =>array(
            'duration' => 250,
            'change'=>'js:function(){}'
        )
    ));?>
    <?php echo BSHtml::buttonDropdown('Left dropup', array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        BSHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    ), array(
        'split' => true,
        'dropup' => true,
        'menuOptions' => array('pull' => BSHtml::PULL_LEFT),
        'size' => BSHtml::BUTTON_SIZE_SMALL,
        'color' =>BSHtml::BUTTON_COLOR_DANGER
    ));
    BSHtml::buttonToolbar(array(
        array('items' => array(
            array('label' => '1'),
            array('label' => '2'),
            array('label' => '3'),
            array('label' => '4'),
        )),
        array('items' => array(
            array('label' => '5'),
            array('label' => '6'),
            array('label' => '7'),
        )),
        array('items' => array(
            array('label' => '8'),
        )),
    ));
    echo BSHtml::buttonGroup(
        array(
            array('label' => '1'),
            array('label' => '2'),
            array('label' => '3'),
            array('label' => '4'),
        )
    );
    echo BSHtml::buttonGroup(array(
            array('label' => 'Left'),
            array('label' => 'Middle'),
            array('label' => 'Right'),
        ), array(
            'toggle' => BSHtml::BUTTON_TOGGLE_RADIO,
            'color' => BSHtml::BUTTON_COLOR_PRIMARY)
        );
    ?>
    <?php echo BSHtml::button(
        'Primary',
        array(
            'color' => BSHtml::BUTTON_COLOR_PRIMARY,
            'size' => BSHtml::BUTTON_SIZE_LARGE
        )
    );
    ?>
    <?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
    <?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
    <?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
    <?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
    <?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
    <?php echo BSHtml::button('Default',array('size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
    <?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>


    <?php echo BSHtml::button(
        'Primary',
        array(
            'color' => BSHtml::BUTTON_COLOR_PRIMARY,
            'size' => BSHtml::BUTTON_SIZE_DEFAULT
        )
    );
    ?>
    <?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER)); ?>//default value BSHtml::BUTTON_SIZE_DEFAULT=''
    <?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING)); ?>
    <?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS)); ?>
    <?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO)); ?>
    <?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE)); ?>
    <?php echo BSHtml::button('Default'); ?>
    <?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK)); ?>


    <?php echo BSHtml::button(
        'Primary',
        array(
            'color' => BSHtml::BUTTON_COLOR_PRIMARY,
            'size' => BSHtml::BUTTON_SIZE_SMALL
        )
    );
    ?>
    <?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
    <?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
    <?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
    <?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
    <?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
    <?php echo BSHtml::button('Default',array('size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
    <?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>


    <?php echo BSHtml::button(
        'Primary',
        array(
            'color' => BSHtml::BUTTON_COLOR_PRIMARY,
            'size' => BSHtml::BUTTON_SIZE_MINI
        )
    );
    ?>
    <?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER,'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
    <?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING,'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
    <?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS,'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
    <?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO,'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
    <?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE,'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
    <?php echo BSHtml::button('Default',array('size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
    <?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK,'size' => BSHtml::BUTTON_SIZE_MINI)); ?>

### Progress
    <?php echo BSHtml::progressBar(
    90,
    array(
    'color' =\> BSHtml::PROGRESS\_COLOR\_INFO
    )
    ); ?\>

    <?php echo BSHtml::progressBar(
    60,
    array(
    'color' =\> BSHtml::PROGRESS\_COLOR\_SUCCESS
    )
    ); ?\>

    <?php echo BSHtml::progressBar(
    40,
    array(
    'color' =\> BSHtml::PROGRESS\_COLOR\_DEFAULT
    )
    ); ?\>

    <?php echo BSHtml::progressBar(
    80,
    array(
    'color' =\> BSHtml::PROGRESS\_COLOR\_WARNING
    )
    ); ?\>

    <?php echo BSHtml::progressBar(
    20,
    array(
    'color' =\> BSHtml::PROGRESS\_COLOR\_DANGER
    )
    ); ?\>

    <?php echo BSHtml::stackedProgressBar(
    array(
    array('color' =\> BSHtml::PROGRESS\_COLOR\_SUCCESS, 'width' =\> 35),
    array('color' =\> BSHtml::PROGRESS\_COLOR\_WARNING, 'width' =\> 20),
    array('color' =\> BSHtml::PROGRESS\_COLOR\_DANGER, 'width' =\> 10),
    )
    ); ?\>

### Pagination

        <?php echo BSHtml::pagination(
        array(
            array('label' => 'Previous', 'url' => '#'),
            array('label' => '1', 'url' => '#','active' => true),
            array('label' => '2', 'url' => '#'),
            array('label' => '3', 'url' => '#'),
            array('label' => '4', 'url' => '#'),
            array('label' => '5', 'url' => '#'),
            array('label' => 'Next', 'url' => '#'),
        ),
        'size' => BSHtml::PAGINATION_SIZE_LARGE
    ); ?>
    <?php echo BSHtml::pagination(
        array(
            array('label' => 'Previous', 'url' => '#'),
            array('label' => '1', 'url' => '#','active' => true),
            array('label' => '2', 'url' => '#'),
            array('label' => '3', 'url' => '#'),
            array('label' => '4', 'url' => '#'),
            array('label' => '5', 'url' => '#'),
            array('label' => 'Next', 'url' => '#'),
        )
    ); ?>
    <?php echo BSHtml::pagination(
        array(
            array('label' => 'Previous', 'url' => '#'),
            array('label' => '1', 'url' => '#','active' => true),
            array('label' => '2', 'url' => '#'),
            array('label' => '3', 'url' => '#'),
            array('label' => '4', 'url' => '#'),
            array('label' => '5', 'url' => '#'),
            array('label' => 'Next', 'url' => '#'),
        ,
        array('size' => BSHtml::PAGINATION_SIZE_SMALL)
    ); ?>

### GridView

    <?php $this->widget('bootstrap.widgets.BsGridView', array(
        'dataProvider' => $gridDataProvider,
        'template' => "{summary}{items}{pager}",
        'columns' => $gridColumns,
        'type' => BSHtml::GRID_TYPE_STRIPED,
    )); ?>

### Extension MiddleNav
    <?php Yii::import('bootstrap.extensions.middlenav.MNav') ?>
    <?php $this->widget('bootstrap.extensions.middlenav.MNav',
        array(
            'type' => MNav::MIDDLE_NAV_R,
                      //MNav::MIDDLE_NAV_FREE,
                      //MNav::MIDDLE_NAV_A,
                      //MNav::MIDDLE_NAV_R,
                      //MNav::MIDDLE_NAV_S
            'items' => array(
                array(
                        'icon' =>'glyphicon glyphicon-barcode ',
                        'url' => 'test',
                        'label' => 'test',
                        'color' => MNav::BUTTON_BLUE_BLIGHT,
                        // MNav::BUTTON_SUCCESS
                        //MNav::BUTTON_BLUE_BLIGHT
                        //MNav::BUTTON_BLUE
                        //MNav::BUTTON_SEA
                        //MNav::BUTTON_BLACK
                        //MNav::BUTTON_GOLD
                        //MNav::BUTTON_DANGER
                        //MNav::BUTTON_GREYISH,
                        'tooltip' => array(
                            'label' => 'test',
                            'placement' => BSHtml::TOOLTIP_PLACEMENT_LEFT
                        ),
                    ),
                    array(
                        'icon' =>'glyphicon glyphicon-briefcase ',
                        'url' => 'test',
                        'label' => 'test',
                        'tooltip' => array(
                            'label' => 'test',
                            'placement' => BSHtml::TOOLTIP_PLACEMENT_TOP
                        ),
                        'badge' => 8
                    ),
                    array(
                        'icon' =>'glyphicon glyphicon-align-justify ',
                        'url' => 'test',
                        'label' => 'test',
                        'tooltip' => array(
                            'label' => 'test',
                            'placement' => BSHtml::TOOLTIP_PLACEMENT_BOTTOM
                        ),
                    ),
                    array(
                        'icon' =>'icon-paint-format ',
                        'url' => 'test',
                        'label' => 'test',
                        'tooltip' => array(
                            'label' => 'test',
                            'placement' => BSHtml::TOOLTIP_PLACEMENT_RIGHT
                        ),
                    )
                ),
            ),
        )
    ) ?>

### Charts
    <?php $this->widget('chartjs.widgets.ChLine',
        array(
            'width' => 600,
            'height' => 300,
            'htmlOptions' => array(),
            'labels' => array("January", "February", "March", "April", "May", "June"),
            'datasets' =>
            array(
                array(
                    "fillColor" => "rgba(220,220,220,0.5)",
                    "strokeColor" => "rgba(220,220,220,1)",
                    "pointColor" => "rgba(220,220,220,1)",
                    "pointStrokeColor" => "#ffffff",
                    "data" => array(10, 20, 25, 25, 50, 60)
                ),
                array(
                    "fillColor" => "rgba(220,220,220,0.5)",
                    "strokeColor" => "rgba(220,220,220,1)",
                    "pointColor" => "rgba(220,220,220,1)",
                    "pointStrokeColor" => "#ffffff",
                    "data" => array(55, 50, 45, 30, 20, 10)
                )
            ),
            'options' => array()
    )); ?>
    <?php $this->widget('chartjs.widgets.ChRadar',
        array(
            'width' => 600,
            'height' => 300,
            'htmlOptions' => array(),
            'labels' => array("January", "February", "March", "April", "May"),
            'datasets' => array(
                array(
                    "fillColor" => "rgba(220,220,220,0.5)",
                    "strokeColor" => "rgba(220,220,220,1)",
                    "pointColor" => "rgba(220,220,220,1)",
                    "pointStrokeColor" => "#ffffff",
                    "data" => array(5, 15, 50, 25, 35)
                ),
                array(
                    "fillColor" => "rgba(220,220,220,0.5)",
                    "strokeColor" => "rgba(220,220,220,1)",
                    "pointColor" => "rgba(220,220,220,1)",
                    "pointStrokeColor" => "#ffffff",
                    "data" => array(55, 50, 45, 30, 20)
                )
            ),
            'options' => array()
    )); ?>
    <?php $this->widget('chartjs.widgets.ChPolar',
        array(
            'width' => 600,
            'height' => 300,
            'htmlOptions' => array(),
            'drawLabels' => true,
            'datasets' =>
            array(
                array(
                    "value" => 50,
                    "color" => "rgba(220,30, 70,1)",
                    "label" => "Hunde"
                ),
                array(
                    "value" => 25,
                    "color" => "rgba(66,66,66,1)",
                    "label" => "Katzen"
                ),
                array(
                    "value" => 40,
                    "color" => "rgba(100,100,220,1)",
                    "label" => "Vögel"
                ),
                array(
                    "value" => 15,
                    "color" => "rgba(20,120,120,1)",
                    "label" => "Mäuse"
                )
            ),
            'options' => array()
        )
    ); ?>
    <?php $this->widget('chartjs.widgets.ChBars',
        array(
            'width' => 600,
            'height' => 300,
            'htmlOptions' => array(),
            'labels' => array("January", "February", "March", "April", "May", "June"),
            'datasets' => array(
                array(
                    "fillColor" => "#ff00ff",
                    "strokeColor" => "rgba(220,220,220,1)",
                    "data" => array(10, 20, 30, 40, 50, 60)
                )
            ),
            'options' => array()
        )
    ); ?>
    <?php
    $this->widget(
        'chartjs.widgets.ChPie',
        array(
            'width' => 600,
            'height' => 300,
            'htmlOptions' => array(),
            'drawLabels' => true,
            'datasets' => array(
                array(
                    "value" => 50,
                    "color" => "rgba(220,30, 70,1)",
                    "label" => "Hunde"
                ),
                array(
                    "value" => 25,
                    "color" => "rgba(66,66,66,1)",
                    "label" => "Katzen"
                ),
                array(
                    "value" => 40,
                    "color" => "rgba(100,100,220,1)",
                    "label" => "Vögel"
                ),
                array(
                    "value" => 15,
                    "color" => "rgba(20,120,120,1)",
                    "label" => "Mäuse"
                )
            ),
            'options' => array()
        )
    );
    ?>
    <?php
    $this->widget(
        'chartjs.widgets.ChDoughnut',
        array(
            'width' => 600,
            'height' => 300,
            'htmlOptions' => array(),
            'drawLabels' => true,
            'datasets' => array(
                array(
                    "value" => 50,
                    "color" => "rgba(220,30, 70,1)",
                    "label" => "Hunde"
                ),
                array(
                    "value" => 25,
                    "color" => "rgba(66,66,66,1)",
                    "label" => "Katzen"
                ),
                array(
                    "value" => 40,
                    "color" => "rgba(100,100,220,1)",
                    "label" => "Vögel"
                ),
                array(
                    "value" => 15,
                    "color" => "rgba(20,120,120,1)",
                    "label" => "Mäuse"
                )
            ),
            'options' => array()
        )
    );
    ?>
### Code
[Bitbucket][0]

[0]: https://bitbucket.org/DrMabuse/yii-bootstrap-3-module

### YIInitializr-basic
=======
The following is a proposed project structure for basic applications that works in conjunction with YIInitializr components. 

YIInitializr vanilla projects make extensive use of Composer. We found at [2amigos.us](http://2amigos.us) that is easier to your extensions bundle outside of your application scope - thanks to [Phundament](http://phundament.com) and Tobias Munk for his knowledge and shares. Composer is your dependency package best friend. 

The package is cleaned from extensions, you choose what you wish to include in your composer.json files. The only ones included are Yii Framework (obviously), [YiiStrap](https://github.com/yii-twbs/yiistrap) and [YiiWheels](https://github.com/2amigos/yiiwheels), the rest is up to you. We do not want to confuse you 

## Setup and first run

  * Set up Git by following the instructions [here](https://help.github.com/articles/set-up-git).
  * Update the configurations in `app/config/` to suit your needs. The `common/config/main.php` is configured to use **sqllite** by default. Change your `common/config/env/dev.php` to suit your database requirements.
  * Composer is required The package includes already a `composer.phar` file.
  * Browse through the `composer.json` and remove the dependencies you don't need also update the required versions of the extensions.
  * If you have `composer` installed globally:
	 * Run `composer self-update` to make sure you have the latest version of composer.
	 * Run `composer install` to download all the dependencies.
  * If you work the `composer.phar` library within the project boilerplate.
    * Run `php composer.phar self-update` to make sure you have the latest version of composer.
    * Run `php composer.phar install` to download all the dependencies.
  * `Yiinitializr\Composer\Callback` will configure everything required on your application: `runtime` and `assets` folders and migrations.


For more information about using Composer please see its [documentation](http://getcomposer.org/doc/).

###How to configure the application

We focused to release the pain of configuring your application and combine your configuration files. `Yiinitializr\Helpers\Initializr` is very easy to use, check for example the bootstrap `index.php` file:

```
require('./../app/lib/vendor/yiisoft/yii/framework/yii.php');

Yii::setPathOfAlias('Yiinitializr', './../app/lib/Yiinitializr');

use Yiinitializr\Helpers\Initializer;

Initializer::create('./../app', 'main', array('common', 'env', 'local'))->run();
```

For more information about Yiinitializr please check it at [its github repo](https://github.com/2amigos/yiinitializr).

## Overall Structure

Bellow the directory structure used:

```
   |-app
   |---cli
   |-----commands
   |-----migrations
   |---config
   |-----env
   |---controllers
   |---extensions
   |-----behaviors
   |-----components
   |---helpers
   |---lib #it will hold composer 'vendor' folder
   |-----Yiinitializr
   |-------Cli
   |-------Composer
   |-------Helpers
   |-------config
   |---messages
   |---models
   |---modules
   |---views
   |-----layouts
   |-----site
   |---widgets
   |-www
   |---css
   |-----fonts
   |---img
   |---js
   |-----libs
```


## Extensions

The following extensions are part of YIInitializr-basic template:

 * Yiistrap [https://github.com/yii-twbs/yiistrap](https://github.com/yii-twbs/yiistrap)
 * Yiiwheels [https://github.com/2amigos/yiiwheels](https://github.com/2amigos/yiiwheels)
 * Yiinitializr [https://github.com/2amigos/yiinitializr](https://github.com/2amigos/yiinitializr)

> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)    
<i>web development has never been so fun</i>  
[www.2amigos.us](http://www.2amigos.us) 
