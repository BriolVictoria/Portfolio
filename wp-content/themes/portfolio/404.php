<?php
get_header();
?>
    <section class="simple-404">
        <h1>Erreur 404</h1>
        <h2>Cette page n'existe pas</h2>
        <a class="pulse" href="<?= home_url(); ?>" title="Retourner à l’accueil">
            Retourner à la page d’accueil
        </a>
    </section>
<?php

get_footer();

