<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $num1 = isset($_POST["num1"]) ? (float)$_POST["num1"] : 0;
        $num2 = isset($_POST["num2"]) ? (float)$_POST["num2"] : 0;
        $num3 = isset($_POST["num3"]) ? (float)$_POST["num3"] : 0;

        $media = ($num1 + $num2 + $num3) / 3;

        echo "O aluno <strong>$nome<strong>, <br>
            tirou as notas:<br> <strong>$num1;<br> $num2; <br> $num3 <strong>. <br>
            Ficando com a Média: <strong>$media<strong>.";
        if ($media >= 7 ) {
            echo "O aluno está <strong>APROVADO<strong>";
        } else {
            echo "O aluno está <strong>REPROVADO<strong>";
        }

    } else {
        echo "Acesso inválido. Por favor, utilize o formulário para enviar os dados.";
    }
?>