<?php
    require_once 'produto.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $descricaoR = $_POST['descricao'];
        $fabricanteR = $_POST['fabricante'];
        $pesoR = $_POST['peso'];
        $valorR = $_POST['valor'];
        $quantidadeR = $_POST['quantidade'];

        $novoProduto = new Produto($descricaoR, $fabricanteR, $pesoR, $valorR, $quantidadeR);

        echo "<h2>Produto adicionado com sucesso<h2>";
        echo "<p>".$novoProduto->apresentar()."</p>";
        echo "<br><a href='index.html'>Voltar ao formulário</a>";
    } else {
        echo "Acesso inválido. Por favor, utilize o formulário.";
    }
?>