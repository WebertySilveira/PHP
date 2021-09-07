<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $cidade;
    private $cpf;

    public function __construct(string $nome, int $idade, string $cidade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
    private function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function trocarCpf($nome, $cpf)
    {
        $result = $this->nome == $nome ? $this->setCpf($cpf) : throw new Exception('Inválido');
        return $result;
    }
}


