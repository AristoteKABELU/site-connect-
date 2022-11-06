<?php

namespace Application\src\controllers\inscription;

require_once('src/models/identities.php');
require_once('src/lib/database.php');

use Application\src\models\Identitie\Identitie;
use Application\Lib\Database\DatabaseConnection;

class Register
{
    function execute(array $input):void
    {
        $name = $input['name'];
        $second_name = $input['second_name'];
        $first_name = $input['first_name'];
        $password = $input['password'];
        $birthday = $input['birthday'];

        $inscription = new Identitie();
        $inscription->connexion = new DatabaseConnection();

        $success = $inscription->register_user($name, $second_name, $first_name, $password, $birthday);

        if(!$success){
            throw new \Exception("Enregistrement echoué !");
        }
        else{
            header('Location: index.php');
        }
    }
}
