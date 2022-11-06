<?php

namespace Application\src\models\Identitie;

require_once('src/lib/database.php');
use Application\Lib\Database\DatabaseConnection;


class Identitie
{
    public DatabaseConnection $connection;

    public function register_user($name, $second_name, $first_name, $password, $birthday):bool
    {
        $statement = $this->connection->getConnection()->prepare('INSERT INTO `t_user`(name, second_name, first_name, password, birthday)  VALUE(?, ?, ?, ?, ?)');

        $affectedLines = $statement->execute([$name, $second_name, $first_name, $password, $birthday]);

        return ($affectedLines > 0);
    }
}