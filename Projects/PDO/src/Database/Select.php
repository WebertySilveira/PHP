<?php

namespace Src\Database;
use \PDO;

class Select
{

    public function __construct()
    {
        try {
            $query = Connect::getInstance()->prepare(
                "SELECT * FROM users;"
            );
            $query->execute();
            var_dump(
                $query->fetchAll()
            );
        } catch (PDOException $exception) {
            var_dump($exception);
            die("Erro ao Exibir!");
        }
    }
}