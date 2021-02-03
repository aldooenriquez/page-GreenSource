<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Estilos del sitio -->

    <link rel="stylesheet" href="styles/styles-menu.css">
    <link rel="stylesheet" href="styles/styles-services.css">
    <link rel="stylesheet" href="styles/styles-footer.css">
    <link rel="stylesheet" href="styles/styles-us.css">

    <!-- Estilos externos -->

    <link rel="stylesheet" href="estilos/animate.css">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Scripts externos -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Scripts internos -->

    <script src="js/scripts.js"></script>
    <script src="js/addClas.js"></script>
    <script src="js/OnScrol.js"></script>

    <title>Acerca de</title>
</head>
<body>
    <?php
        require('menu.html');
    ?>

    <div class="layout"></div>

    <div class="banner">
        <div class="img-banner">
            <p>NOSOTROS</p>
        </div>
    </div>

    <div class="content-aboutt-us">
        <div class="content-body">
            
            <section>
                <h2>Acerca de GreenSource</h2>
                <p>
                    Somos una empresa dedicada y especializada en el diseño e instalación de sistemas
                    de invernaderos de casi cualquier tipo.
                    A lo largo del tiempo hemos crecido muchsísimo y actualmente muchas empresas que se dedican a la 
                    plantación y cultivo solicitan nuestros servicios ya que somos una empresa capacitada y de calidad 
                    para realizar todo este tipo de servicios. Contamos con un alto número de personal capacitado pa realizar cualquier tarea o resolver cualquier 
                    inconveniente con su sistema.
                    <br>
                    GreenSource ofrece un sistema en el cual los socios (quienes soliciten nuestros servicios) podrán 
                    tener acceso para estar al tanto de sus sistemas, en el podrán observar el coomportamiento de la temperatura
                    huemdad, luminosidad y demás variables necesarias para un buen cultivo.
                    Así mismo, contamos con una tienda en linea en la cual nuestros clientes podrán comprar prodcutos o 
                    complementos para sus invernaderos.
                    
                </p>
            </section>

            <section class="row">
                <div class="col-md-6">
                    <h2>Misión</h2>
                    <p>
                        Nuestra misión como empresa de servicios es que nuestros socios se sientan satisfechos con nuestros
                        servicios y puedan confiar en nosotros para futuros diseños.
                        Así mismo queremos crecer más en los próximos dos años y ser reconocidos a nivel internacional 
                        para poder ofrecer servicios al extranjero.

                    </p>                    
                </div>
                <div class="col-md-6">
                    <h2>Visión</h2>
                    <p>
                        Nuestra visión es que en algunos años queremos crecer como empresa lo suficiente para
                        ser reconocidos a nivel internacional manteniendo los buenos servicios y productos que no scaracteriza,
                        y l abuena calidad de nuestros sisetmas.
                    </p>                    
                </div>
            </section>

            <section>
                <h2>Lo que hicimos</h2>
                <p>
                    GreenSource nace como un proyecto escolar el cual estaba pensado principalmente para invernaderos
                    hidropónicos, en éste se controlaba el sistema de riego, el cual debía ser automatizado para que el
                    el cliente hiciera el menor trabajo posible.
                    También se tenía el control de variables como temperatura, humedad, luminosidad, tempertura del agua
                    y ph para el agua.
                    <br>
                    Este proyecto fue todo un éxito y fuimos mejorando ese proyecto, y para finales del 2015, ya teníamos 
                    todo un buen control para un invernadero de este tipo. Actualmente seguimos esforzándonos más para 
                    ofrecer servicios y productos de calidad. 
                </p>
            </section>

            <section class="row">
                <h2>Fundadores</h2>
                <br>
                <br>
                <div class="col-md-4 desc-lups">
                    <div>
                        
                    </div>
                        <img src="images/lupis.jpeg" alt="">
                    <p>
                        María Guadalupe Gallegos Sevilla
                        <br> <br>
                        - Líder de logística y contabilidad. <br>
                        - Co-líder del área de producción.
                    </p>
                </div>
                <div class="col-md-4 desc-aldo">
                    <img src="images/aldo.jpg" alt="">
                    <p>
                        Aldo Omar Enríquez Velázquez
                        <br> <br>
                        - Líder del área de proyectos. <br>
                        - Co-líder del área de producción. <br>
                        - Co-líder del proyecto.
                    </p>
                </div>
                <div class="col-md-4 desc-owen">
                    <img src="images/owen.jpeg" alt="">
                    <p>
                        Owen Omar Ramírez López
                        <br> <br>
                        - Líder del área de producción. <br>
                        - Co-líder del área de control de calidad.
                    </p>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12 desc-mau">
                    <img src="images/mau.jpg" alt="">
                    <p>
                        Mauricio Navarro Cortés
                        <br> <br>
                        - Líder del área de desarrollo del sistema para el control del sistema. <br>
                        - Co-líder del proyecto. <br>
                        - Co-líder del área de producción.

                    </p>
                </div>
            </section>

        </div>
    </div>

    <?php
        require('footer.html');
    ?>
</body>
</html>