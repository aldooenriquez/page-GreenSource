<?php

    require ('../conexion.php');

    // print_r($_POST);
    // $res = "SELECT nombre FROM usuarios";

    // if($_POST['nombre'] == $res)
    // {
        if(isset($_POST['nombre']) && isset($_POST['check']))
        {
            if ($_POST['check'] == "si")
            {
                $sql = "INSERT INTO solicitud (nombre, invernaderoTipo, zona, presupuesto) VALUES ('".$_POST['nombre']."', '".$_POST['opcion']."', '".$_POST['zona']."', 1)";
    
                if($conn->query($sql) === TRUE)
                {
                    
                    header('Location: administrarSistema2.php');
                }
                else
                {
                    header('Location: administrarSistema.php');
                }
            }
            else
            {
                $sql = "INSERT INTO solicitud (nombre, invernaderoTipo, zona, presupuesto) VALUES ('".$_POST['nombre']."', '".$_POST['opcion']."', '".$_POST['zona']."', 0)";
    
                if($conn->query($sql) === TRUE)
                {
                    
                    header('Location: administrarSistema2.php');
                }
                else
                {
                    header('Location: administrarSistema.php');
                }
            }
            
        }
        else
        {
            header('Location: administrarSistema.php');
        }
    // }   
?>