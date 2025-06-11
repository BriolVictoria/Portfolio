<?php
get_header();
?>
    <section class="simple-404">
        <h1><?=__hepl('Erreur 404')?></h1>
        <h2><?=__hepl('Cette page n‘existe pas')?></h2>
        <a class="pulse" href="<?= home_url(); ?>" title="<?=__hepl('Retourner à l’accueil')?>">
            <?=__hepl('Retourner à la page d’accueil')?>
        </a>
    </section>
<?php

get_footer();

