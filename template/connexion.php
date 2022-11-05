<?php $title = "Connexion"; ?>
<?php ob_start(); ?>

<form action="index.php">
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="second_name">Post-nom</label>
        <input type="text" name="second_name" id="">
    </div>

    <div>
        <label for="password"></label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="submit" value="Se connecter">
        <a href="index.php">Retour</a>
    </div>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('Layout/layout.php'); ?>