</main>

<?php
$title = get_field('titre_footer');
$email = get_field('email_footer');

?>

<footer>
    <p>© <?= get_bloginfo('name'); ?></p>
    <h4><?= $title ?></h4>
    <p><?= $email ?></p>
</footer>

</body>
</html>