<?php

add_action( 'acf/include_fields', function() {
if ( ! function_exists( 'acf_add_local_field_group' ) ) {
return;
}

acf_add_local_field_group( array(
'key' => 'group_67d3ecf483ec9',
'title' => 'Navigation menu items',
'fields' => array(
array(
'key' => 'field_67d3ecf402ed9',
'label' => 'Icone',
'name' => 'Icon',
'aria-label' => '',
'type' => 'select',
'instructions' => '',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'choices' => array(
'home' => 'Maison',
'plane' => 'Avion',
'pot' => 'Casserole',
'user' => 'Personnage',
'mail' => 'Enveloppe',
),
'default_value' => false,
'return_format' => 'value',
'multiple' => 0,
'allow_null' => 0,
'allow_in_bindings' => 0,
'ui' => 0,
'ajax' => 0,
'placeholder' => '',
),
),
'location' => array(
array(
array(
'param' => 'nav_menu_item',
'operator' => '==',
'value' => 'location/header',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
) );

acf_add_local_field_group( array(
'key' => 'group_67c4546e4317b',
'title' => 'Recipe fields (main)',
'fields' => array(
array(
'key' => 'field_67c4546e2e091',
'label' => 'Appréciation',
'name' => 'rating',
'aria-label' => '',
'type' => 'select',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '50',
'class' => '',
'id' => '',
),
'choices' => array(
0 => '0 étoiles',
1 => '1 étoiles',
2 => '2 étoiles',
3 => '3 étoiles',
4 => '4 étoiles',
5 => '5 étoiles',
),
'default_value' => false,
'return_format' => 'value',
'multiple' => 0,
'allow_null' => 0,
'allow_in_bindings' => 0,
'ui' => 0,
'ajax' => 0,
'placeholder' => '',
),
array(
'key' => 'field_67c455322e092',
'label' => 'Etapes de la recette',
'name' => 'steps',
'aria-label' => '',
'type' => 'wysiwyg',
'instructions' => '',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'allow_in_bindings' => 0,
'tabs' => 'visual',
'toolbar' => 'basic',
'media_upload' => 1,
'delay' => 0,
),
),
'location' => array(
array(
array(
'param' => 'post_type',
'operator' => '==',
'value' => 'recipe',
),
),
),
'menu_order' => 0,
'position' => 'acf_after_title',
'style' => 'seamless',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
) );

acf_add_local_field_group( array(
'key' => 'group_67c455b734846',
'title' => 'Recipe fields (side)',
'fields' => array(
array(
'key' => 'field_67c455b794eeb',
'label' => 'Image sur le côté',
'name' => 'side_image',
'aria-label' => '',
'type' => 'image',
'instructions' => 'Préférez une image carrée. Un recadrage automatique aura lieu.',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'return_format' => 'id',
'library' => 'all',
'min_width' => 420,
'min_height' => 420,
'min_size' => '',
'max_width' => '',
'max_height' => '',
'max_size' => '',
'mime_types' => '',
'allow_in_bindings' => 1,
'preview_size' => 'medium',
),
array(
'key' => 'field_67c45568d6a12',
'label' => 'Ingrédients',
'name' => 'ingredients',
'aria-label' => '',
'type' => 'wysiwyg',
'instructions' => '',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'allow_in_bindings' => 0,
'tabs' => 'visual',
'toolbar' => 'basic',
'media_upload' => 0,
'delay' => 0,
),
),
'location' => array(
array(
array(
'param' => 'post_type',
'operator' => '==',
'value' => 'recipe',
),
),
),
'menu_order' => 0,
'position' => 'side',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
) );

acf_add_local_field_group( array(
'key' => 'group_67c1776fbdcef',
'title' => 'Travel fields (main)',
'fields' => array(
array(
'key' => 'field_67c1776f7c5b2',
'label' => 'Appréciation',
'name' => 'rating',
'aria-label' => '',
'type' => 'select',
'instructions' => '',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '50',
'class' => '',
'id' => '',
),
'choices' => array(
0 => '0 étoiles',
1 => '1 étoiles',
2 => '2 étoiles',
3 => '3 étoiles',
4 => '4 étoiles',
5 => '5 étoiles',
),
'default_value' => false,
'return_format' => 'value',
'multiple' => 0,
'allow_null' => 0,
'allow_in_bindings' => 0,
'ui' => 0,
'ajax' => 0,
'placeholder' => '',
),
array(
'key' => 'field_67c1795a7c5b3',
'label' => 'Date de départ',
'name' => 'departure',
'aria-label' => '',
'type' => 'date_picker',
'instructions' => '',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '25',
'class' => '',
'id' => '',
),
'display_format' => 'd/m/Y',
'return_format' => 'U',
'first_day' => 1,
'allow_in_bindings' => 0,
),
array(
'key' => 'field_67c179d97c5b4',
'label' => 'Date de retour',
'name' => 'return',
'aria-label' => '',
'type' => 'date_picker',
'instructions' => 'Laissez vide si vous n\'êtes pas encore revenu.',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '25',
'class' => '',
'id' => '',
),
'display_format' => 'd/m/Y',
'return_format' => 'U',
'first_day' => 1,
'allow_in_bindings' => 0,
),
array(
'key' => 'field_67c18f74659d9',
'label' => 'Récits de voyage',
'name' => 'stories',
'aria-label' => '',
'type' => 'wysiwyg',
'instructions' => '',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'allow_in_bindings' => 0,
'tabs' => 'visual',
'toolbar' => 'basic',
'media_upload' => 1,
'delay' => 0,
),
),
'location' => array(
array(
array(
'param' => 'post_type',
'operator' => '==',
'value' => 'travel',
),
),
),
'menu_order' => 0,
'position' => 'acf_after_title',
'style' => 'seamless',
'label_placement' => 'top',
'instruction_placement' => 'field',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
) );

acf_add_local_field_group( array(
'key' => 'group_67c1906396ed0',
'title' => 'Travel fields (side)',
'fields' => array(
array(
'key' => 'field_67c19063c879e',
'label' => 'Image sur le côté',
'name' => 'side_image',
'aria-label' => '',
'type' => 'image',
'instructions' => 'Préférez une image carrée. Un recadrage automatique aura lieu.',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'return_format' => 'id',
'library' => 'all',
'min_width' => 420,
'min_height' => 420,
'min_size' => '',
'max_width' => '',
'max_height' => '',
'max_size' => '',
'mime_types' => '',
'allow_in_bindings' => 0,
'preview_size' => 'medium',
),
array(
'key' => 'field_67c18e694905e',
'label' => 'Points clé',
'name' => 'keypoints',
'aria-label' => '',
'type' => 'wysiwyg',
'instructions' => '',
'required' => 1,
'conditional_logic' => 0,
'wrapper' => array(
'width' => '',
'class' => '',
'id' => '',
),
'default_value' => '',
'allow_in_bindings' => 0,
'tabs' => 'visual',
'toolbar' => 'basic',
'media_upload' => 0,
'delay' => 0,
),
),
'location' => array(
array(
array(
'param' => 'post_type',
'operator' => '==',
'value' => 'travel',
),
),
),
'menu_order' => 0,
'position' => 'side',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
) );
} );

