<?php

/* Template Name: Me découvrir */
get_header();

$image_introduction = get_field('image_introduction');
$titre_introduction = get_field('titre_section_introduction');
$description_introduction = get_field('description_introduction');

$titre_parcours = get_field('titre_parcours');
$description_parcours = get_field('description_parcours');
$image_parcours = get_field('image_parcours');

$titre_competences = get_field('titre_competences');
$description_competences = get_field('description_competences');
$image_competences = get_field('image_competences');

$description_bouton = get_field('description_bouton');
$bouton = get_field('bouton_bouton');

$parcours = new WP_Query([
    'post_type' => 'parcour',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 4,
]);

$competences = new WP_Query([
    'post_type' => 'competence',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 6,
]);


?>
    <section class="about">
        <div class="back_image"></div>
        <img class="image_about" src="<?= $image_introduction['url'] ?>" alt="<?= $image_introduction['alt'] ?>">
        <div class="texte_about">
            <h3 class="titre_about"><strong class="soulignement_about"><?= $titre_introduction ?></strong></h3>
            <p class="content_about"><?= $description_introduction ?></p>
        </div>
    </section>

    <section class="parcours">
        <div class="parcours_gauche">
            <h4 class="titre_parcours"><strong class="soulignement_about"><?= $titre_parcours ?></strong></h4>
            <p class="description_parcours"><?= $description_parcours ?></p>
            <img class="image_parcours" src="<?= $image_parcours['url'] ?>" alt="<?= $image_parcours['alt'] ?>">
        </div>

        <!--<div class="barre_horizontal_premier"></div>-->
        <div class="parcours_droite">
            <?php if ($parcours->have_posts()): while ($parcours->have_posts()): $parcours->the_post(); ?>
                <article class="parcours_par_projet">
                    <div class="parcours_par_projet_card">
                        <header class="parcours_par_projet_head">
                            <h3 class="title_par_parcours"><?= get_the_title(); ?></h3>
                            <p class="description_par_parcours"><?= get_the_excerpt() ?></p>
                        </header>
                    </div>
                </article>
            <?php endwhile; else: ?>
                <p>Je n'ai pas de parcours à montrer pour le moment...</p>
            <?php endif; ?>
        </div>

    </section>

    <section class="competences">
        <div class="competence_gauche">
            <h4 class="titre_competences"><strong class="soulignement_about"><?= $titre_competences ?></strong></h4>
            <p class="description_competences"><?= $description_competences ?></p>
            <img class="image_competences" src="<?= $image_competences['url'] ?>"
                 alt="<?= $image_competences['alt'] ?>">
        </div>

        <div class="competences_droite">
            <?php if ($competences->have_posts()): while ($competences->have_posts()): $competences->the_post(); ?>


                <article class="competences_par_projet">
                    <div class="competence_content">
                        <figure class="competence_fig">
                            <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'competence_img']); ?>
                        </figure>
                        <h3 class="titre_par_competences"><?= get_the_title(); ?></h3>
                    </div>
                    <p class="description_par_competences"><?= get_the_excerpt() ?></p>
                </article>


            <?php endwhile; else: ?>
                <p>Je n'ai pas de compétences à montrer pour le moment...</p>
            <?php endif; ?>
        </div>
    </section>


    <section>
        <p class="bouton_content_about"><?= $description_bouton ?></p>
        <div class="container">
            <a class="bouton_about" title="Vers la page Contact" href="<?= $bouton['url'] ?>"><?= $bouton['title'] ?></a>
        </div>
    </section>

<?php get_footer(); ?>