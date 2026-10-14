<?php
$contador = 1;
while ($contador <= 5) {
echo "Número: " . $contador . "<br>";
$contador++;
}
?>

<?php
// Exemplo de laço for em PHP
for ($i = 1; $i <= 5; $i++) {
echo "Iteração: " . $i . "<br>";
}
// Pós-execução: $i permanece no escopo
// echo $i; // Imprime: 6