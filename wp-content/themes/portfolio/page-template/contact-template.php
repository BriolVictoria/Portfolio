<?php

/* Template Name: Contact */
get_header();

$titre_section_banniere = get_field('titre_section_banniere');
$description_banniere = get_field('description_banniere');
$image_banniere = get_field('image_banniere');

$titre_formulaire = get_field('titre_formulaire');
$champs_formulaire = get_field('champs_formulaire');
$bouton_formulaire = get_field('bouton_formulaire');

$titre_champs = get_field('titre_champs');
$email_champs = get_field('email_champs');
$telephone_champs = get_field('telephone_champs');





?>
    <section>
        <h2><?= $titre_section_banniere ?></h2>
        <p><?= $description_banniere ?></p>
        <img src="<?= $image_banniere['url'] ?>" alt="<?= $image_banniere['alt'] ?>">
    </section>

    <section>
        <h3><?= $titre_formulaire ?></h3>
        <p><?= $champs_formulaire ?></p>
        <a href="<?= $bouton_formulaire['url'] ?>"><?= $bouton_formulaire['title'] ?></a>
    </section>

    <section>
        <h3><?= $titre_champs ?></h3>
        <p><?= $email_champs ?></p>
        <p><?= $telephone_champs ?></p>
    </section>





<?php get_footer(); ?>