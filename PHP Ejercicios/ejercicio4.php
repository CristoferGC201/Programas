<?php
// Definir el número
$numero = 6; // Puedes cambiar este valor para calcular el factorial de otro número

// Calcular el factorial
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

// Imprimir el resultado
echo "El factorial de $numero es: $factorial";
?>
