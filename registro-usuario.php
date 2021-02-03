<?php

    require('conexion.php');

    if(isset($_POST['nombre']))
    {
        $sql = "INSERT INTO usuarios (nombre, apellidos, correo, telefono, dependencia, password) VALUES ('".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['correo']."', '".$_POST['telefono']."', '".$_POST['dependencia']."', '".$_POST['password']."')";
    
        if ($conn->query($sql) === TRUE)
        {
            echo "<script>alert('Ahora incia sesión para continuar');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }
        else
        {
            echo "<script>alert('Fatal error');</script>";
        }
    }


?>
