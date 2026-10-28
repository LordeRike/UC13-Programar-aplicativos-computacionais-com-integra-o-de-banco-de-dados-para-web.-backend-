<?php

class Pessoa {
    // Atributos privados (Encapsulamento)
    private $nome;
    private $idade;
    private $profissao;

    // Construtor
    public function __construct($nome, $idade, $profissao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    // Método para exibir as informações formatadas
    public function apresentar() {
        return "Olá! Meu nome é <strong>{$this->nome}</strong>, tenho {$this->idade} anos e trabalho como <strong>{$this->profissao}</strong>.";
    }
}

?>