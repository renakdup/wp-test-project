<?php

namespace HH\PostTypes;

use HH\Core\PostType;

class Realty extends PostType
{
    const POST_TYPE = 'hh_realty';
    const SLUG = 'realty';

    const NUMBER_POSTS = 9;

    public static function init()
    {
        add_action('init', [self::class, 'register_post_type']);
        add_action('init', [self::class, 'register_acf_fields']);
    }

    public static function register_acf_fields()
    {
        require_once __DIR__ . '/../inc/acf-fields.php';
    }

    public static function register_post_type()
    {
        $labels = [
            'name' => 'Недвижимость',
            'singular_name' => 'Недвижимость',
            'add_new' => 'Создать недвижимость',
            'add_new_item' => 'Создать недвижимость',
            'edit_item' => 'Редактировать недвижимость',
            'new_item' => 'Новая недвижимость',
            'all_items' => 'Вся недвижимость',
            'view_item' => 'Просмотреть недвижимость',
            'search_items' => 'Искать недвижимость',
            'not_found' => 'Не найдено ни одной недвижимости',
            'not_found_in_trash' => 'В корзине не найдено ни одной недвижимости',
            'parent_item_colon' => '',
            'menu_name' => 'Недвижимость',
        ];

        $args = [
            //'label' => null,
            'description' => '',
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_nav_menus' => false,
            'exclude_from_search' => true,
            'query_var' => true,
            //'rewrite' => false,
            'rewrite' => [
                'slug' => 'request-info',
                'with_front' => true,
                'feeds' => true,
                'pages' => true,
                'ep_mask' => self::SLUG,
            ],
            //'capability_type' => self::POST_TYPE,
            //'capabilities' => [],
            'map_meta_cap' => true,
            //'register_meta_box_cb' => '',
            //'taxonomies' => [],
            //'permalink_epmask' => 'EP_PERMALINK',
            'can_export' => false,
            'has_archive' => false,
            'hierarchical' => false,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 48,
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
            //'menu_icon' => HH_ADMIN_ICONS_URI . '/bookmark.png'
        ];

        register_post_type(self::POST_TYPE, $args);
    }
}
