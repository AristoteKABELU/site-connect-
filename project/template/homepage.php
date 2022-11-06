<?php $title = "Accueil"; ?>
<?php ob_start(); ?>
<h1>Bienvenue sur mon Reseau :)</h1>
<a href="index.php?action=inscription">inscription</a>
<a href="index.php?action=connexion">connexion</a>
<?php $content = ob_get_clean(); ?>
<?php require('Layout/layout.php'); ?>