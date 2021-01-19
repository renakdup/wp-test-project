<?php

namespace HH\Helpers;

function setup_post_id_parameter($id)
{
    if (! $id || ! is_numeric($id)) {
        global $post;
        if (isset($post) && is_object($post)) {
            $id = $post->ID;
        }
    }

    return $id;
}
