<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$group = new FieldsBuilder('categories', extend_group_options());

$group->setLocation('taxonomy', '==', 'category');
$group
    ->addGroup('Banner')
    ->addFields(get_field_component('image'))
    ->endGroup();

return $group;
