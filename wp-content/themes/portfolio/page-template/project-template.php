<?php

/* Template Name: Mes projets */
get_header();

$titre_section_projets = get_field('titre_section_projets');
$description_projets = get_field('description_projets');
$bouton_projets = get_field('bouton_projets');
$image_projets = get_field('image_projets');
$titre_chaque_projets = get_field('titre_chaque_projets');



?>
    <section>
        <h3><?= $titre_section_projets ?></h3>
        <p><?= $description_projets ?></p>
        <a href="<?= $bouton_projets['url'] ?>"><?= $bouton_projets['title'] ?></a>
        <img src="<?= $image_projets['url'] ?>" alt="<?= $image_projets['alt'] ?>">
        <h4><?= $titre_chaque_projets ?></h4>
    </section>



<?php get_footer(); ?>