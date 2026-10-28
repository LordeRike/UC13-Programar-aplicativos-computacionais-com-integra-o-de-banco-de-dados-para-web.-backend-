<?php
// 1. Requisitar o arquivo onde a classe está definida
require_once 'Pessoa.php';

// 2. Verificar se a requisição veio do formulário via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Capturar os dados enviados pelo formulário
    $nomeRecebido = $_POST['nome'];
    $idadeRecebida = $_POST['idade'];
    $profissaoRecebida = $_POST['profissao'];

    // 3. Instanciar (criar) o objeto Pessoa usando os dados capturados
    $novaPessoa = new Pessoa($nomeRecebido, $idadeRecebida, $profissaoRecebida);

    // 4. Utilizar o objeto
    echo "<h2>Objeto Criado com Sucesso!</h2>";
    
    // Chamando o método apresentar() do objeto recém-criado
    echo "<p>" . $novaPessoa->apresentar() . "</p>";

    // Link para voltar ao formulário
    echo "<br><a href='index.html'>Voltar ao formulário</a>";

} else {
    echo "Acesso inválido. Por favor, utilize o formulário.";
}
?>