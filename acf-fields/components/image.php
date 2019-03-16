<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$image = new FieldsBuilder('Image');

$image
    ->addImage('image', [
        'label' => 'Image',
        'instructions' => 'The image',
    ])
    ->addText('image_alt', [
        'label' => 'Image alt',
        'instructions' => 'The text describing the image (displayed for screen readers)',
    ]);

return $image;
