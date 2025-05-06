<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/css/all-template-css.css?v=<?= time(); ?> " > <!--demander si on peut faire ça ou aps -->
    <script defer src="<?= get_template_directory_uri();?>/js/all-js-file.js?v=<?= time(); ?>"></script>

</head>
<body>



<header class="head">



<!--   Menu caché affiché que pour tablette et tel-->
    <div class="menu_mobile" id="menu_mobile">
        <a class="lien" href="#decouvrir">Me découvrir</a>
        <a class="lien" href="#projets">Mes projets</a>
        <a class="lien" href="#contact">Contact</a>
        <p class="langue">EN</p>
    </div>

    <div class="items">
        <div class="gauche">
            <img class="logo" src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Victoria Briol">
            <h1><a class="titre" href="./front-page.php"><strong class="soulignement">Victoria Briol</strong></a></h1>

          <!-- Affiché que pour tablette et tel-->
            <div class="burger" id="burger">
                &#9776;
            </div>
        </div>

        <div class="droite">
            <a class="lien" href="./page-template/about-template.php">Me découvrir</a>
            <a class="lien" href="./page-template/project-template.php">Mes projets</a>
            <a class="lien" href="./page-template/contact-template.php">Contact</a>
            <p class="langue">EN</p>
        </div>
    </div>
</header>

<main>



    <!--<ul class="nav_container">
        <?php /*foreach (dw_get_navigation_links('header') as $link): */?>
            <li class="nav_item nav_item--<?php /*= $link->icon; */?>">
                <a href="<?php /*=$link->href  */?>" class="nav_link"><?php /*= $link->label; */?></a>
            </li>
        <?php /*endforeach; */?>
    </ul>-->
