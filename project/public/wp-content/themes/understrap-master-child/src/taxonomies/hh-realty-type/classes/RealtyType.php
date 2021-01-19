<?php

namespace HH\Taxonomies\RealtyType;

use HH\PostTypes\Realty\Realty;

class RealtyType
{
    const TAX_NAME = 'hh_realty_type';
    const SLUG = 'realty-type';

    public function init()
    {
        add_action('init', [self::class, 'register']);
    }

    public static function register()
    {
        $labels = [
            'name' => 'Тип недвижимости',
            'singular_name' => 'Тип недвижимости',
            'search_items' => 'Искать тип недвижимости',
            'all_items' => 'Все типы недвижимости',
            'parent_item' => 'Родительский тип недвижимости',
            'parent_item_colon' => 'Родительский тип недвижимости',
            'edit_item' => 'Редактировать тип недвижимости',
            'update_item' => 'Обновить тип недвижимости',
            'add_new_item' => 'Создать тип недвижимости',
            'new_item_name' => 'Новый тип недвижимости',
            'menu_name' => 'Тип недвижимости',
        ];

        $args = [
            'label' => '',
            'labels' => $labels,
            'public' => true,
            'show_in_nav_menus' => true,
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            //'update_count_callback' => '',
            //'rewrite' => false,
             'rewrite' => [
                'slug' => self::SLUG,
                'with_front' => true,
                'hierarchical' => true
             ],
            'query_var' => true,
            //'capabilities' => [],
            //'_builtin' => false
        ];

        register_taxonomy(self::TAX_NAME, [Realty::POST_TYPE], $args);
    }
}
