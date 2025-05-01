<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
</head>
<body>

<?php

$logo = get_field('logo_header');
$title = get_field('titre_section_header');
$link_decouvrir = get_field('decouvrir_header');
$link_projets = get_field('projets_header');
$link_contact = get_field('contact_header');

?>

<header>
    <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
    <h1><?= $title ?></h1>
    <a href="<?= $link_decouvrir['url'] ?>"><?= $link_decouvrir['title'] ?></a>
    <a href="<?= $link_projets['url'] ?>"><?= $link_projets['title'] ?></a>
    <a href="<?= $link_contact['url'] ?>"><?= $link_contact['title'] ?></a>
</header>

<main>
