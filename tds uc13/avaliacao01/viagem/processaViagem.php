<?php
    require_once 'Viagem.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $destinoR = $_POST['destino'];
        $distanciaR = $_POST['distancia'];
        $consumoR = $_POST['consumo'];
        $combustivel = $_POST['combustivel'];

        $novaViagem = new Viagem($destinoR, $distanciaR, $consumoR, $combustivel);

        echo "<h2>Cotação realizada com sucesso</h2>";
        echo "<p>".$novaViagem->calcularLitros()."</p>";
        echo "<p>".$novaViagem->avaliarViabilidade()."</p>";
        echo "<br><a href='../viagem/viagem.html'>Voltar ao formulário</a>";
    } else {
        echo "Acesso inválido. Por favor, utilize o formulário.";
    }
?>