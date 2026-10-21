<?php
// Declaração da função no arquivo que recebe os dados
function triplo($numero) {
    $x = $numero * 3;
    return $x;
}

// Verifica se os dados foram recebidos
if (isset($_POST['numero'])) {
    $valor = $_POST['numero'];
    
    // O retorno de uma função pode ser impresso diretamente ou concatenado
    echo "<h1>Resultado</h1>";
    echo "O triplo de $valor é " . triplo($valor);
    echo "<br><a href='index.html'>Voltar</a>";
} else {
    echo "Nenhum valor foi enviado.";
}
?>