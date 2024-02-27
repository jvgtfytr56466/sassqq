<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Guardar los datos en un archivo de texto (opcional)
    $archivo = 'datos.txt';
    $contenido = "Teléfono: $telefono - Correo electrónico: $email\n";
    
    file_put_contents($archivo, $contenido, FILE_APPEND);

    // Redirigir a la página de Facebook
    header("Location: https://www.facebook.com/OlimpiaCoral");
    exit();
}
?>
