<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$group = new FieldsBuilder('blog', extend_group_options());

$group->setLocation('page_template', '==', 'templates/template-blog.php');
$group
    ->addGroup('Page banner')
    ->addFields(get_field_component('banner', [
        'hide' => ['anchor_text', 'anchor_title', 'anchor_href', 'anchor_opens_new_page'],
    ]))
    ->endGroup();

return $group;
