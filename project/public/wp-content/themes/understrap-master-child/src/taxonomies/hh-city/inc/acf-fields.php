<?php

use HH\Taxonomies\City\City;

acf_add_local_field_group(
    [
        'key' => 'group_60070fs32cfa',
        'title' => 'Атрибуты недвижимости',
        'fields' => [
            [
                'key' => 'field_5aaf83d808be7',
                'label' => 'Изображение города',
                'name' => City::FIELD__THUMBNAIL,
                'type' => 'image',
                'instructions' => '',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => City::TAX_NAME,
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
