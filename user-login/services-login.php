<?php

    session_start();

    if (!isset($_SESSION['usuario']))
    {
        echo "<script>alert('Debes iniciar sesión!');</script>";
        echo "<script>window.location.href='index.php';</script>";
        die();
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Estilos del sitio -->

    <link rel="stylesheet" href="styles-login/styles-menu-user-login.css">
    <link rel="stylesheet" href="styles-login/styles-services-login.css">
    <link rel="stylesheet" href="../styles/styles-footer.css">

    <!-- Estilos externos -->

    <link rel="stylesheet" href="../estilos/animate.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Scripts externos -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <!-- Scripts internos -->

    <script src="../js/scripts.js"></script>
    <script src="../js/addClas.js"></script>
    <script src="../js/OnScrol.js"></script>

    <title>GreenSource-Services</title>
</head>
<body>
    <?php
        require('menu-login.php');
    ?>

    <!-- <div class="container col-xs-12">
        <h2>Servicios</h2>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Asistencia Técnica</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
        </div> 
    </div> -->

    <div class="layout"></div>

    <div class="banner">
        <div class="img-banner">
            <p>SERVICIOS</p>
        </div>
    </div>

    <!-- Incluir aquí los servicios -->

    <div class="content">
        <div class="row">
            <div class="menu-services col-md-0">
                <!-- <ul>
                    <span class="icon-user-tie"></span><li id="AT">Asistencia técnica</li>
                    <span class="icon-microchip"></span><li id="MS">Mantenimiento sistema</li>
                    <span class="icon-home3"></span><li id="MR">Mantenimiento del riego</li>
                    <span class="icon-tools"></span><li id="INST">Instalación</li>
                    <span class="icon-database1"></span><li id="SW">Sitio web</li>
                </ul> -->
            </div>
    
            <div class="description-service col-md-10">
                <div class="content-description">
                    <div class="AT">
                        <span class="icon-user-tie"></span> 
                        <h1>Asistencia técnica</h1>
                        <p>
                            La asistencia técnica es algo de lo que nos preocupamos ya que para nosotros es importante 
                            que el cliente conozca las funciones de nuestros invernaderos, por ello ofrecemos una 
                            asistencia técnica a cada una de las personas que se encuentren colaborando con dicha dependencia
                            o empresa.
                            <br>
                            En GreenSource contamos con personal capacitado para poder ofrecer el mejor asesoramiento 
                            en nuestros invernaderos. Se realizan sesiones de asesoría cada determinado tiempo 
                            y gracias a ello el cliente puede familiarizarse más con su invernadero y saber como funciona.
                            <br>
                            El propósito de estas asesorías es que nuestros clientes conozcan la forma de operar de 
                            su invernadero para así poder resolver alguna inquietud que no requiera de mucho conocimiento.
                            <br>
                        </p>
                        <img src="../images/asesoria-tecnica.png" alt="">
                    </div>
                    <div class="MS">
                        <span class="icon-microchip"></span>
                        <h1>Mantenimiento del sistema</h1>

                        <p>
                            En caso de que su invernadero presente algún problema mayor que esté furea de la solución
                            vía telefónica o remota, un equipo especializado en el manetnimiento de los sistemas de cada invernadero
                            se hará presente para poder resolver los problemas lo más rápido y de la mejor manera posible.
                            El equipo de mantenimiento no se presentará cada vez que algo falle, sino que contamos con 
                            visitas constantes para que su invernadero siempre vaya bien.
                            <br>
                            <br>
                            Así mismo nos aseguraremos de que su sistema de automatización se encuentre en perfectas condiciones
                            y que no afectu sus productos.
                            Este servicio consiste sólo en el área del software y el hardware el cual consiste en la revisión del
                            funcionamiento del software, y que el equipo se encuentre limpio y en perfectas condiciones.
                            <img src="../images/MS.jpg" alt="">
                        </p>
                    </div>
                    <div class="MR">
                        <span class="icon-home3"></span>
                        <h1>Mantenimiento del riego</h1>
                        <p>
                            El mantenimiento del riego es de vital importancia para que las plantas de su invernadero se desarrollen 
                            adecuadamente. Para ello tenemos el servicio de mantenimiento del riego en el cual enviamos a un equipo especializado
                            en el área para solucionar cualquier problema o inconveniente que se presente con el mismo.
                            <br>
                        </p>
                        <img src="../images/system-hydropponic.jpg" alt="">
                    </div>
                    <div class="INST">
                        <span class="icon-tools"></span>
                        <h1>Isntalción</h1>
                        <img src="../images/instalacion.jpg" alt="">
                        <p>
                            GreenSource ofrece los servivcios de instalación para tu invernadero,
                            ya sea invernaderos hidropónicos, invernaderos de túnel, invernaderos de capilla,
                            invernaderos plano o tipo parral, invernadero de cristal, etc. 
                            Asegurando la seguridad del invernadero y adaptado a las condiciones climáticas.
                            <br>
                            Contamos con un grupo de personas altamente capacitadas para realizar la instalación
                            del invernadero, el tiempo de instalación dependerá del tipo de invernadero a instalar.
                            <br>
                            Los materiales que utilizamos son de alta calidad y resistencia.
                            <br>
                            Así mismo GreenSource ofrece una gran cantidad de descuentos en productos o complementos para
                            su invernadero una vez que haya solicitado nuestros servicios.
                        </p>
                    </div>
                    <div class="Diseño">
                        <span class="icon-leaf2"></span>
                        <h1>Sitio Web</h1>
                        <p>
                        La asistencia técnica es algo de lo que nos preocupamos ya que para nosotros es importante 
                            que el cliente conozca las funciones de nuestros invernaderos, por ello ofrecemos una 
                            asistencia técnica a cada una de las personas que se encuentren colaborando con dicha dependencia
                            o empresa.
                            <br>
                            
                            <img src="../images/asesoria-tecnica.png" alt="">
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="content-customers">
        <!-- <hr> -->   
        <h1>Proyectos actuales</h1>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div>
                    <h2>Diseño de invernadero de capilla</h2>
                    <div class="customer-1">
                        <p>
                            Uno de los proyectos que tenemos en marcha es el diseño para la estructura
                            de un invernadero de capilla (estructura, ventilación, sistema de riego, materiales, etc).

                        </p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3">
                <div>
                    <h2>Sistema de riego</h2>
                    <div class="customer-2">
                        <p>
                            También tenemos en pie la creación de un sistema de riego para un invernadero 
                            hidropónico para el cultivo de Tomate cherry.
                            <br>
                            El sistema deberá ser automatizado y contará con un control para de cada porición
                            de sustancia para la solución que se requiren ene ste tipo de invernaderos. 
                        </p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3">
                <div>
                    <h2>Instalación de invernadero tipo tunel</h2>
                    <div class="customer-3">
                        <p>
                            Estamos trbajando para un sistema de invernadero de tipo tunel para el cultivo de 
                            zanahoria y lechuga. 
                            <br> 
                            El sistema de riego es automatizado y deberá ser controlado 
                            dependiendo de la temperatura, humedad del suelo, humedad relativa, luminosidad, etc.
                            Así mismo deberá mandar mensajes de alerta si existe algún problema dentro del invernadero.

                        </p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3">
                <div>
                    <h2>Control de riego para jardín personal</h2>
                    <div class="customer-4">
                        <p>
                            También contamos con instalaciones de invernaderos o sistemas de riego para casas.
                            Uno de nuestros proyectos en pie es el diseño e instalación de uns sistema de riego para un 
                            jardín en un hogar. 
                            <br>
                            El sistema de riego es por goteo y controlará la temperatura y humedad de las plantas.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div> 

    <?php
        require('../footer.html');
    ?>
    
</body>
</html>