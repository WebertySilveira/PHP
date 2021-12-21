<?php

namespace Src\Database;
use \PDO;

class Delete
{
    private $user, $password;

    public function __construct($id)
    {
        try {
            $query = Connect::getInstance()->prepare(
                "DELETE FROM users WHERE id = :id;"
            );
            $query->bindValue(":id", $id, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $exception) {
            var_dump($exception);
            die("Erro ao Deletar!");
        }
    }
}