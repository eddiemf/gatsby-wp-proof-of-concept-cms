<?php

/**
 * Modify a post response
 */
add_filter('rest_prepare_post', function ($data, $post, $context) {
    return $data;
}, 10, 3);

/**
 * Return `null` if an empty value is returned from ACF.
 *
 * @param mixed $value
 * @param mixed $post_id
 * @param array $field
 *
 * @return mixed
 */
add_filter('acf/format_value', function ($value, $post_id, $field) {
    if (empty($value)) {
        return null;
    }
    return $value;

}, 100, 3);
