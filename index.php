<?php
require_once('src/controllers/homepage.php');
require_once('src/controllers/inscription.php');
require_once('src/controllers/connexion.php');


try{
    if(isset($_GET['action']) && $_GET['action'] !== '' ){
        if($_GET['action'] === 'inscription'){
            inscription();
        }
    
        elseif($_GET['action'] === 'connexion'){
            connexion();
        }

    }else{
        homepage();
    }
}catch(Exception $e)
{
    echo $e;
}