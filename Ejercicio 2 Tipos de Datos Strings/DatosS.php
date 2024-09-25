<?php
// Definición de variables
$entero = 10; // tipo entero
$flotante = 10.5; // tipo flotante

// Mostrar tipo de dato
echo "Tipo de dato de \$entero: " . gettype($entero) . "<br>";
echo "Tipo de dato de \$flotante: " . gettype($flotante) . "<br>";

// Operación matemática
$suma = $entero + $flotante;
echo "La suma de \$entero y \$flotante es: $suma<br>";

// Multiplicación por 10
$enteroPor10 = $entero * 10;
$flotantePor10 = $flotante * 10;

echo "Multiplicación de \$entero por 10: $enteroPor10<br>";
echo "Multiplicación de \$flotante por 10: $flotantePor10<br>";
?>
