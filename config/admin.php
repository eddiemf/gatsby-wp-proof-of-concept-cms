<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme settings',
        'menu_title' => 'Theme settings',
        'menu_slug' => 'site-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ]);
}
