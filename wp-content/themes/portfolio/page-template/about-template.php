<?php

/* Template Name: Me découvrir */
get_header();

$image_introduction = get_field('image_introduction');
$titre_introduction = get_field('titre_section_introduction');
$description_introduction = get_field('description_introduction');

$titre_parcours = get_field('titre_section_parcours');
$description_parcours = get_field('description_parcours');
$image_parcours = get_field('image_parcours');
$titre_chaque_parcours = get_field('titre_chaque_parcours');
$description_chaque_parcours = get_field('description_chaque_parcours');

$titre_competences = get_field('titre_competences');
$description_competences = get_field('description_competences');
$image_competences = get_field('image_competences');
$image_chaque_competences = get_field('image_descriptive_competences');
$titre_chaque_competences = get_field('titre_chaque_competences');
$description_chaque_competences = get_field('description_chaque_competences');

$description_bouton = get_field('description_bouton_introduction');
$bouton = get_field('bouton_introduction');


?>
    <section class="about">
        <div class="back_image"></div>
        <img class="image_about" src="<?= $image_introduction['url'] ?>" alt="<?= $image_introduction['alt'] ?>">
        <div class="texte_about">
            <h3 class="titre_about"><strong class="soulignement_about"><?= $titre_introduction ?></strong></h3>
            <p class="content_about"><?= $description_introduction ?></p>
        </div>
    </section>

    <!--<section>
        <h4><?php /*= $titre_parcours */?></h4>
        <p><?php /*= $description_parcours */?></p>
        <img src="<?php /*= $image_parcours['url'] */?>" alt="<?php /*= $image_parcours['alt'] */?>">
        <p><?php /*= $titre_chaque_parcours */?></p>
        <p><?php /*= $description_chaque_parcours */?></p>
    </section>

    <section>
        <h4><?php /*= $titre_competences */?></h4>
        <p><?php /*= $description_competences */?></p>
        <img src="<?php /*= $image_competences['url'] */?>" alt="<?php /*= $image_competences['alt'] */?>">
        <img src="<?php /*= $image_chaque_competences['url'] */?>" alt="<?php /*= $image_chaque_competences['alt'] */?>">
        <p><?php /*= $titre_chaque_competences */?></p>
        <p><?php /*= $description_chaque_competences */?></p>
    </section>-->

    <section >
        <p class="bouton_content_about"><?= $description_bouton ?></p>
        <div class="container">
            <a class="bouton_about" href="<?= $bouton['url'] ?>"><?= $bouton['title'] ?></a>
        </div>

    </section>

<?php get_footer(); ?>