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
    <section>
        <img src="<?= $image_introduction['url'] ?>" alt="<?= $image_introduction['alt'] ?>">
        <h3><?= $titre_introduction ?></h3>
        <p><?= $description_introduction ?></p>
    </section>

    <section>
        <h4><?= $titre_parcours ?></h4>
        <p><?= $description_parcours ?></p>
        <img src="<?= $image_parcours['url'] ?>" alt="<?= $image_parcours['alt'] ?>">
        <p><?= $titre_chaque_parcours ?></p>
        <p><?= $description_chaque_parcours ?></p>
    </section>

    <section>
        <h4><?= $titre_competences ?></h4>
        <p><?= $description_competences ?></p>
        <img src="<?= $image_competences['url'] ?>" alt="<?= $image_competences['alt'] ?>">
        <img src="<?= $image_chaque_competences['url'] ?>" alt="<?= $image_chaque_competences['alt'] ?>">
        <p><?= $titre_chaque_competences ?></p>
        <p><?= $description_chaque_competences ?></p>
    </section>

    <section>
        <p><?= $description_bouton ?></p>
        <a href="<?= $bouton['url'] ?>"><?= $bouton['title'] ?></a>
    </section>

<?php get_footer(); ?>