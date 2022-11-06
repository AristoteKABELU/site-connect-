<?php

namespace Application\src\models\Identitie;

require_once('src/lib/database.php');
use Application\Lib\Database\DatabaseConnection;


class Identitie
{
    public DatabaseConnection $connection;

    public function register_user($name, $second_name, $first_name, $password, $birthday):bool
    {
        $adress_user = $first_name.$name;
        $this->connection = new DatabaseConnection();
        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO `t_users`(`name`, `second_name`, `first_name`, `password`, `birthday`, `adress_user`, `date_creation`)  VALUE(?, ?, ?, ?, ?, ?, now())');

        $affectedLines = $statement->execute([strtoupper($name), strtoupper($second_name), strtoupper($first_name), $password, $birthday, strtoupper($adress_user)]);

        return ($affectedLines > 0);
    }

}