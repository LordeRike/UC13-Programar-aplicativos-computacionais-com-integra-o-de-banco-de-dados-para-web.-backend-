<?php
    function validar($senha) {
        $tamanhoOk = mb_strlen($senha) >= 8;
        
        $maiusculaOk = preg_match('/[A-Z]/', $senha);
        
        $numeroOk = preg_match('/[0-9]/', $senha);

        if ($tamanhoOk && $maiusculaOk && $numeroOk) {
            return true;
        } else {
            return false;
        }
    }

    if (isset($_POST['senha'])) {
        $valor = $_POST['senha'];
        
        $resultado = validar($valor);

        echo "<h2>Resultado da Validação:</h2>";
        
        if ($resultado) {
            echo "<p style='color: green;'><strong>true:</strong> A senha é forte e válida!</p>";
        } else {
            echo "<p style='color: red;'><strong>false:</strong> A senha é fraca. Ela precisa ter no mínimo 8 caracteres, uma letra maiúscula e um número.</p>";
        }
    } else {
        echo "Nenhuma senha foi enviada.";
    }
?>