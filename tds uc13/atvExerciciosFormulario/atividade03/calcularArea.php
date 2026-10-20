<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $largura = isset($_POST["largura"]) ? (float)$_POST["largura"] : 0.0;
        $altura = isset($_POST["altura"]) ? (float)$_POST["altura"] : 0.0;

        $area = $largura * $altura;
        $perimetro = 2 * ($largura + $altura);

        echo "O retangulo possui $altura cm de altura e $largura cm de largura <br>";
        echo "O Perimetro é de $perimetro <br>";
        echo "E a area é de $area";
    }
?>