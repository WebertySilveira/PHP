<?php

namespace Src\Database;
use \PDO;

class Update
{
    private $user, $password;

    public function __construct($id, $name, $password)
    {
        try {
            $query = Connect::getInstance()->prepare(
                "UPDATE users SET name = :name, password = :password WHERE id = :id;"
            );
            $query->bindValue(":id", $id, PDO::PARAM_STR);
            $query->bindValue(":name", $name, PDO::PARAM_STR);
            $query->bindValue(":password", $password, PDO::PARAM_STR);
            $query->execute();

        } catch (PDOException $exception) {
            var_dump($exception);
            die("Erro ao Atualizar!");
        }
    }
}