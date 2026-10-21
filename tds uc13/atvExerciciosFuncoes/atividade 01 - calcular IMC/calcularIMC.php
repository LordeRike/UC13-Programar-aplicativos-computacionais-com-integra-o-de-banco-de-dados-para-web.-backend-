<?php
    include 'funcaoIMC.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $altura = isset($_POST["altura"]) ? (float)$_POST["altura"] : 0;
        $peso = isset($_POST["peso"]) ? (float)$_POST["peso"] : 0;

       if ($altura > 0) {
            $calc = calcularIMC($peso, $altura);
           
            echo "O seu IMC é de " . number_format($calc, 2) . "<br>";

            if ($calc < 18.5) {
                echo "O seu IMC está em Baixo peso / Magreza";
            } elseif ($calc >= 18.5 && $calc <= 24.9 ) {
                echo "O seu IMC está em Peso adequado (normal)";
            } elseif ($calc >= 25.0 && $calc <= 29.9){
                echo "O seu IMC está em Sobrepeso";
            } elseif ($calc >= 30.0 && $calc <= 34.9) {
                echo "O seu IMC está em Obesidade grau I";
            } elseif ($calc >= 35.0 && $calc <= 39.9){
                echo "O seu IMC está em Obesidade grau II (severa)";
            } elseif ($calc >= 40.0) {
                echo "O seu IMC está em Obesidade grau III (mórbida / grave)";
            }
        } else {
            echo "Erro: A altura deve ser maior que zero.";
        }
    } else {
        echo "Acesso inválido. Por favor, utilize o formulário para enviar os dados.";
    }
?>