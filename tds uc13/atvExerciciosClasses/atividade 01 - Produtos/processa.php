<?php
    require_once 'produto.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $descricaoR = $_POST['descricao'];
        $fabricanteR = $_POST['fabricante'];
        $pesoR = $_POST['peso'];
        $valorR = $_POST['valor'];
        $quantidadeR = $_POST['quantidade'];

        $novoProduto = new Produto($descricaoR, $fabricanteR);
    }
?>