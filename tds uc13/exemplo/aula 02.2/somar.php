<?php
// Verifica se a página foi acedida através de uma submissão de formulário (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recolhe os valores do array superglobal $_POST
    // Utilizamos (float) para garantir que o valor é tratado como um número (mesmo que tenha casas decimais)
    // o isset testa se a variavel exist e é diferente de nulo
    //Verifica se existe a variável $_POST["num1"] (ou seja, se o utilizador enviou o primeiro número). Se sim (?), guarda esse valor na variável $num1. Se não (:), guarda o valor 0.
    $num1 = isset($_POST["num1"]) ? (float)$_POST["num1"] : 0;
    $num2 = isset($_POST["num2"]) ? (float)$_POST["num2"] : 0;
    $num3 = isset($_POST["num3"]) ? (float)$_POST["num3"] : 0;

    // Realiza a soma dos três números
    $soma = $num1 + $num2 + $num3;

    // Exibe o resultado ao utilizador
    echo "<h3>Resultado do Cálculo:</h3>";
    echo "O primeiro número inserido foi: " . $num1 . "<br>";
    echo "O segundo número inserido foi: " . $num2 . "<br>";
    echo "O terceiro número inserido foi: " . $num3 . "<br><br>";
    
    echo "<strong>A soma total é: " . $soma . "</strong>";
    
    echo '<br><br><a href="index.html">Voltar ao formulário</a>';
    
} else {
    // Mensagem de erro caso alguém tente aceder diretamente ao somar.php sem enviar o formulário
    echo "Acesso inválido. Por favor, utilize o formulário para enviar os dados.";
}
?>