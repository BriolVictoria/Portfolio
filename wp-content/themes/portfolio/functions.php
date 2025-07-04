<?php

function hepl_trad_load_textdomain(): void
{
    load_theme_textdomain('hepl-trad', get_template_directory() . '/locales');
}

add_action('after_setup_theme', 'hepl_trad_load_textdomain');

function __hepl(string $translation, array $replacements = [])
{
// 1. Récupérer la traduction de la phrase présente dans $translation
    $base = __($translation, 'hepl-trad');

// 2. Remplacer toutes les occurrences des variables par leur valeur
    foreach ($replacements as $key => $value) {
        $variable = ':' . $key;
        $base = str_replace($variable, $value, $base);
    }

// 3. Retourner la traduction complète.
    return $base;
}

//Début "installation" Gutenberg

// Gutenberg est le nouvelle éditeur de contenu propre à wordPress
// il ne nous intérresse pas pour l'utilisation du thème que
// nous allons créer. On va le désactiver :

// Disable Gutenberg on the back end.
add_filter('use_block_editor_for_post', '__return_false'); // une chaîne de caractère qui existe dans wordPress

// Disable Gutenberg for widgets.
add_filter('use_widgets_block_editor', '__return_false');
// Disable default front-end styles.

add_action('wp_enqueue_scripts', function () {
    // Remove CSS on the front end.
    wp_dequeue_style('wp-block-library');
    // Remove Gutenberg theme.
    wp_dequeue_style('wp-block-library-theme');
    // Remove inline global CSS on the front end.
    wp_dequeue_style('global-styles');
}, 20);

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


//Enregistrer de nouveau type de contenu qui seront stockés dans la table "wp_posts",
// avec un identifint spécifique dans la colonne "post_type"

function register_my_menus()
{
    register_nav_menus([
        'header-menu' => 'Menu principal',
        'footer-menu' => 'Menu pied de page',
    ]);
}

add_action('init', 'register_my_menus');

function dw_get_navigation_links(string $location): array
{
    //Récupérer l'objet WP pour le menu à la location $location
    $locations = get_nav_menu_locations();

    if (!isset($locations[$location])) {
        return [];
    }

    $nav_id = $locations[$location];
    $nav = wp_get_nav_menu_items($nav_id);


    // Transformer le menu en un tableau de liens, chaque lien étant un objet personnalisé

    $links = [];

    foreach ($nav as $post) {
        $link = new stdClass();
        $link->href = $post->url;
        $link->label = $post->title;
        $link->icone = get_field('icon', $post);


        /*$links[] = $link; même chose mais en plus court*/
        array_push($links, $link);
    }


    //Retourner ce tableau d'objets (liens).

    return $links;

}

// Enregistrer la taxonomie personnalisée "projet_type"
function register_projet_taxonomy()
{
    register_taxonomy('projet_type', ['projet'], [
        'labels' => [
            'name' => __('Types de projets'),
            'singular_name' => __('Type de projet'),
        ],
        'description' => 'Types de projets',
        'public' => true,
        'hierarchical' => true, // comme des catégories
        'show_ui' => true,
        'show_admin_column' => true,
        'show_tagcloud' => false,
        'rewrite' => ['slug' => 'type-de-projet'],
    ]);
}

add_action('init', 'register_projet_taxonomy');

// Créer des termes par défaut (à exécuter une seule fois)
function create_projet_terms()
{
    if (!term_exists('Mobile', 'projet_type')) {
        wp_insert_term('Mobile', 'projet_type', ['slug' => 'mobile']);
    }
    if (!term_exists('Web', 'projet_type')) {
        wp_insert_term('Web', 'projet_type', ['slug' => 'web']);
    }
}


add_action('init', 'create_projet_terms');

register_post_type('contact_message', [
    'label' => 'Messages de contact',
    'description' => 'Les envois de formulaire via la page de contact',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-email',
    'public' => true,
    'has_archive' => false,
    'supports' => ['title', 'editor'],
]);

// Inclusion de la classe ContactForm
use DW_Theme\Forms\ContactForm;

require __DIR__ . '/./form/ContactForm.php';

// Gestion du formulaire de contact
add_action('admin_post_nopriv_dw_submit_contact_form', 'dw_handle_contact_form');
add_action('admin_post_dw_submit_contact_form', 'dw_handle_contact_form');

function dw_handle_contact_form()
{
    $form = (new ContactForm())
        ->rule('firstname', 'required')
        ->rule('lastname', 'required')
        ->rule('email', 'required')
        ->rule('email', 'email')
        ->rule('message', 'required')
        ->rule('message', 'no_test')
        ->sanitize('firstname', 'sanitize_text_field')
        ->sanitize('lastname', 'sanitize_text_field')
        ->sanitize('email', 'sanitize_text_field')
        ->sanitize('message', 'sanitize_textarea_field');

    return $form->handle($_POST);
}

function enqueue_assets_from_vite_manifest(): void
{
    $manifestPath = get_theme_file_path('public/.vite/manifest.json');

    if (file_exists($manifestPath)) {
        $manifest = json_decode(file_get_contents($manifestPath), true);

        // Vérifier et ajouter le fichier JavaScript
        if (isset($manifest['wp-content/themes/portfolio/resources/js/main.js'])) {
            wp_enqueue_script('portfolio',
                get_theme_file_uri('public/' . $manifest['wp-content/themes/portfolio/resources/js/main.js']['file']), [], null, true);
        }

        // Vérifier et ajouter le fichier CSS
        if (isset($manifest['wp-content/themes/portfolio/resources/css/all-template-css.css'])) {
            wp_enqueue_style('portfolio',
                get_theme_file_uri('public/' . $manifest['wp-content/themes/portfolio/resources/css/all-template-css.css']['file']));
        }
    }
}

// 1. Charger un fichier "public" (asset/image/css/script/...) pour le front-end sans que cela ne s'applique à l'admin.
function portfolio_asset(string $file): string
{
    $manifestPath = get_theme_file_path('public/.vite/manifest.json');

    if (file_exists($manifestPath)) {
        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (isset($manifest['wp-content/themes/portfolio/resources/js/main.js']) && $file === 'js') {
            return get_theme_file_uri('public/' . $manifest['wp-content/themes/portfolio/resources/js/main.js']['file']);
        }

        if (isset($manifest['wp-content/themes/portfolio/resources/css/all-template-css.css']) && $file === 'css') {
            return get_theme_file_uri('public/' . $manifest['wp-content/themes/portfolio/resources/css/all-template-css.css']['file']);
        }
    }

    return get_template_directory_uri() . '/public/' . $file;
}


