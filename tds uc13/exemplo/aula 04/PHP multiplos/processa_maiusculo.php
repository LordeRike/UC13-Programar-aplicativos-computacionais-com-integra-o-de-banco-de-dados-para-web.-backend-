<?php
// Usa o include para importar a função do outro arquivo
include 'funcoes.php';

if (isset($_POST['nome'])) {
    $nome_recebido = $_POST['nome'];
    
    // Chama a função que foi importada pelo include
    $nome_m = maisculo($nome_recebido);
    
    echo "<h1>Resultado da Formatação</h1>";
    echo "<p>O nome formatado é: <strong>$nome_m</strong></p>";
    echo "<br><a href='index.html'>Voltar</a>";
} else {
    echo "Nenhum nome foi enviado.";
}
?>