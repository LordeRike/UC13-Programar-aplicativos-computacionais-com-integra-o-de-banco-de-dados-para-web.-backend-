<?php
    if ($_SERVER["REQUEST_METHOD"] == "post") {
        $altura = isset($_POST["altura"]) ? (float)$_POST["altura"] : 0;
        $peso = isset($_POST["peso"]) ? (float)$_POST["peso"] : 0;

        $calcular = $peso / ($altura * $altura);
        echo "Seu IMC é de $calcular";

        if ($calulcar < 18.5) {
            echo "Seu IMC está em Baixo peso / Magreza ";
        } elseif ($calcular >=18.5 || $calcular <= 24.9 ) {
            echo "Seu IMC está em Peso adequado (normal) ";
        } elseif ($calcular >=25.0 || $calcular <= 29.9){
            echo "Seu IMC está em Sobrepeso  ";
        } elseif ($calcular >=30.0 || $calcular <= 34.9) {
            echo "Seu IMC está Obesidade grau I  ";
        } elseif ($calcular >=35.0 || $calcular <= 39.9){
            echo "Seu IMC está em Obesidade grau II (severa)     ";
        } elseif ($calcular >= 40.0) {
            echo "Seu IMC está em Obesidade grau III (mórbida / grave) ";
        }
    } else {
        echo "Acesso inválido. Por favor, utilize o formulário para enviar os dados.";
    }
?>