<?php $title = "Erreur !"; ?>
<?php ob_start(); ?>
<h1><?= $message; ?></h1>
<?php $content = ob_get_clean(); ?>
<?php require('template/Layout/layout.php'); ?>