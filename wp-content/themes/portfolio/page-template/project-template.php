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

?>
    <section>
        <h3 class="titre_projects"><strong class="soulignement_about"><?= $titre_section_projets ?></strong></h3>
        <p class="content_projects"><?= $description_projets ?></p>
        <div class="container">
            <a class="boutons_projects" href="">Tous</a>
            <a class="boutons_projects" href="">2D</a>
            <a class="boutons_projects" href="">3D</a>
            <a class="boutons_projects" href="">Mobile</a>
            <a class="boutons_projects" href="">Web</a>
        </div>
    </section>

    <section><div class="grille_projets">

        <?php if ($projets->have_posts()): while ($projets->have_posts()): $projets->the_post(); ?>

            <article class="projets_page">
                <a href="<?= get_the_permalink() ?>">
                <div class="projet_content">
                    <figure class="projet_fig">
                        <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'projet_img']); ?>
                    </figure>

                    <h3 class="projets_title"><strong
                                class="soulignement_carte_par_projet"><?= get_the_title(); ?></strong></h3>
                </div>
                </a>
            </article>


        <?php endwhile; else: ?>
        </div>
            <p>Je n'ai pas de voyages récents à montrer pour le moment...</p>
        <?php endif; ?>

    </section>


<?php get_footer(); ?>