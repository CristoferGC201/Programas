<?php
// Generar un número aleatorio entre 1 y 100
$numero = rand(1, 100);

// Imprimir el número generado
echo "Número generado: $numero<br>";

// Verificar si el número es mayor, menor o igual a 50
if ($numero > 50) {
    echo "El número $numero es mayor que 50.";
} elseif ($numero < 50) {
    echo "El número $numero es menor que 50.";
} else {
    echo "El número es igual a 50.";
}
?>
