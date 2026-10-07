<?php
    echo "Olá, mundo!";
    echo "<br>";

    $nome = "Henrique";

    echo "Olá, $nome !";

    $numero1 = 10;
    $numero2 = 15;
    echo "<br>";
    $multiplicacao = $numero1 * $numero2;
    echo "A soma de $numero1 e $numero2 é: $multiplicacao";

    echo "<br>";
    
    $numero3 = 8;
    $verificaPar = $numero3 % 2;
    if ($verificaPar == 0) {
        echo "O número $numero3 é par.";
    } else {
        echo "O número $numero3 é ímpar.";
    }
    

?>