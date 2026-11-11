<?php
    class Cambio {
        private $cliente;
        private $moedaDestino;
        private $valorReal;
        private $cotacao;

        public function __construct($cliente, $moedaDestino, $valorReal, $cotacao) {
            $this->cliente = $cliente;
            $this->moedaDestino = $moedaDestino;
            $this->valorReal = $valorReal;
            $this->cotacao = $cotacao;
        }

        public function converter() {
            $moeda = $this->moedaDestino;
            $valReal = $this->valorReal;
            $valCota = $this->cotacao;
            $valTotal = 0.0;

            $valTotal = $valReal / $valCota ;
            return "<p>Conversão para cliente: <strong>{$this->cliente}</strong> de R$ <strong>$valReal</strong> em <strong>$moeda</strong><br> Total <strong>$moeda</strong> <strong>".number_format($valTotal,2)."</strong> </p>";
        }

        public function calcularTaxa() {
            $valReal = $this->valorReal;
            $valCota = $this->cotacao;
            $valTotal = $valReal / $valCota;

            if ($valReal >= 5000.0) {
                return "<p>Operação <strong>ISENTA</strong> de taxas</p>";
            } else {
                $valTotal = $valTotal + 50.0;
                return "<p>Operação <strong>POSSUI</strong> taxa. <br>Valor Total <strong>".number_format($valTotal,2)."</strong></p>";
            }

        }

    }
    
?>