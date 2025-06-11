<?php

/* Template Name: Mes projets */
get_header();

$titre_section_projets = get_field('titre_section_projets');
$description_projets = get_field('description_projets');
$bouton_projets = get_field('bouton_projets');


$projets = new WP_Query([
    'post_type' => 'projet',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 12,
]);

// Récupérer le filtre depuis l'URL
$taxonomy = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : '';

// Préparer la requête WP_Query
$args = [
    'post_type' => 'projet',
    'posts_per_page' => -1
];

if ($taxonomy !== '') {
    $args['tax_query'] = [
        [
            'taxonomy' => 'projet_type', // 🆗 Modifié ici aussi
            'field' => 'slug',
            'terms' => $taxonomy,
        ]
    ];
}

$projets = new WP_Query($args);
?>

<section class="projet_template">
    <h3 class="titre_projects">
        <strong class="soulignement_about"><?= esc_html($titre_section_projets ?? 'Mes projets') ?></strong>
    </h3>
    <p class="content_projects"><?= esc_html($description_projets ?? 'Voici une sélection de mes projets.') ?></p>

    <div class="container">
        <a title="<?=__hepl('Voir tous les projets')?>" class="boutons_projects <?= ($taxonomy === '') ? 'active' : '' ?>" href="?filter="><?=__hepl('Tous')?></a>
        <a title="<?=__hepl('Voir les projets mobile')?>" class="boutons_projects <?= ($taxonomy === 'mobile') ? 'active' : '' ?>" href="?filter=mobile"><?=__hepl('Mobile')?></a>
        <a title="<?=__hepl('Voir les projets web')?>" class="boutons_projects <?= ($taxonomy === 'web') ? 'active' : '' ?>" href="?filter=web"><?=__hepl('Web')?></a>
    </div>

</section>


<section>
    <div class="grille_projets">

        <?php if ($projets->have_posts()): while ($projets->have_posts()): $projets->the_post(); ?>

            <article class="projets_page">
                <a title="<?=__hepl('Vers le projet')?>" href="<?= get_the_permalink() ?>">
                    <div class="projet_content">
                        <figure class="projet_fig">
                            <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'projet_img']); ?>
                        </figure>

                        <h3 class="projets_title_page"><strong
                                    class="soulignement_carte_par_projet"><?= get_the_title(); ?></strong></h3>
                    </div>
                </a>
            </article>


        <?php endwhile; else: ?>
    </div>
    <p><?=__hepl('Je n‘ai pas de projet récents à montrer pour le moment...')?></p>
    <?php endif; ?>

</section>


<?php get_footer(); ?>
