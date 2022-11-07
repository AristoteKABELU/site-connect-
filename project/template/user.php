<?php $title = "Identities"; ?>
<?php ob_start(); ?>


<h1>Bienvenue <?= $identitie->first_name.' '.$identitie->name; ?></h1>
<p>Nom : <?= $identitie->name; ?></p>
<p>Post-nom : <?= $identitie->second_name; ?></p>
<p>Prenom :<?= $identitie->first_name; ?></p>
<p>Date de naissance :<?= $identitie->birthday;?></p>

<?php $content = ob_get_clean(); ?>
<?php require('Layout/layout.php'); ?>