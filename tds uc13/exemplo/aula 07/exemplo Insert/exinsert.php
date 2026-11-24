<?php
  include 'conexao.php';
  $conn = Obterconexao();
  
  
  $nome = $_POST["nome"];
  $endereco = $_POST["endereco"];
 
  

  
  $query = 'insert into cliente (nome,endereco) values ($1, $2)';
  
  
  
  $stmt = pg_prepare($conn, "insert_query", $query);

if ($stmt) {
    // Executar a consulta SQL com os valores fornecidos
    $result = pg_execute($conn, "insert_query", array($nome, $endereco));

    if ($result) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Ocorreu um erro ao inserir os dados.";
    }
} else {
    echo "Ocorreu um erro ao preparar a consulta.";
}
  

?>