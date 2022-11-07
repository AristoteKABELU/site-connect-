<?php
require_once('src/controllers/homepage.php');
require_once('src/controllers/user/register.php');
require_once('src/controllers/user/register_page.php');
require_once('src/controllers/connexion.php');
require_once('src/controllers/user/user.php');

use Application\src\controllers\user\register\Register;
use Application\src\controllers\user\user\User;
use Application\src\controllers\user\Register_page;
use Application\src\controllers\connexion\Connexion;
use Application\src\controllers\homepage\Homepage;

try{
    if(isset($_GET['action']) && $_GET['action'] !== '' ){
        if($_GET['action'] === 'register_page'){
            (new Register_page())->execute();
        }
        elseif($_GET['action'] === 'connexion'){
            (new Connexion())->execute();
        }elseif($_GET['action'] === 'user'){
            (new User())->execute($_POST);
        }elseif($_GET['action'] === 'register'){
            (new Register())->execute($_POST);
        }

    }else{
        (new Homepage())->execute();
    }
}catch(Exception $e)
{
    $message = $e->getMessage();
    require('template/Layout/error.php'); 
}