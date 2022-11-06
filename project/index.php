<?php
require_once('src/controllers/homepage.php');
require_once('src/controllers/user/register.php');
require_once('src/controllers/user/register_page.php');
require_once('src/controllers/connexion.php');
require_once('src/controllers/user/user.php');

use Application\src\controllers\user\register\Register;

try{
    if(isset($_GET['action']) && $_GET['action'] !== '' ){
        if($_GET['action'] === 'register_page'){
            register_page();
        }
        elseif($_GET['action'] === 'connexion'){
            connexion();
        }elseif($_GET['action'] === 'user'){
            user();
        }elseif($_GET['action'] === 'register'){
            (new Register())->execute($_POST);
        }

    }else{
        homepage();
    }
}catch(Exception $e)
{
    $message = $e;
    require('template/Layout/error.php'); 
}