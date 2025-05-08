<?php

/* Template Name: Accueil */
get_header();

$titre_banniere = get_field('titre_section_banniere');
$desc_banniere = get_field('description_banniere');
$lien_banniere = get_field('lien_banniere');
$img_banniere = get_field('image_fond_banniere');

$titre_project = get_field('titre_section_projets');
$desc_project = get_field('description_projets');
$bouton_project = get_field('bouton_projets');

$projects = new WP_Query([
    'post_type' => 'project',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 3,
]);

?>
<section>
    <img class="image_banniere" src="<?= $img_banniere['url'] ?>" alt="<?= $img_banniere['alt'] ?>">
    <div class="items_banniere">
        <h2 class="titre_banniere"><?= $titre_banniere ?></h2>
        <p class="content_banniere"><?= $desc_banniere ?></p>
        <a class="bouton_banniere" href="<?=$lien_banniere['url']  ?>"><?= $lien_banniere['title'] ?></a>
    </div>
</section>
<section>
    <h2 class="titre_project"><strong class="soulignement_carte_projet"><?=$titre_project?></strong></h2>
    <p class="description_project"><?=$desc_project?></p>

    <div class="projet_container">

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
    </div>
    <div class="bouton_container_projet">
    <a class="bouton_projet" href="<?=$bouton_project['url']  ?>"><?= $bouton_project['title'] ?></a>
    </div>
</section>



<section>

</section>

<?php get_footer(); ?>
