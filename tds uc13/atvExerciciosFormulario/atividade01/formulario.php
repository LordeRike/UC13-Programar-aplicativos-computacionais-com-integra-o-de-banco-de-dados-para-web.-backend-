<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"]; 
        $idade = isset($_POST["idade"]) ? (float)$_POST["idade"] : 0;
        $nascimento = 2026 - $idade;

        echo "<h3> Mensagem Personalizada<h3>";
        echo "<h2>Olá! me chamo $nome , e tenho $nascimento anos!<h2>";

    } else {
        echo"Acesso inválido. Por favor, utilize o formulário para enviar os dados.";
    }
?>