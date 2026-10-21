<?php
// Este arquivo guarda apenas as funções.
// Ele resolve o problema da função strtoupper não funcionar com acentos em algumas versões
function maisculo($string) {
    $string = strtoupper($string);
    $string = str_replace("á", "Á", $string);
    $string = str_replace("é", "É", $string);
    $string = str_replace("í", "Í", $string);
    $string = str_replace("ó", "Ó", $string);
    $string = str_replace("ú", "Ú", $string);
    $string = str_replace("ã", "Ã", $string);
    $string = str_replace("õ", "Õ", $string);
    $string = str_replace("ç", "Ç", $string);
    
    // O comando return garante que as alterações não sejam perdidas fora da função
    return $string;
}
?>