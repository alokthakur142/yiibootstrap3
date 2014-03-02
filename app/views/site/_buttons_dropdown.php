<?php echo BsHtml::buttonDropdown(
    'Action',
    array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        BsHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    )
    ,array(
        'split' => true,
        'size' => BsHtml::BUTTON_SIZE_SMALL,
        'color' =>BsHtml::BUTTON_COLOR_INFO
    )
);?>
<?php echo BsHtml::buttonDropdown(
    'Action',
    array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        BsHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    )
    ,array(
        'split' => true,
        'size' => BsHtml::BUTTON_SIZE_SMALL,
        'color' =>BsHtml::BUTTON_COLOR_DEFAULT
    )
);?>
<?php echo BsHtml::buttonDropdown(
    'Action',
    array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        BsHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    )
    ,array(
        'split' => true,
        'size' => BsHtml::BUTTON_SIZE_SMALL,
        'color' =>BsHtml::BUTTON_COLOR_SUCCESS
    )
);?>
<?php echo BsHtml::buttonDropdown(
    'Action',
    array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        BsHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    )
    ,array(
        'split' => true,
        'size' => BsHtml::BUTTON_SIZE_SMALL,
        'color' =>BsHtml::BUTTON_COLOR_LINK
    )
);?>
<?php echo BsHtml::buttonDropdown(
    'Action',
    array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        BsHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    )
    ,array(
        'split' => true,
        'size' => BsHtml::BUTTON_SIZE_SMALL,
        'color' =>BsHtml::BUTTON_COLOR_DANGER
    )
);?>
<?php echo BsHtml::buttonDropdown('Right', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    BsHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
), array(
    'split' => true,
    'menuOptions' => array('pull' => BsHtml::PULL_RIGHT),
    'size' => BsHtml::BUTTON_SIZE_SMALL,
    'color' =>BsHtml::BUTTON_COLOR_DANGER
)); ?>
<?php echo BsHtml::buttonDropdown('Right dropup', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    BsHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
), array(
    'split' => true,
    'dropup' => true,
    'menuOptions' => array('pull' => BsHtml::PULL_RIGHT),
    'size' => BsHtml::BUTTON_SIZE_SMALL,
    'color' =>BsHtml::BUTTON_COLOR_DANGER
)); ?>
<?php echo BsHtml::buttonDropdown('Left dropup', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    BsHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
), array(
    'split' => true,
    'dropup' => true,
    'menuOptions' => array('pull' => BsHtml::PULL_LEFT),
    'size' => BsHtml::BUTTON_SIZE_SMALL,
    'color' =>BsHtml::BUTTON_COLOR_DANGER
)); ?>