<?php
    require_once 'funcionario.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $nomeR = $_POST['nome'];
        $setorR = $_POST['setor'];
        $tempoR = $_POST['tempo'];
        $salarioR = $_POST['salario'];

        $novoFuncionario = new Funcionario($nomeR, $setorR, $tempoR, $salarioR);

        echo "<h2>Funcionario adicionado com sucesso</h2>";
        echo "<p>".$novoFuncionario->dadosSalario()."</p>";
        echo "<br><a href='index.html'>Voltar ao formulário</a>";
    } else {
        echo "Acesso inválido. Por favor, utilize o formulário.";
    }
?>