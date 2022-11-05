<?php $title = "connexion"; ?>
<?php ob_start(); ?>

<form action="" method = "post">
    <label for="name">Nom</label>
    <input type="text" name="name" id="name">
    <label for="second_name">Nom</label>
    <input type="text" name="second_name" id="second_name">
    <label for="first_name">Nom</label>
    <input type="text" name="first_name" id="first_name">
    <input type="text" name="password" id="password">
    <input type="date" name="birthday" id="birthday">
    <input type="submit" value="Inscription">
</form>

<?php ob_get_clean(); ?>
<?php require('Layout/layout.php'); ?>