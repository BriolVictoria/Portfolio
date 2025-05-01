<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/header.css"> <!--demander si on peut faire ça ou aps -->
</head>
<body>

<?php

$logo = get_field('logo_header');
$title = get_field('title_section_header');
$link_decouvrir = get_field('decouvrir_header');
$link_projets = get_field('projets_header');
$link_contact = get_field('contact_header');

?>

<header>
    <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
    <h1><?= $title ?></h1>
    <a href="/essai">Me découvrir</a>
    <a href="<?= $link_projets['url'] ?>"><?= $link_projets['title'] ?></a>
    <a href="<?= $link_contact['url'] ?>"><?= $link_contact['title'] ?></a>
</header>

<main>



    <!--<ul class="nav_container">
        <?php /*foreach (dw_get_navigation_links('header') as $link): */?>
            <li class="nav_item nav_item--<?php /*= $link->icon; */?>">
                <a href="<?php /*=$link->href  */?>" class="nav_link"><?php /*= $link->label; */?></a>
            </li>
        <?php /*endforeach; */?>
    </ul>-->
