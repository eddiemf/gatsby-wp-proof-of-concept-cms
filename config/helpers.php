<?php

/**
 * Retrieves an ACF component while also applying changes to it based on passed options
 *
 * @param string $component_path
 * @param array $options
 *
 * @return mixed
 */
function get_field_component($component_path, $options = [])
{
    $component_path = str_replace('.', '/', $component_path);
    $field = include get_theme_file_path() . "/acf-fields/components/{$component_path}.php";

    if ($options['hide']) {
        foreach ($options['hide'] as $field_name) {
            $field->removeField($field_name);
        }
    }

    return $field;
}

function extend_group_options($options = [])
{
    $default_options = [
        /* (int) Field groups are shown in order from lowest to highest. Defaults to 0 */
        'menu_order' => 0,

        /* (string) Determines the position on the edit screen. Defaults to normal.
        Choices of 'acf_after_title', 'normal' or 'side' */
        'position' => 'normal',

        /* (string) Determines the metabox style. Defaults to 'default'.
        Choices of 'default' or 'seamless' */
        'style' => 'default',

        /* (string) Determines where field labels are places in relation to fields. Defaults to 'top'.
        Choices of 'top' (Above fields) or 'left' (Beside fields) */
        'label_placement' => 'top',

        /* (string) Determines where field instructions are places in relation to fields. Defaults to 'label'.
        Choices of 'label' (Below labels) or 'field' (Below fields) */
        'instruction_placement' => 'label',

        /* (array) An array of elements to hide on the screen */
        'hide_on_screen' => ['the_content'],
    ];

    return array_merge($default_options, $options);
}
