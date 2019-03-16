<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$heading = new FieldsBuilder('Icon heading');

$heading
    ->addWysiwyg('title', ['label' => 'Title', 'instructions' => 'The title'])
    ->addWysiwyg('subtitle', ['label' => 'Subtitle', 'instructions' => 'The subtitle or content'])
    ->addFields(get_field_component('image'));

return $heading;
