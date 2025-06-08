</main>

<footer>
    <hr class="footer_separateur">
    <div class="ligne_vertical"></div>

    <div class="footer_columns">


    <div class="coordonnees">
        <h4 class="titre_footer"><strong class="highlight">Coordonnées</strong></h4>
            <a class="content" href="mailto:Victoria.briol@student.hepl.be">Victoria.briol@student.hepl.be</a>

            <a class="content" href="mailto:Victoriabriol5@gmail.com">Victoriabriol5@gmail.com</a>
    </div>

    <div class="sociaux">
        <h4 class="titre_footer"> <strong class="highlight">Réseaux sociaux</strong></h4>
        <a class="content" href="https://www.instagram.com/victoria_briol/">Instagram : victoria_briol</a>
        <a class="content" href="https://github.com/BriolVictoria">GitHub : VictoriaBriol</a>
    </div>

    <div class="navigation">
        <h4 class="titre_footer"> <strong class="highlight">Navigation</strong></h4>
        <!--<a class="content" href="front-page.php">Accueil</a>
        <a class="content" href="page-template/about-template.php">Me découvrir</a>
        <a class="content" href="page-template/project-template.php">Mes projets</a>
        <a class="content" href="page-template/contact-template.php">Contact</a>-->
        <ul class="content">
            <?php foreach (dw_get_navigation_links('footer-menu') as $link):?>
                <li class="content">
                    <a href="<?= $link->href  ?>" class="content"><?= $link->label;?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    </div>
    <div class="infos_supp">
        <p class="blog_info">© 2025 <?= get_bloginfo('name'); ?>. Tous droit réservé. Créé par <?= get_bloginfo('name'); ?></p>
        <a href="<?= get_permalink(get_page_by_path('mentions-legales')) ?>" class="mention">Mentions légales</a>
    </div>


</footer>

</body>
</html>