<?php

namespace HH\Core;

use function HH\Helpers\setup_post_id_parameter;

class PostType
{
    protected static function get_acf_field(int $post_id, $field_name)
    {
        if (!$post_id && !$post_id = setup_post_id_parameter($post_id)) {
            return false;
        }
        $id = $post_id ? $post_id : false;

        return get_field($field_name, $id);
    }

    protected static function set_acf_field(int $post_id, $field_name, $field_value)
    {
        if (!$post_id && !$post_id = setup_post_id_parameter($post_id)) {
            return false;
        }

        $id = $post_id ? $post_id : false;

        return update_field($field_name, $field_value, $id);
    }

    protected static function get_meta_field(int $post_id, $field_name)
    {
        if (!$post_id && !$post_id = setup_post_id_parameter($post_id)) {
            return false;
        }
        $id = $post_id ? $post_id : false;

        return get_post_meta($id, $field_name, true);
    }

    protected static function set_meta_field(int $post_id, $field_name, $field_value)
    {
        if (!$post_id && !$post_id = setup_post_id_parameter($post_id)) {
            return false;
        }
        $id = $post_id ? $post_id : false;

        return update_post_meta($id, $field_name, $field_value);
    }
}
