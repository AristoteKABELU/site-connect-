<?php $title = "Connexion"; ?>
<?php ob_start(); ?>

<form action="index.php?action=identities" method='post'>
    <div>
        <label for="identities">identité</label>
        <input type="text" name="identities" id="identities">
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="submit" value="Se connecter">
        <a href="index.php">Retour</a>
    </div>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('Layout/layout.php'); ?>