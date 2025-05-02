<?php
/*$page = 'header'; // valeur dynamique, par exemple
*/?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/css/header.css"> <!--demander si on peut faire ça ou aps -->

    <!--<link rel="stylesheet" href="style.css">
    <?php /*if ($page === 'header'): */?>
        <link rel="stylesheet" href=<?php /*= get_template_directory_uri();*/?>/css/header.css">
    <?php /*elseif ($page === 'contact'): */?>
        <link rel="stylesheet" href=<?php /*= get_template_directory_uri();*/?>/css/front-page.css">
    --><?php /*endif; */?>

</head>
<body>

<header class="head">
    <img class="image" src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Victoria Briol">
    <h1 ><a class="titre" href="#accueil">Victoria Briol</a></h1>
    <a class="lien" href="#decouvrir">Me découvrir</a>
    <a class="lien" href="#projets">Mes projets</a>
    <a class="lien" href="#contact">Contact</a>
    <p class="langue">EN</p>
</header>

<main>



    <!--<ul class="nav_container">
        <?php /*foreach (dw_get_navigation_links('header') as $link): */?>
            <li class="nav_item nav_item--<?php /*= $link->icon; */?>">
                <a href="<?php /*=$link->href  */?>" class="nav_link"><?php /*= $link->label; */?></a>
            </li>
        <?php /*endforeach; */?>
    </ul>-->
