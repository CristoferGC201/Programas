<?php
// Definir el número
$numero = 5; // Puedes cambiar este valor para generar la tabla de otro número

// Generar la tabla de multiplicar
echo "Tabla de multiplicar del $numero:<br>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
?>
