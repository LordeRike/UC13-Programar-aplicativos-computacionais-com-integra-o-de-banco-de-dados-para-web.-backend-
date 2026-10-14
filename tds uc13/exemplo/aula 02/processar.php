<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];
    echo "O valor inserido foi: " . $valor;
}
?>