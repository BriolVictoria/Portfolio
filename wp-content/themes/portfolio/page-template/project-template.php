<?php

/* Template Name: Mes projets */
get_header();

$titre_section_projets = get_field('titre_section_projets');
$description_projets = get_field('description_projets');
$bouton_projets = get_field('bouton_projets');


$projets = new WP_Query([
    'post_type' => 'project',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 3,
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

<section>

    <?php if($projects->have_posts()): while($projects->have_posts()): $projects->the_post(); ?>
        <article class="projet">

            <div class="projet_card">
                <figure class="trip_fig">
                    <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'trip_img']); ?>
                </figure>
                <header class="projet_head">
                    <h3 class="projet_title"><strong class="soulignement_carte_par_projet"><?= get_the_title(); ?></strong></h3>
                </header>
                <p class="description_projet"><?= get_the_excerpt() ?></p>
            </div>
        </article>
    <?php endwhile; else: ?>
        <p>Je n'ai pas de voyages récents à montrer pour le moment...</p>
    <?php endif; ?>

</section>


<?php get_footer(); ?>