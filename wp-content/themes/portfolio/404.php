<?php

get_header();

?>
    <section class="simple-404">
        <h1>Erreur 404</h1>
        <h2>Ceci est une erreur 404</h2>
        <p>Cette page n'existe pas</p>
        <a class="pulse" href="<?= home_url(); ?>" title="Retourner à l’accueil">
            Retourner à la page d’accueil
        </a>
    </section>
<?php

get_footer();

