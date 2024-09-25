<?php
// Declaración de variables
$a = 20;
$b = 5;

// Operaciones aritméticas
echo "Suma: " . ($a + $b) . "<br>";
echo "Resta: " . ($a - $b) . "<br>";
echo "Multiplicación: " . ($a * $b) . "<br>";
echo "División: " . ($a / $b) . "<br>";
echo "Módulo: " . ($a % $b) . "<br>";

// Comparaciones
echo "¿\$a es mayor que \$b? " . ($a > $b ? 'true' : 'false') . "<br>";
echo "¿\$a es menor que \$b? " . ($a < $b ? 'true' : 'false') . "<br>";
echo "¿\$a es igual a \$b? " . ($a == $b ? 'true' : 'false') . "<br>";

// Operadores lógicos
echo "¿\$a es mayor que 10 y \$b es menor que 10? " . (($a > 10 && $b < 10) ? 'true' : 'false') . "<br>";
echo "¿\$a es mayor que 10 o \$b es menor que 10? " . (($a > 10 || $b < 10) ? 'true' : 'false') . "<br>";
?>
