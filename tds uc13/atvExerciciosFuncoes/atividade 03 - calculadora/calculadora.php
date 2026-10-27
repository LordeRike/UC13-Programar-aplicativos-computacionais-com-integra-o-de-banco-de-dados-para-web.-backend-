<?php
    function calcular($num1, $num2, $operador) {
        if ($operador == "+") {
            $operador = "+";
            return $num1 + $num2;
        } elseif ($operador == "-") {
            $operador = "-";
            return $num1 - $num2;
        } elseif ($operador == "*") {
            $operador = "*";
            return $num1 * $num2;
        } elseif ($operador == "/") {
            $operador = "/";
            return $num1 / $num2;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = isset($_POST["num1"]) ? (float)$_POST["num1"] : 0;
        $num2 = isset($_POST["num2"]) ? (float)$_POST["num2"] : 0;
        $operador = ($_POST["operador"]);

        echo "<h2>Resultado</h2>";
        echo "<p><strong>$num1  $operador $num2<strong> = ". calcular($num1, $num2, $operador) ."</p>";
        echo "<br><a href='index.html'>Voltar</a>";

    } else {
        echo "Nenhum valor foi enviado.";
    }
?>