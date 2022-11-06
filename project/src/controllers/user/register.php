<?php

namespace Application\src\controllers\user\register;

require_once('src/models/user.php');
require_once('src/lib/database.php');

use Application\src\models\UserIdentitie\UserIdentitie;
use Application\Lib\Database\DatabaseConnection;

class Register
{
    function execute(array $input):void
    {
        $name = null;
        $second_name = null;
        $first_name = null;

        if($input['name'] == null || $input['second_name'] == null || $input['first_name'] == null){
            throw new \Exception("Les données sont insuffisantes!");
        }

        $name = $input['name'];
        $second_name = $input['second_name'];
        $first_name = $input['first_name'];
        $password = $input['password'];
        $birthday = $input['birthday'];

        $register = new UserIdentitie();
        $success = $register->register_user($name, $second_name, $first_name, $password, $birthday);

        if(!$success){
            throw new \Exception("Enregistrement echoué !");
        }
        else{
            header('Location: index.php');
        }
    }
}
