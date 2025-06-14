<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/all-template-css.css?v=<?= time(); ?> ">
    <!--demander si on peut faire ça ou aps -->
    <script defer src="<?= get_template_directory_uri(); ?>/js/main.js?v=<?= time(); ?>"></script>
    <link rel="icon" href="<?= get_site_icon_url('50') ?>">


</head>
<body>


<header class="head">


    <div class="items">
        <div class="gauche">
            <img class="logo" src="<?= get_site_icon_url('106') ?>" alt="Icône du site, initial de Victoria Briol">
            <h1>
                <a title="<?=__hepl('Vers la page d‘accueil')?>" class="titre" href="<?php echo esc_url(home_url('/')); ?>">
                    <strong class="soulignement">Victoria Briol</strong>
                </a>
            </h1>
        </div>



        <ul class="droite" id="nav_menu">
            <?php foreach (dw_get_navigation_links('header-menu') as $link): ?>
                <li class="lien">
                    <a title="<?=__hepl('Vers la page')?> <?= $link->label; ?>" href="<?= $link->href ?>"
                       class="lien"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

        <button class="nav_bgm" aria-expanded="false" aria-label="Menu principal" aria-controls="nav_menu">
            <svg class="nav_bgm_svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <path class="nav_element top" d="M6 9H24" stroke-width="2" stroke="#000"/>
                <path class="nav_element middle" d="M6 15H24" stroke-width="2" stroke="#000"/>
                <path class="nav_element bottom" d="M6 21H24" stroke-width="2" stroke="#000"/>
            </svg>
        </button>


    </div>
</header>

<main>




