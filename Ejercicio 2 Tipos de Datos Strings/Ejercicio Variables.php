<?php
// Declaración de variables
$edad = 25;
$nombre = "Juan Pérez";
$esEstudiante = true;

// Mostrar valores de las variables
echo "Mi nombre es $nombre, tengo $edad años y soy estudiante: " . ($esEstudiante ? 'Sí' : 'No') . "<br>";

// Modificación de la variable
$edad /= 2; // Dividir la edad a la mitad

// Mostrar valores nuevamente
echo "Mi nombre es $nombre, tengo $edad años y soy estudiante: " . ($esEstudiante ? 'Sí' : 'No') . "<br>";
?>
