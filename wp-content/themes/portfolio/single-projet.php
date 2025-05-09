<?php
get_header();

?>
<h2 class="titre_par_projet"><strong class="soulignement_projets"><?= get_the_title(); ?></strong></h2>
<section>
    <h2 class="sr-only"><?= get_the_title(); ?></h2>
    <div class="image_projet">
        <?= get_the_post_thumbnail(null, 'medium', ['class' => 'image_projet']) ?>
    </div>
    <p class="projet_content"><?= get_the_content() ?></p>
</section>
<div>
    <?php
    if(have_rows('page_projet')):
        while(have_rows('page_projet')): the_row();
        $title = get_sub_field('titre_page_projet');
        $content = get_sub_field('description_page_projet');
        $img = get_sub_field('image_page_projet');
    ?>


             <article>
                 <div class="projet_box">
                     <h3 class="titre_section_projet"> <strong class="soulignement_projet"><?= $title ?></strong> </h3>
                     <p class="projet_content"><?= $content ?></p>
                     <img class="image_projet" src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
                 </div>


             </article>
        <?php
    endwhile;
    endif;
    ?>
</div>


<?php
get_footer();

