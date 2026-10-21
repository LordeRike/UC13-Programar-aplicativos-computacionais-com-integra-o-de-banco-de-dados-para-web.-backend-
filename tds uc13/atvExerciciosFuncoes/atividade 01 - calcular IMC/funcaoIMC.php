<?php
    function calcularIMC($peso, $altura) {
        $calcular = $peso / ($altura * $altura);
        return $calcular;
    }
?>