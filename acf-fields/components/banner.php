<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$banner = new FieldsBuilder('Banner');

$banner
    ->addFields(get_field_component('image'))
    ->addWysiwyg('title', ['label' => 'Title', 'instructions' => 'The title'])
    ->addWysiwyg('subtitle', ['label' => 'Subtitle', 'instructions' => 'The subtitle or content'])
    ->addFields(get_field_component('anchor'));

return $banner;
