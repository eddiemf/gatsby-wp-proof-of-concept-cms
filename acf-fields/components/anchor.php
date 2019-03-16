<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$anchor = new FieldsBuilder('Anchor');

$anchor
    ->addText('anchor_text', ['label' => 'Anchor text', 'instructions' => 'Text of the anchor'])
    ->addText('anchor_href', ['label' => 'Anchor URL', 'instructions' => 'URL of the anchor (must start with \'http://\')'])
    ->addText('anchor_title', ['label' => 'Anchor title', 'instructions' => 'The title that will be displayed when hovering the anchor'])
    ->addTrueFalse('anchor_opens_new_page', ['label' => 'Anchor opens in new page', 'instructions' => 'Defines if the anchor should open in a new page (checked) or in the same page (unchecked)']);

return $anchor;
