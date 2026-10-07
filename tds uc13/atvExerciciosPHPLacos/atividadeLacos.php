<?php
    echo "<h1>Atividade de Laços</h1>";
    echo "<h2> 1. Atividades com o laço for1. Múltiplos de 3. <br> Exibir todos os números múltiplos de 3 compreendidos no intervalo de 1 a 50.<br>"
?>
<?php
    for ($i = 3; $i <= 50; $i += 3) {
        echo $i . "<br>";
    }
?>
<?php
    echo "2. Soma Acumulada de 1 a 100<br>
   Calcular e exibir o somatório de todos os números inteiros de 1 até 100 (o resultado esperado é 5050).<br>"
?>
<?php
    $soma = 0;
    for ($i = 1; $i <= 100; $i++) {
        $soma += $i;
    }
    echo "A soma total de 1 a 100 é: " . $soma . "<br>";
?>

<?php
    echo "3. Cálculo de Fatorial<br>
     Calcular o fatorial de um número inteiro armazenado em uma variável (por exemplo, calcular 5! = 5 x 4 x 3 x 2 x 1).<br>"
?>

<?php
    $numero = 5;
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    echo "O fatorial de " . $numero . " é: " . $fatorial . "<br>";
?>

<?php
    echo "Sequência Decrescente com Passo Fixo<br>
   Criar uma contagem decrescente de 100 até 0, diminuindo de 5 em 5 a cada passo(volta do laço).<br>"
?>

<?php

    for ($i = 100; $i >= 0; $i -= 5) {
        echo $i . "<br>";
    }
    
?>

<?php
    echo "Dado um número inicial (ex: 1000) em uma variável, dividi-lo sucessivamente por 2 e contar quantas divisões foram necessárias até que o valor resultante se torne menor do que 1.<br>"
?>

<?php
    $numeroInicial = 1000;
    $contadorDivisoes = 0;

    while ($numeroInicial >= 1) {
        $numeroInicial /= 2;
        $contadorDivisoes++;
    }

    echo "Foram necessárias " . $contadorDivisoes . " divisões para que o valor se tornasse menor que 1.<br>";
?>


