<?php
require_once('src/controllers/homepage.php');
require_once('src/controllers/inscription.php');
require_once('src/controllers/inscription_page.php');
require_once('src/controllers/connexion.php');
require_once('src/controllers/identities.php');

use Application\src\controllers\inscription\Register;

try{
    if(isset($_GET['action']) && $_GET['action'] !== '' ){
        if($_GET['action'] === 'inscription_page'){
            inscription_page();
        }
        elseif($_GET['action'] === 'connexion'){
            connexion();
        }elseif($_GET['action'] === 'identities'){
            identities();
        }elseif($_GET['action'] === 'inscription'){
            (new Register())->execute($_POST);
        }

    }else{
        homepage();
    }
}catch(Exception $e)
{
    echo $e->getMessage();
}