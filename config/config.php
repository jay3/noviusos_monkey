<?php
return array(
    'application' => array(
        'name'  => __('Monkey'),
        'icons' => array(
            'small'  => 'static/apps/noviusos_monkey/img/16/monkey.png',
            'medium' => 'static/apps/noviusos_monkey/img/32/monkey.png',
            'big'    => 'static/apps/noviusos_monkey/img/64/monkey.png',
        ),
        'tabs' => array(
            'main' => array(
                'label' => __('Monkey'),
                'url' => 'admin/noviusos_monkey/appdesk',
                'iconUrl' => 'static/apps/noviusos_monkey/img/32/monkey.png',
             )
        ),
        'actions' => array(
            //'crud' => array('Nos\Monkey\Model_Monkey', 'Nos\Monkey\Model_Species')
            'crud' => array(
                'Nos\Monkey\Model_Monkey' => array(
                    'labels' => array(
                        'add' => __('Add a monkey'),
                    ),
                ),
                'Nos\Monkey\Model_Species' => array(
                    'labels' => array(
                        'add' => __('Add a species'),
                    ),
                )
            ),
        )
    )
);