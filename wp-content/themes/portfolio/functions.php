<?php

//Début "installation" Gutenberg

// Gutenberg est le nouvelle éditeur de contenu propre à wordPress
// il ne nous intérresse pas pour l'utilisation du thème que
// nous allons créer. On va le désactiver :

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' ); // une chaîne de caractère qui existe dans wordPress

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
// Disable default front-end styles.

add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );
    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );
    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );
}, 20 );

//Fin "installation" Gutenberg



//Début post-type


// Enregistrer de nouveau type de contenu qui seront stockés dans la table "wp_posts",
// avec un identifint spécifique dans la colonne "post_type"

register_post_type('parcour', [
    'label' => 'Parcours',
    'description' => 'Listes représentant mon parcours',
    'menu_position' => 2,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'public' => true,
    'rewrite' => [
        'slug' => 'parcour'
    ],
    'supports' => ['title', 'editor'],
]);

// Activer l'utilisation des vignettes (images de couverture) sur nos post_type
add_theme_support('post-thumbnails', ['competence']);


// Enregistrer de nouveau type de contenu qui seront stockés dans la table "wp_posts",
// avec un identifint spécifique dans la colonne "post_type"

register_post_type('competence', [
    'label' => 'Competences',
    'description' => 'Listes représentant mes competences',
    'menu_position' => 2,
    'menu_icon' => 'dashicons-admin-tools',
    'public' => true,
    'rewrite' => [
        'slug' => 'competence'
    ],
    'supports' => ['title', 'editor', 'thumbnail'],
]);

// Activer l'utilisation des vignettes (images de couverture) sur nos post_type
add_theme_support('post-thumbnails', ['projet']);


// Enregistrer de nouveau type de contenu qui seront stockés dans la table "wp_posts",
// avec un identifint spécifique dans la colonne "post_type"

register_post_type('projet', [
    'label' => 'Projets',
    'description' => 'Listes représentant mes projets',
    'menu_position' => 2,
    'menu_icon' => 'dashicons-art',
    'public' => true,
    'rewrite' => [
        'slug' => 'projet'
    ],
    'supports' => ['title', 'thumbnail', 'editor', 'excerpt'],
]);

//Fin post-type








/*Enregistrer de nouveau type de contenu qui seront stockés dans la table "wp_posts",
// avec un identifint spécifique dans la colonne "post_type"

function register_my_menus() {
    register_nav_menus([
        'header-menu' => 'Menu principal',
        'footer-menu' => 'Menu pied de page',
    ]);
}
add_action('init', 'register_my_menus');*/

