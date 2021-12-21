<?php

namespace Src\Database;
use \PDO;

class Insert
{
    private $user, $password;

    public function __construct($name, $password)
    {
        try {
            $query = Connect::getInstance()->prepare(
                "INSERT INTO users (name, password) VALUES (:name, :password);"
            );
            $query->bindValue(":name", $name, PDO::PARAM_STR);
            $query->bindValue(":password", $password, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $exception) {
            var_dump($exception);
            die("Erro ao inserir!");
        }
    }
}