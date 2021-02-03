<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="styles/styles-menu.css">
	<link rel="stylesheet" href="styles/styles-login.css">
	<link rel="stylesheet" href="styles/styles-footer.css">
	<link rel="stylesheet" href="fonts/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="js/scripts.js"></script>
    <script src="js/form.js"></script>

	<title>Document</title>
</head>
<body>
	<?php require('menu.html')?>
	
	<div class="layout">
        
    </div>

    <div class="content">
        <img src="images/background-login.png">
    
        <div class="content-form">   
            <div class="options">
                <div class="opc-register">
                    <h2>¿No tienes una cuenta?</h2>
                    <p>
                        Regístrate para poder tener más beneficios
                        <br>y servicios
                    </p>
                    <button class="button is-link">Regístrate</button>
                    
                </div>
                <div class="opc-login">
                    <h2>¿Tienes una cuenta?</h2>
                    <p>Inicia sesión para tener control de tu sistema</p>
                    <button class="button is-link">Inicar sesión</button>
                </div>
            </div>

            <div class="forms">
                <div class="form-register col-md-6">
                    <form action="registro-usuario.php" method="POST">
                        <h2>SIGN UP</h2>

                        <label class="sr-only">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre">

                        <label class="sr-only">Apellidos</label>
                        <input type="text" name="apellidos" placeholder="Apellidos">

                        <label class="sr-only">Teléfono</label>
                        <input type="tel" name="telefono" placeholder="Teléfono">

                        <label class="sr-only">Dependencia</label>
                        <input type="text" name="dependencia" placeholder="Dependencia">
                        
                        <label class="sr-only">Correo</label>
                        <input type="mail" name="correo" placeholder="Correo">

                        <label class="sr-only">password</label>
                        <input type="password" name="password" placeholder="Password">


                        <input type="submit" value="Sign up">
                    </form>
                </div>
                <div class="form-login col-md-6">
                    <form action="valid-user.php" method="POST">
                        <h2>LOGIN</h2>
                        <label class="sr-only">Correo o nombre de usuario</label>
                        <input type="mail" name="correo" placeholder="Correo o nombre de usuario" required>

                        <label class="sr-only">password</label>
                        <input type="password" name="password" placeholder="Password" required>

                        <a href="">Olvidé mi contraseña</a>

                        <input type="submit" value="Login">
                    </form>
                </div>

            </div>

            <div class="login" id="login"></div>
        </div>
    </div>

    <?php require('footer.html')?>
</body>
</html>