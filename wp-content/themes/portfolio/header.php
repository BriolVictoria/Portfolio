<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>"> <!--demander si on peut faire ça ou aps -->
</head>
<body>

<header>
    <img src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Victoria Briol">
    <h1><a href="#accueil">Victoria Briol</a></h1>
    <a href="#decouvrir">Me découvrir</a>
    <a href="#projets">Mes projets</a>
    <a href="#contact">Contact</a>
    <p>EN</p>
</header>

<main>



    <!--<ul class="nav_container">
        <?php /*foreach (dw_get_navigation_links('header') as $link): */?>
            <li class="nav_item nav_item--<?php /*= $link->icon; */?>">
                <a href="<?php /*=$link->href  */?>" class="nav_link"><?php /*= $link->label; */?></a>
            </li>
        <?php /*endforeach; */?>
    </ul>-->
