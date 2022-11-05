<?php $title = "Accueil"; ?>
<?php ob_start(); ?>
<a href="index.php?action=inscription">inscription</a>
<?php $content = ob_get_clean(); ?>
<?php require('Layout/layout.php') ?>