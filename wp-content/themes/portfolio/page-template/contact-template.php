<?php

/* Template Name: Contact */
/*$page = 'contact'; // valeur dynamique, par exemple*/
get_header();

$titre_section_banniere = get_field('titre_section_banniere');
$description_banniere = get_field('description_banniere');
$image_banniere = get_field('image_banniere');

$titre_formulaire = get_field('titre_formulaire');
$champs_formulaire = get_field('champs_formulaire');
$bouton_formulaire = get_field('bouton_formulaire');

$titre_champs = get_field('titre_autres');
$email_titre_champs = get_field('email_titre_autres');
$email_champs = get_field('email_autres');
$telephone_titre_champs = get_field('telephone_titre_autres');
$telephone_champs = get_field('telephone_autres');


?>
    <section>
        <img class="image_banniere_contact" src="<?= $image_banniere['url'] ?>" alt="<?= $image_banniere['alt'] ?>">
        <h2 class="titre_banniere_contact"><?= $titre_section_banniere ?></h2>
        <p class="content_banniere_contact"><?= $description_banniere ?></p>
    </section>

<div class="contact_columns">


    <section class="formulaire">
        <h3 class="titre_contact"> <strong class="soulignement_contact"><?= $titre_formulaire ?></strong></h3>
        <p class="champs_contact"><?= $champs_formulaire ?></p>
        <a class="bouton_contact" href="<?= $bouton_formulaire['url'] ?>"><?= $bouton_formulaire['title'] ?></a>
    </section>

    <section class="infos">
        <h3 class="titre_contact"> <strong class="soulignement_contact"><?= $titre_champs ?></strong></h3>
        <h4 class="titre_email_contact"><?= $email_titre_champs ?></h4>
        <p class="content_info_contact"><?= $email_champs ?></p>
        <h4 class="titre_telephone_contact"><?= $telephone_titre_champs ?></h4>
        <p class="content_info_contact"><?= $telephone_champs ?></p>
    </section>

</div>





<?php get_footer(); ?>