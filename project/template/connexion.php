<?php $title = "Connexion"; ?>
<?php ob_start(); ?>

<form action="index.php?action=user" method='post'>
    <div>
        <label for="user_name">identité</label>
        <input type="text" name="user_name" id="user_name">
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