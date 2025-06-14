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
$email_champs = get_field('email_champs');
$message_champs = get_field('message_champs');
$bouton_formulaire = get_field('bouton_formulaire');

$titre_champs = get_field('titre_autres');
$email_titre_champs = get_field('email_titre_autres');
$email_autres = get_field('email_autres');
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
            <a class="content_info_contact" title="<?=__hepl('Vers mon email')?>" aria-label="Envoyer un email à <?= $email_autres ?>" href="mailto:<?= $email_autres ?>"><?= $email_autres ?></a>
            <h4 class="titre_telephone_contact"><?= $telephone_titre_champs ?></h4>
            <a href="tel:<?= $telephone_champs ?>" title="<?=__hepl('Vers mon numéro de téléphone')?>" aria-label="Appeler le numéro <?= $telephone_champs ?>" class="content_info_contact"><?= $telephone_champs ?></a>
        </section>




<?php
// On ouvre "la boucle" (The loop), la structure de contrôle de contenu propre à WordPress:
if(have_posts()): while (have_posts()): the_post(); ?>
    <section class="formulaire">
        <h3 class="titre_contact"><strong class="soulignement_contact"><?= $titre_formulaire ?></strong></h3>
        <div class="contact__left"><?= get_the_content(); ?></div>
        <div class="contact__right">
            <?php
            $errors = $_SESSION['contact_form_errors'] ?? [];
            unset($_SESSION['contact_form_errors']);
            $success = $_SESSION['contact_form_success'] ?? false;
            unset($_SESSION['contact_form_success']);

            if($success): ?>
                <div class="contact__success">
                    <p><?= $success; ?></p>
                </div>
            <?php else: ?>
                <form action="<?= admin_url('admin-post.php'); ?>" method="POST" class="form">
                    <fieldset class="form__fields">
                        <div class="field">
                            <label for="firstname" class="nom_champs"><?= $prenom_champs ?></label>
                            <input type="text" name="firstname" id="firstname" class="input_champs" placeholder="Joe">
                            <?php if(isset($errors['firstname'])): ?>
                                <p class="field__error"><?= $errors['firstname']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="field">
                            <label for="lastname" class="nom_champs"><?= $nom_champs ?></label>
                            <input type="text" name="lastname" id="lastname" class="input_champs" placeholder="Gold">
                            <?php if(isset($errors['lastname'])): ?>
                                <p class="field__error"><?= $errors['lastname']; ?></p>
                            <?php endif; ?>

                        </div>
                        <div class="field">
                            <label class="nom_champs" for="email"><?= $email_champs ?></label>
                            <input type="email" name="email" id="email" class="input_champs" placeholder="joe.gold@gmail.com">
                            <?php if(isset($errors['email'])): ?>
                                <p class="field__error"><?= $errors['email']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="field">
                            <label for="message" class="nom_champs"><?= $message_champs ?></label>
                            <textarea name="message" id="message" class="input_champs" cols="30" rows="5" placeholder="<?=__hepl('Votre message...')?> "></textarea>
                            <?php if(isset($errors['message'])): ?>
                                <p class="field__error"><?= $errors['message']; ?></p>
                            <?php endif; ?>

                        </div>
                    </fieldset>
                    <div class="form__submit">
                        <input type="hidden" name="action" value="dw_submit_contact_form">
                        <button type="submit" class="bouton_contact" aria-label="Envoyer le formulaire de contact">
                            <?= esc_html($bouton_formulaire['title']) ?>
                        </button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </section>



    </div>


<?php
endwhile;
endif;
get_footer();
?>