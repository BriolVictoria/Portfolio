<?php

/* Template Name: Mes projets */
get_header();

$titre_section_projets = get_field('titre_section_projets');
$description_projets = get_field('description_projets');
$bouton_projets = get_field('bouton_projets');
$image_projets = get_field('image_projets');
$titre_chaque_projets = get_field('titre_chaque_projets');



?>
    <section>
        <h3 class="titre_projects"><?= $titre_section_projets ?></h3>
        <p class="content_projects"><?= $description_projets ?></p>
        <div class="container">
            <a class="boutons_projects" href="<?= $bouton_projets['url'] ?>"><?= $bouton_projets['title'] ?></a>
        </div>

        <!--<img src="<?php /*= $image_projets['url'] */?>" alt="<?php /*= $image_projets['alt'] */?>">
        <h4><?php /*= $titre_chaque_projets */?></h4>-->
    </section>



<?php get_footer(); ?>