<?php

    $desde = "greensource70@gmail.com";
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $destino = $_POST['mail'];
    $mensaje = $_POST['mensaje'];

    $contenido = "Nombre: " . $nombre . "\nTeléfono: " . $telefono . "\nCorreo: " . $mail . "\nMensaje: " . $mensaje ."";
    mail($desde, "Correo de prueba", $contenido);

?>

