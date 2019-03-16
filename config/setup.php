<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Setup CORS to allow GET requests on same origin
 * Thanks to https://joshpress.net/access-control-headers-for-the-wordpress-rest-api/
 */
add_action('rest_api_init', function () {
    remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
    add_filter(
        'rest_pre_serve_request',
        function ($value) {
            header('Access-Control-Allow-Origin: ' . $_ENV['CLIENT_BASE_URL']);
            header('Access-Control-Allow-Methods: GET');
            header('Access-Control-Allow-Credentials: true');
            return $value;
        }
    );
}, 15);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
}, 20);

/**
 * Initialize ACF Builder
 */
add_action('init', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $groups_paths = glob(get_theme_file_path() . '/acf-fields/*.php');
    $groups = array_map(function ($group_path) {
        return require_once ($group_path);
    }, $groups_paths);
    array_map(function ($field) {
        if ($field instanceof FieldsBuilder) {
            acf_add_local_field_group($field->build());
        }
    }, $groups);
});
