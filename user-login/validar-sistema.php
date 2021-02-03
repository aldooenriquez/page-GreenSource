<?php
     session_start();
     require('../conexion.php');

     if (!isset($_SESSION['usuario']))
     {
         header('Location: ../login.php');
     }
     else
     {
         $sql = "SELECT nombre FROM solicitud WHERE nombre='".$_SESSION['usuario']."'";
         $result = $conn->query($sql);
         
         if(mysqli_num_rows($result) == 1)
         {
             while($row = $result->fetch_assoc()) {
                 
                if ($row['nombre'] == $_SESSION['usuario'])
                {
                    header('Location:administrarSistema2.php');
                }
                else
                {
                    header('Location:administrarSistema.php');
                }
             }
         }
         else
         {
            header('Location:administrarSistema.php');
         }
     }


?>