<?php
// Definición de string
$email = "test_user@example.com";

// Interpolación
echo "El correo definido es: $email<br>";

// Expresión regular para validar correo
$pattern = "/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/";

// Validar correo
if (preg_match($pattern, $email)) {
    echo "El correo es válido.<br>";
} else {
    echo "El correo no es válido.<br>";
}

// Extraer nombre de usuario
$nombreUsuario = substr($email, 0, strpos($email, '@'));
echo "Nombre de usuario: $nombreUsuario<br>";
?>
