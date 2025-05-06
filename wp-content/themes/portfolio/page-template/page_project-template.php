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

<?php
// On ouvre "la boucle" (The loop), la structure de contrôle de contenu propre à WordPress:
if(have_posts()): while (have_posts()): the_post(); ?>

    <h3 class="titre_projet"> <strong class="soulignement_projet"><?= $titre_section_projet ?></strong></h3>
    <section class="projet">
        <div class="image_gauche_projet">
            <div class="back_gauche_image"></div>
            <img src="<?= $image_sans_titre_projet['url'] ?>" alt="<?= $image_sans_titre_projet['alt'] ?>">
        </div>

        <div class="texte_projet">
            <p class="content_gauche_projet"><?= $description_sans_titre_projet ?></p>
        </div>
    </section>




    <section class="projet">
        <div class="texte_droite_projet">
            <h4 class="titre_par_projet"> <strong class="soulignement_par_projets"><?= $titre_droite_projet ?></strong></h4>
            <p class="content_droite_projet"><?= $description_droite_projet ?></p>
        </div>

        <div class="image_droite_projet">
            <div class="back_droite_image"></div>
            <img src="<?= $image_droite_projet['url'] ?>" alt="<?= $image_droite_projet['alt'] ?>">
        </div>
    </section>


    <section class="projet">
        <div class="image_gauche_projet">
            <div class="back_gauche_image"></div>
            <img src="<?= $image_gauche_projet['url'] ?>" alt="<?= $image_gauche_projet['alt'] ?>">
        </div>
        <div class="texte_projet">
            <h4 class="titre_par_projet"> <strong class="soulignement_par_projets"><?= $titre_gauche_projet ?></strong></h4>
            <p class="content_gauche_projet"><?= $description_gauche_projet ?></p>
        </div>
    </section>

<?php
    // On ferme "la boucle" (The loop)
endwhile; else: ?>
    <p>La page est vide.</p>
<?php endif; ?>



<?php get_footer(); ?>