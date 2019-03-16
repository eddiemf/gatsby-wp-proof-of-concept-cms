<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$group = new FieldsBuilder('home', extend_group_options());

$group->setLocation('page_template', '==', 'templates/template-home.php');
$group
    ->addGroup('Page banner')
    ->addFields(get_field_component('banner'))
    ->endGroup()
    ->addGroup('Intro')
    ->addFields(get_field_component('section', ['hide' => ['subtitle']]))
    ->endGroup()
    ->addGroup('The problem')
    ->addFields(get_field_component('section', ['hide' => ['subtitle']]))
    ->endGroup()
    ->addGroup('The solution')
    ->addFields(get_field_component('section', ['hide' => ['subtitle']]))
    ->endGroup();
    // ->addRepeater('services_list', [
    //     'label' => 'Services list',
    //     'button_label' => 'Add service',
    //     'layout' => 'block',
    // ])
    // ->addFields(get_field_component('iconHeading'))
    // ->endRepeater();

return $group;
