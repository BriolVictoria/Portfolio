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
        <h4 class="titre_parcours"><strong class="soulignement_about"><?= $titre_parcours ?></strong></h4>
        <p class="description_parcours"><?= $description_parcours ?></p>
        <img class="image_parcours" src="<?= $image_parcours['url'] ?>" alt="<?= $image_parcours['alt'] ?>">
    </section>

    <section class="competences">
        <h4 class="titre_competences"><strong class="soulignement_about"><?= $titre_competences ?></strong></h4>
        <p class="description_competences"><?= $description_competences ?></p>
        <img class="image_competences" src="<?= $image_competences['url'] ?>" alt="<?= $image_competences['alt'] ?>">
    </section>


    <section >
        <p class="bouton_content_about"><?= $description_bouton ?></p>
        <div class="container">
            <a class="bouton_about" href="<?= $bouton['url'] ?>"><?= $bouton['title'] ?></a>
        </div>
    </section>

<?php get_footer(); ?>