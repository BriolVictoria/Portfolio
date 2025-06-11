<?php
$lang = function_exists('pll_current_language') ? pll_current_language() : 'fr';
$page_slug = $lang === 'fr' ? 'mentions-legales' : 'legal-informations';
?>


</main>

<footer>
    <hr class="footer_separateur">
    <div class="ligne_vertical"></div>

    <div class="footer_columns">


    <div class="coordonnees">
        <h4 class="titre_footer"><strong class="highlight"><?=__hepl('Coordonnées')?></strong></h4>
            <a title="<?=__hepl('Vers mon email')?>" target="_blank" class="content" href="mailto:Victoria.briol@student.hepl.be">Victoria.briol@student.hepl.be</a>

            <a title="<?=__hepl('Vers mon email personel')?>" target="_blank" class="content" href="mailto:Victoriabriol5@gmail.com">Victoriabriol5@gmail.com</a>
    </div>

    <div class="sociaux">
        <h4 class="titre_footer"> <strong class="highlight"><?=__hepl('Réseaux sociaux')?></strong></h4>
        <a title="<?=__hepl('Vers mon instagram')?>" target="_blank" class="content" href="https://www.instagram.com/victoria_briol/">Instagram : victoria_briol</a>
        <a title="<?=__hepl('Vers mon gitHub')?>" target="_blank" class="content" href="https://github.com/BriolVictoria">GitHub : VictoriaBriol</a>
    </div>

    <div class="navigation">
        <h4 class="titre_footer"> <strong class="highlight"><?=__hepl('Navigation')?></strong></h4>
        <!--<a class="content" href="front-page.php">Accueil</a>
        <a class="content" href="page-template/about-template.php">Me découvrir</a>
        <a class="content" href="page-template/project-template.php">Mes projets</a>
        <a class="content" href="page-template/contact-template.php">Contact</a>-->
        <ul class="content">
            <?php foreach (dw_get_navigation_links('footer-menu') as $link):?>
                <li class="content">
                    <a title="<?=__hepl('Vers la page ')?> <?= $link->label;?>" href="<?= $link->href  ?>" class="content"><?= $link->label;?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    </div>
    <div class="infos_supp">
        <p class="blog_info">© 2025 <?= get_bloginfo('name'); ?><?=__hepl('. Tous droit réservé. Créé par ')?><?= get_bloginfo('name'); ?></p>
        <a title="<?=__hepl('Vers la page')?> <?= __hepl('Mentions légales') ?>"
           href="<?= get_permalink(get_page_by_path($page_slug)) ?>"
           class="mention">
            <?= __hepl('Mentions légales') ?>
        </a>    </div>


</footer>

</body>
</html>