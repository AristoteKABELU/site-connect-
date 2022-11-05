<?php $title = "connexion"; ?>
<?php ob_start(); ?>

<form action="index.php" method = "post">
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    
    <div>
        <label for="second_name">Post-nom</label>
        <input type="text" name="second_name" id="second_name">
    </div>
    
    <div>
        <label for="first_name">Prenom</label>
        <input type="text" name="first_name" id="first_name">
    </div>
   
    <div>
        <label for="passeword">Mot de passe</label>
        <input type="text" name="password" id="password">
    </div>

    <div>
        <input type="date" name="birthday" id="birthday">
    </div>
    
    <div>
        <input type="submit" value="Inscription">
    </div>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('Layout/layout.php'); ?>