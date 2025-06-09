<?php

/* Template Name: Contact */
/*$page = 'contact'; // valeur dynamique, par exemple*/
get_header();

$titre_section_banniere = get_field('titre_section_banniere');
$description_banniere = get_field('description_banniere');
$image_banniere = get_field('image_banniere');

$titre_formulaire = get_field('titre_formulaire');
$nom_champs = get_field('nom_champs');
$prenom_champs = get_field('prenom_champs');
$sujet_champs = get_field('sujet_champs');
$numero_champs = get_field('numero_champs');
$message_champs = get_field('message_champs');
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




        <section class="infos">
            <h3 class="titre_contact"><strong class="soulignement_contact"><?= $titre_champs ?></strong></h3>
            <h4 class="titre_email_contact"><?= $email_titre_champs ?></h4>
            <a class="content_info_contact" title="Vers mon email" href="mailto:<?= $email_champs ?>"><?= $email_champs ?></a>
            <h4 class="titre_telephone_contact"><?= $telephone_titre_champs ?></h4>
            <a href="tel:<?= $telephone_champs ?>" title="Vers mon numéro de téléphone" class="content_info_contact"><?= $telephone_champs ?></a>
        </section>

        <section class="formulaire">
            <h3 class="titre_contact"><strong class="soulignement_contact"><?= $titre_formulaire ?></strong></h3>
            <form action="#" method="get">

                <div>
                    <label class="nom_champs" for="nom"><?= $nom_champs ?></label>
                    <input class="input_champs" type="text" id="nom" name="nom" placeholder="Joe">
                </div>

                <div>
                    <label class="nom_champs" for="prenom"><?= $prenom_champs ?></label>
                    <input class="input_champs" type="text" id="prenom" name="nom" placeholder="Gold">
                </div>

                <div>
                    <label class="nom_champs" for="numero"><?= $numero_champs ?></label>
                    <input class="input_champs" type="text" id="numero" name="nom" placeholder="0470/ 34.65.78">
                </div>

                <div>
                    <label class="nom_champs" for="message"><?= $message_champs ?></label>
                    <textarea class="input_champs" name="note" id="note" cols="30" rows="5" placeholder="Votre message... "></textarea>
                </div>

            </form>
            <a class="bouton_contact" href="<?= $bouton_formulaire['url'] ?>"><?= $bouton_formulaire['title'] ?></a>
        </section>

    </div>


<?php get_footer(); ?>