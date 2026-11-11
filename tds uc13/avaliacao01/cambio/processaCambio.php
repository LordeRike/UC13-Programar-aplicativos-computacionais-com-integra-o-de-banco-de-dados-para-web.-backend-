<?php
    require_once 'cambio.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $clienteR = $_POST['cliente'];
        $moedaDestinoR = $_POST['moedaDestino'];
        $valorRealR = $_POST['valorReal'];
        $cotacaoR = $_POST['cotacao'];

        $novaCotacao = new Cambio($clienteR, $moedaDestinoR, $valorRealR, $cotacaoR);

        echo "<h2>Cotação realizada com sucesso</h2>";
        echo "<p>".$novaCotacao->converter()."</p>";
        echo "<p>".$novaCotacao->calcularTaxa()."</p>";
        echo "<br><a href='../cambio/cambio.html'>Voltar ao formulário</a>";
    } else {
        echo "Acesso inválido. Por favor, utilize o formulário.";
    }
?>