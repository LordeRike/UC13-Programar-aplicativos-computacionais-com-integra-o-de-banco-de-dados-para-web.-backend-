<?php
    include 'conexao.php';
    $conn = Obterconexao();

    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
    $quantidade = $_POST["quantidade"];

    $query = 'INSERT INTO produto( descricao, valor, quantidade) VALUES ($1, $2, $3);';

    $stmt = pg_prepare($conn, "insert_query", $query);

    if ($stmt) {
        $result = pg_execute($conn, "insert_query", array($descricao, $valor, $quantidade));

        if ($result) {
            echo "Produto Cadastrodo com Sucesso!";
        } else {
            echo "Ocorreu um erro ao inserir os dados.";
        }
    } else {
        echo "Ocorreu um erro ao preparar a consulta.";
    }
?>