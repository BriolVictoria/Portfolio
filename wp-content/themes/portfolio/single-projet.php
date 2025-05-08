<?php
get_header();

?>
<h2><?= get_the_title(); ?></h2>
<section>
    <h2 class="sr-only"><?= get_the_title(); ?></h2>
    <?= get_the_post_thumbnail() ?>
    <p><?= get_the_content() ?></p>
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
            <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
            <h3> <?= $title ?> </h3>
            <p><?= $content ?></p>

        </article>
        <?php
    endwhile;
    endif;
    ?>
</div>


<?php
get_footer();
