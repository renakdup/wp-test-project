<?php

use HH\PostTypes\Realty\Realty;

acf_add_local_field_group(
    [
        'key' => 'group_60070c2d0acfa',
        'title' => 'Атрибуты недвижимости',
        'fields' => [
            [
                'key' => 'field_60070c4171e19',
                'label' => 'Площадь',
                'name' => 'hh_' . Realty::FIELD__AREA,
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
            ],
            [
                'key' => 'field_60070c8171e1a',
                'label' => 'Стоимость',
                'name' => 'hh_' . Realty::FIELD__PRICE,
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
            ],
            [
                'key' => 'field_60070d5671e1b',
                'label' => 'Адрес',
                'name' => 'hh_' . Realty::FIELD__ADDRESS,
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ],
            [
                'key' => 'field_60070d6f71e1c',
                'label' => 'Жилая площадь',
                'name' => 'hh_' . Realty::FIELD__LIVING_AREA,
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
            ],
            [
                'key' => 'field_60070d9271e1d',
                'label' => 'Этаж',
                'name' => 'hh_' . Realty::FIELD__FLOOR,
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => Realty::POST_TYPE,
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ]
);
