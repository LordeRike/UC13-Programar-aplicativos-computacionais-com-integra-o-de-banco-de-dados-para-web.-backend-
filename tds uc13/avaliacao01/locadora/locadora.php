<?php
    class Locadora {
        private $modelo;
        private $valorDiaria;
        private $qtdDias;
        private $seguro;

        public function __construct($modelo, $valorDiaria, $qtdDias, $seguro) {
            $this->modelo = $modelo;
            $this->valorDiaria = $valorDiaria;
            $this->qtdDias = $qtdDias;
            $this->seguro = $seguro;
        }

        public function calcularTotal() {
            $val = $this->valorDiaria;
            $qtd = $this->qtdDias;
            $segu = $this->seguro;
            $total = 0.0;

            if ($segu == 1) {
                $total = (50.00  * $qtd) + ($val * $qtd);
                return "<p>Veiculo: <strong>{$this->modelo}</strong><br>
                Valor da Diária: R$ <strong>$val</strong><br>
                Dias: <strong>$qtd</strong><br>
                Seguro: <strong>SIM</strong><br>
                Valor Total: R$ <strong>$total</strong>
                </p>";
            } if ($segu == 2) {
                $total = $val * $qtd;
                return "<p>Veiculo: <strong>{$this->modelo}</strong><br>
                Valor da Diária: R$ <strong>$val</strong><br>
                Dias: <strong>$qtd</strong><br>
                Seguro: <strong>NÃO</strong><br>
                Valor Total: R$ <strong>$total</strong>";
            } else {
                return "Dados Invalidos";
            }
            
        }

        public function verificarBeneficio() {
            $qtd = $this->qtdDias;
            $segu = $this->seguro;

            if ($segu == 1 && $qtd >= 7) {
                return "<p>Você Possui Benefícios Extras por contratar o seguro: <br>
                <strong>Direito a Lavagem Grátis</strong></p>";
            } else {
                return "<p>Você NÃO Possui Benefícios Extras </p>";
            }

        }
    }

?>