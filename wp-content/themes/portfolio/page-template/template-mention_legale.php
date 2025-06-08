<?php
/* Template Name: Mentions légales */
get_header();

$titre_page = get_field('titre_page');

?>

    <div class="page-legal-container">
        <h2 class="legal-title"><?= $titre_page ?></h2>
        <?php if (have_rows('mentions_legales')): ?>
            <?php while (have_rows('mentions_legales')): the_row();
                $titre_mention = get_sub_field('titre_mention');
                $description_mention = get_sub_field('description_mention');
                ?>
                <section class="legal-section">
                    <h3 class="legal-section__title"><?= esc_html($titre_mention) ?></h3>
                    <div class="legal-section__text">
                        <?= wp_kses_post($description_mention) ?>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>



<?php
get_footer();