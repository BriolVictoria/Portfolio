<?php

/* Template Name: Accueil */
get_header();

$title = get_field('title_section_banniere');
$desc = get_field('description_banniere');
$link = get_field('lien_banniere');
$img = get_field('background_image_banniere');

$title_project = get_field('titre_section_projets');
$desc_project = get_field('description_projets');
$img_project = get_field('carte_projets');
$title_card_project = get_field('titre_card_projets');
$desc_card_project = get_field('description_card_projets');
$link_card_project = get_field('lien_projets');

?>

<section>
    <h2><?= $title ?></h2>
    <p><?= $desc ?></p>
    <a href="<?=$link['url']  ?>"><?= $link['title'] ?></a>
    <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
</section>

<section>
    <h2><?= $title_project ?></h2>
    <p><?= $desc_project ?></p>
    <img src="<?= $img_project['url'] ?>" alt="<?= $img_project['alt'] ?>">
    <h3><?= $title_card_project ?></h3>
    <p><?= $desc_card_project ?></p>
    <a href="<?=$link_card_project['url']  ?>"><?= $link_card_project['title'] ?></a>
</section>

<?php get_footer(); ?>
