<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Estilos del sitio -->

    <link rel="stylesheet" href="styles/styles-menu.css">
    <link rel="stylesheet" href="styles/styles-contactUs.css">
    <link rel="stylesheet" href="styles/styles-footer.css">

    <!-- Estilos externos -->

    <link rel="stylesheet" href="styles/animate.css">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Scripts externos -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Scripts internos -->

    <script src="js/scripts.js"></script>
    <script src="js/addClas.js"></script>
    <script src="js/OnScrol.js"></script>

    <title>Contacto</title>
</head>
<body>
    <?php
        require('menu.html');
    ?>
    
    <div class="layout"></div>
    
    <div class="banner">
        <div class="img-banner">
            <p>CONTACTO</p>
        </div>
    </div>

    <div class="body container-fluid row">
        <div class="form-contact row">
            <div class="info-contact col-md-6">
                <span class="icon-user1"></span>
                <h2>INFORMACIÓN DE CONTACTO</h2>

                
                <div><span class="icon-mail"></span><p>greensource70@gmail.com</p></div>
                <div><span class="icon-phone"></span><p>312-197-60-93</p></div>
                <div><span class="icon-location1"></span>
                <p>
                    Col. Solidaridad, Laguna de Carrizalillos #281 CP. 28979
                </p></div>
            </div>
            <form action="prueba-correo.php" method="POST" clasS="col-md-6">
                
                <h2>Contáctanos</h2>
                <br>
                <br>
                <label class="sr-only">Ingresa tu nombre</label>
                <input type="text" placeholder="Nombre completo" name="nombre">

                <label class="sr-only">Ingresa tu no. de teléfono</label>
                <input type="tel" placeholder="Teléfono" name="telefono">

                <label class="sr-only">Ingresa tu correo</label>
                <input type="mail" placeholder="Correo" name="mail">

                <label class="sr-only">Escribe el mensaje</label>
                <textarea id="" placeholder="Escribe el mensaje" name="mensaje"></textarea>

                <input type="submit">
            </form>
        </div>
    </div>

    <?php
        require('footer.html');
    ?>

    

</body>
</html>