<?php

/* Template Name: Accueil */
get_header();

$titre_banniere = get_field('titre_section_banniere');
$desc_banniere = get_field('description_banniere');
$lien_banniere = get_field('lien_banniere');
$img_banniere = get_field('image_fond_banniere');

$titre_project = get_field('titre_section_projets');
$desc_project = get_field('description_projets');


?>
<section>
    <img class="image_banniere" src="<?= $img_banniere['url'] ?>" alt="<?= $img_banniere['alt'] ?>">
    <div class="items_banniere">
        <h2 class="titre_banniere"><?= $titre_banniere ?></h2>
        <p class="content_banniere"><?= $desc_banniere ?></p>
        <a class="bouton_banniere" href="<?=$lien_banniere['url']  ?>"><?= $lien_banniere['title'] ?></a>
    </div>
</section>

<section>

</section>

<?php get_footer(); ?>
