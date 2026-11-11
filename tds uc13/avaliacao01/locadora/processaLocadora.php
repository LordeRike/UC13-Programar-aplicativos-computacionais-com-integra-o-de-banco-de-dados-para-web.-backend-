<?php
    require_once 'locadora.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $modeloR = $_POST['modelo'];
        $valorDiariaR = $_POST['valorDiaria'];
        $qtdDiasR = $_POST['qtdDias'];
        $seguroR = $_POST['seguro'];

        $novaLocacao = new Locadora($modeloR, $valorDiariaR, $qtdDiasR, $seguroR);

        echo "<h2>Locação adicionada com sucesso</h2>";
        echo "<p>".$novaLocacao->calcularTotal()."</p>";
        echo "<p>".$novaLocacao->verificarBeneficio()."</p>";
        echo "<br><a href='../locadora/locadora.html'>Voltar ao formulário</a>";
    } else {
        echo "Acesso inválido. Por favor, utilize o formulário.";
    }
?>