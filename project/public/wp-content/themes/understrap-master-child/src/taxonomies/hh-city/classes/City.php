<?php

namespace HH\Taxonomies\City;

use HH\PostTypes\Realty\Realty;

class City
{
    public const TAX_NAME = 'hh_city';
    public const SLUG = 'city';

    public const FIELD__THUMBNAIL = 'thumbnail';

    public function init()
    {
        add_action('init', [self::class, 'register']);
        add_action('init', [self::class, 'register_acf_fields']);
    }

    public static function register_acf_fields()
    {
        require_once __DIR__ . '/../inc/acf-fields.php';
    }

    public static function register()
    {
        $labels = [
            'name' => 'Город',
            'singular_name' => 'Город',
            'search_items' => 'Искать город',
            'all_items' => 'Все города',
            'parent_item' => 'Родительский город',
            'parent_item_colon' => 'Родительский город',
            'edit_item' => 'Редактировать город',
            'update_item' => 'Обновить город',
            'add_new_item' => 'Создать город',
            'new_item_name' => 'Новый город',
            'menu_name' => 'Города',
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
