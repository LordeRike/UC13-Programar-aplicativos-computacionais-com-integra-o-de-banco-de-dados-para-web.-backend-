<?php
    class Viagem {
        private $destino;
        private $distancia;
        private $consumo;
        private $combustivel;

        public function __construct($destino, $distancia, $consumo, $combustivel) {
            $this->destino = $destino;
            $this->distancia = $distancia;
            $this->consumo = $consumo;
            $this->combustivel = $combustivel;
        }

        public function calcularLitros() {
            $totalLitros = 0.0;
            $calcDistancia = $this->distancia;
            $calcConsumo = $this->consumo;

            $totalLitros = $calcDistancia / $calcConsumo;

            return "<p>Nessa Viagem a <strong>{$this->destino}</strong>, você irá percorrer <strong>$calcDistancia</strong>KM. <br> Com o consumo de <strong>$calcConsumo</strong>l do seu carro, serão necessarios <strong>".number_format($totalLitros,2)."</strong> litros de combustivel.</p>";
        }

        public function avaliarViabilidade() {
            $totalLitros = 0.0;
            $calcDistancia = $this->distancia;
            $calcConsumo = $this->consumo;
            $custoCombustivel = $this->combustivel;

            $totalLitros = $calcDistancia / $calcConsumo;
            $avalia = $totalLitros * $custoCombustivel;
            
            if ($avalia >= 500.00) {
                return "<p>Viagem muito cara, valor total R$<strong>".number_format($avalia,2)."</strong><br> <strong>Considere Voo</strong></p>";
            } else {
                return "<p>Viagem <strong>Econômica</strong>.<br> Valor total R$<strong>".number_format($avalia,2)."</strong><br></p>";
            }

        }
    }
?>