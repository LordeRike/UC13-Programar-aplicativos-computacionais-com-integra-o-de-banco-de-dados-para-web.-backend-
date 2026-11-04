<?php
    require_once 'contaBancario.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $titularR = $_POST['titular'];
        $saldoR = $_POST['saldo'] = 100.00;
        $valorR = $_POST['valor'];

        $novaMovimentacao = new ContaBancaria($titularR, $saldoR);

        if (isset($_POST['depositar'])) {
            echo "<p>!".$novaMovimentacao->depositar($valorR)."</p>";
            echo "<br><a href='index.html'>Voltar ao formulário</a>";
        } elseif (isset($_POST['sacar'])) {
            echo "<p>!".$novaMovimentacao->sacar($valorR)."</p>";           
            echo "<br><a href='index.html'>Voltar ao formulário</a>";
        }


    } else {
        echo "Acesso inválido. Por favor, utilize o formulário.";
    }
?>