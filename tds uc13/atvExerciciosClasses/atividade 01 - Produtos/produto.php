<?php
    class Produto {
        private $descricao;
        private $fabricante;
        private $peso;
        private $valor;
        private $quantidade;

        public function __construct($descricao, $fabricante, $peso, $quantidade, $valor) {
            $this->descricao = $descricao;
            $this->fabricante = $fabricante;
            $this->peso = $peso;
            $this->valor = $valor;
            $this->quantidade = $quantidade;
        }

        public function apresentar() {
            $soma = $this->quantidade * $this->valor;
            return "<h2>Produto: {$this->descricao}<h2> <p>Fabricante: <strong>{$this->fabricante}<strong><br>Peso(Kg): <strong>{$this->peso}<strong><br>Valor(R$): <strong>{$this->valor}<strong><br>Quantidade em Estoque: <strong>{$this->quantidade}<strong><br>Valor em Estoque: <strong>$soma<strong> </p>";
        }
    }
?>