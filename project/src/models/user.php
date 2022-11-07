<?php

namespace Application\src\models\UserIdentitie;

require_once('src/lib/database.php');
use Application\Lib\Database\DatabaseConnection;


class User
{
    public $name;
    public $second_name;
    public $first_name;
    public $password;
    public $birthday;
    public $adress_user;
}

class UserIdentitie
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

    public function get_user(string $user_name, string $password):User
    {
        
        $this->connection = new DatabaseConnection();
        $statement = $this->connection->getConnection()->prepare(
            'SELECT `name`, `first_name`, `second_name`, `birthday`
            FROM `t_users`
            WHERE `adress_user`= ? AND `password` = ?');

        $statement->execute([strtoupper($user_name), $password]);
        $row = $statement->fetch();
    
        if($row == null){
            throw new \Exception("Vous n'etes Pas identifier");
            
        }

        $user_identitie = new User();
        $user_identitie->name = $row['name'];
        $user_identitie->second_name = $row['second_name'];
        $user_identitie->first_name = $row['first_name'];
        $user_identitie->birthday = $row['birthday'];

        return $user_identitie;
    }
}