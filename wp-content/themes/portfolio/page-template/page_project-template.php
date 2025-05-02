<?php

/* Template Name: Page projet */
get_header();

$titre_section_projet = get_field('titre_section_projet');

$image_sans_titre_projet = get_field('image_sans_titre_projet');
$description_sans_titre_projet = get_field('description_sans_titre_projet');

$image_droite_projet = get_field('image_droite_projet');
$titre_droite_projet = get_field('titre_chaque_droite_projet');
$description_droite_projet = get_field('description_droite_projet');


$image_gauche_projet = get_field('image_gauche_projet');
$titre_gauche_projet = get_field('titre_chaque_gauche_projet');
$description_gauche_projet = get_field('description_gauche_projet');

?>
    <h3><?= $titre_section_projet ?></h3>
    <section>
        <img src="<?= $image_sans_titre_projet['url'] ?>" alt="<?= $image_sans_titre_projet['alt'] ?>">
        <p><?= $description_sans_titre_projet ?></p>
    </section>

    <section>
        <img src="<?= $image_droite_projet['url'] ?>" alt="<?= $image_droite_projet['alt'] ?>">
        <h4><?= $titre_droite_projet ?></h4>
        <p><?= $description_droite_projet ?></p>
    </section>

    <section>
        <img src="<?= $image_gauche_projet['url'] ?>" alt="<?= $image_gauche_projet['alt'] ?>">
        <h4><?= $titre_gauche_projet ?></h4>
        <p><?= $description_gauche_projet ?></p>
    </section>


<?php get_footer(); ?>