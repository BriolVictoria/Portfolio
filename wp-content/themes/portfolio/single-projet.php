<?php
get_header();

$projets = new WP_Query([
    'post_type' => 'projet',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 3,
]);
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
        if (have_rows('page_projet')):
            while (have_rows('page_projet')): the_row();
                $title = get_sub_field('titre_page_projet');
                $content = get_sub_field('description_page_projet');
                $img = get_sub_field('image_page_projet');
                $bouton = get_sub_field('bouton_page_projet');
                ?>


                <article>
                    <hr class="footer_separateur">
                    <div class="projet_box">
                        <div class="image_wrapper">
                            <div class="back_image_projet"></div>
                            <?= get_the_post_thumbnail(null, 'medium', ['class' => 'image_projet']) ?>
                        </div>

                        <div class="projet_texte">
                            <h3 class="titre_section_projet">
                                <strong class="soulignement_projet"><?= $title ?></strong>
                            </h3>
                            <p class="projet_content"><?= $content ?></p>
                        </div>

                    </div>
                </article>


            <?php
            endwhile;
        endif;
        ?>
    </div>

    <section>

        <div class="projet_container">
            <hr class="footer_separateur">

            <?php if ($projets->have_posts()): while ($projets->have_posts()): $projets->the_post(); ?>
                <article class="projet">

                    <div class="projet_card">
                        <figure class="trip_fig">
                            <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'trip_img']); ?>
                        </figure>
                        <header class="projet_head">
                            <h3 class="projet_title"><strong
                                        class="soulignement_carte_par_projet"><?= get_the_title(); ?></strong></h3>
                        </header>
                        <p class="description_projet"><?= get_the_excerpt() ?></p>
                    </div>
                </article>
            <?php endwhile; else: ?>
                <p>Je n'ai pas de voyages récents à montrer pour le moment...</p>
            <?php endif; ?>
        </div>
       <!-- <div class="bouton_container_projet">
            <a class="bouton_projet" href="<?php /*= $bouton['url'] */?>"><?php /*= $bouton['title'] */?></a>
        </div>-->
    </section>


<?php
get_footer();

