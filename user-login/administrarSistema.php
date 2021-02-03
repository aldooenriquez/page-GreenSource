<?php

    session_start();
    require ('../conexion.php');

    if (!isset($_SESSION['usuario']))
    {
        echo "<script>alert('Debes iniciar sesión!');</script>";
        echo "<script>window.location.href='../index.php';</script>";
        die();
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="styles-login/styles-menu-user-login.css">
	<link rel="stylesheet" href="styles-login/administrarSistema.css">
	<link rel="stylesheet" href="../styles/styles-footer.css">
	<link rel="stylesheet" href="../fonts/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"/>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="../js/scripts.js"></script>
    <script src="../js/form.js"></script>

	<title>Solicitud-sistema</title>
</head>
<body>

    <?php require('menu-login.php')?>

    <div class="banner">
        <div class="img-banner">
            <p>ADMINISTRAR SISTEMA</p>
        </div>
    </div>

    <?php

        $sql = "SELECT nombre FROM solicitud";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0 && $result == $_SESSION['usuario'])
        {
            echo "<script>window.location.href='administrarSistmea2.php'</script>";
        }
        else
        {
            echo "<div class='no-system'><p>--- No tienes sistema ---</p><br>";
        }

        
                
    ?>

    <button id="abrir">Solicitar </button></div>

   
    <div class="modal" id="solicitud" >
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="delete" aria-label="close" id="cerrar"></button>
            </header>
            <section class="modal-card-body">
                <form action="solicitud.php" method="POST">
                    <div id="info">
                        <label class="sr-only">Nombre completo</label>
                        <input type="text" name="nombre" placeholder="Nombre completo">

                        <label class="sr-only">Ciudad / estado</label>
                        <input type="text" name="zona" placeholder="Ciudad / estado">
                    </div>
                    <div class="opc">
                        <label for="" class="sr-only">Selecciona el tipo de invernadero</label>
                        <select name="opcion" id="">
                            <option value="">---- Ninugno ----</option>
                            <option value="Invernadero de capilla">Invernadero de capilla</option>
                            <option value="Invernadero de tunel">Invernadero de tunel</option>
                            <option value="Invernadero tipo domo">Invernadero tipo domo</option>
                            <option value="Invernadero hidropónico">Invernadero hidropónico</option>
                        </select>
                        <input type="checkbox" id="check" name="check" value="si">
                        <label for="" id="label-check">Soliciatr presupuesto</label>

                    </div>
                    <input type="submit" class="button is-success" value="Enviar solicitud">
                </form>
            </section>
            <footer class="modal-card-foot">
                
                <button class="button" value="Cancelar">Cancelar
            </footer>
        </div>
    </div>


    <?php require('../footer.html')?>
    
</body>
</html>