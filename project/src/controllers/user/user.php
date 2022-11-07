<?php

namespace Application\src\controllers\user\user;

require_once('src/models/user.php');
require_once('src/lib/database.php');

use Application\src\models\UserIdentitie\UserIdentitie;
use Application\Lib\Database\DatabaseConnection;

class User
{
    function execute(array $input)
    {
        $user_name = null;
        $password = null;

        if($input['user_name'] == null || $input['password'] == null ){
            throw new \Exception("Veuillez remplire tout les champs :(");  
        }

        $user_name = $input['user_name'];
        $password = $input['password'];
        $user = new UserIdentitie();
        $identitie =  $user->get_user($user_name, $password);
        
        require('template/user.php');

    }
}