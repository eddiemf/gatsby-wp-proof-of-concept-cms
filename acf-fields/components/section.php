<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$section = new FieldsBuilder('Section');

$section
    ->addWysiwyg('title', ['label' => 'Title', 'instructions' => 'The title of the section'])
    ->addWysiwyg('subtitle', ['label' => 'Subtitle', 'instructions' => 'The subtitle of the section'])
    ->addWysiwyg('content', ['label' => 'Content', 'instructions' => 'The content of the section']);

return $section;
