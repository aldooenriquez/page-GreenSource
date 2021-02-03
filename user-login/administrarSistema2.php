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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">


    <script src="../js/jQuery.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <script src="../js/scripts.js"></script>
    <script src="../js/push.min.js"></script>
    <script src="../js/plotly-latest.min.js"></script>

	<title>Administrador del sistema</title>
</head>
<body>

    <?php require('menu-login.php')?>

    <div class="banner">
        <div class="img-banner">
            <p>ADMINISTRAR SISTEMA</p>
        </div>
    </div>

    <?php
        date_default_timezone_set('America/Mexico_City');
                                
        echo "<div class='reloj'>".(date("d-m-Y"))." | ".(date("H:i"))."</div><br>";
    ?>

   <div class="content-table row content">
           <div class="col-md-2 aside">
               <ul class="sensores">
                   <h3>Sensores utilizados</h3>
                   <hr>
                   <span class="icon-thermometer-3"></span><li>Temperatura</li>
                   <span class="icon-drop"></span><li>Temperatura agua</li>
                   <span class="icon-air"></span><li>Humedad</li>
                   <span class="icon-sun"></span><li>Luminosidad</li>
               </ul>
               <hr>
               <ul class="ver">
                   <span class="icon-stats-bars"></span><li id="select-date">Ver gráficas</li>
                   <span class="icon-file-text2"></span><li id="reporte">Generar reportes</li>
               </ul>
           </div>
           
           <div class="col-md-7">
               <div class="table-data">
                    <h1>Visualización de datos en tiempo real</h1>
                    <div id="contenido">
                            <?php
                                $cont = 0;
                                echo "<table class='tabla'>
                                        <tr>
                                            
                                            <th>Temperatura</th>
                                            <th>Humedad</th>
                                            <th>Temp. agua</th>
                                            <th>Luminosidad</th>
                                            <th>PH</th>
                                            <th>Fecha</th>
                                        </tr>";
                                $sql = "SELECT * FROM datossensados ORDER BY fecha DESC LIMIT 10";
                                $result = $conn->query($sql);
                                
                                if(mysqli_num_rows($result) > 0)
                                {
                                    while($row = $result->fetch_assoc()) {
                                        
                                        // if ($row['id'] <= 10)
                                        // {
                                            $datosMostrados = $row['id'];
                                            echo "
                                                <tr>
                                                    
                                                    <td>".$row['temperatura']."</td>        
                                                    <td>".$row['humedad']."</td>
                                                    <td>".$row['temperaturaAgua']."</td>
                                                    <td>".$row['luminosidad']."</td>
                                                    <td>".$row['ph']."</td>
                                                    <td>".$row['fecha']."</td>
                                                </tr>";
                                        // }
                                        if ($row['temperatura'] > 30 || $row['temperaturaAgua'] > 30 || $row['humedad'] > 30 || $row['luminosidad'] > 10000 || $row['ph'] > 15)
                                        {
                                            $cont++;
                                        }
                                    }
                                    echo " <h4>Total de registros: " . $datosMostrados . "</h4></table>";
                                    
                                    if($cont > 0)
                                    {
                            ?>
                                        <script src="../js/notificacion.js"></script>
                            <?php 
                                    }
                                }
                                else
                                {
                                    echo "No hay datos para mostrar";
                                }
                            ?>
                    </div>

                    <div class="show-Table">

                        

                    </div>

               </div>
           </div>
           <div class="col-md-3">
               <div class="alerts" id="warning">
                   <h3>Alertas</h3>
                   <hr>
                   <ul>
                       <li>
                           <div><span class="icon-check1"></span><a class="temp btn btn-success" id="temp"> Temperatura</a></div>

                       </li>
                       <li>
                           <div><span class="icon-check1"></span><a class="tempA btn btn-success">Temperatura agua</a></div>
                           
                       </li>
                       <li>
                           <div><span class="icon-check1"></span><a class="hum btn btn-success">Humedad</a></div>
                           
                       </li>

                       <li>
                           <div><span class="icon-check1"></span><a class="lum btn btn-success">Luminosidad</a></div>
                           
                       </li>

                       <li>
                           <div><span class="icon-check1"></span><a class="ph btn btn-success">PH</a></div>
                           
                       </li>
                   </ul>
               </div>

               
           </div>
   </div>

   <div class="modal" id="solicitud" >
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head" style="background: #00C851">
                <p class="modal-card-title">Selecciona el rango de fechas para mostrar la gráfica</p>
                <button class="delete" aria-label="close" id="cerrar"></button>
            </header>
            <section class="modal-card-body">
                <br>
                <div class="row">
                    <form >
                        <div class="col-md-6">
                            <label for="start">Desde:</label>
    
                            <input type="date" id="desde" name="inicio" value="2019-07-22" min="2017-01-01" max="2019-12-31">
                        </div>
                        <div class="col-md-6">
                            <label for="start">Hasta:</label>
    
                            <input type="date" id="hasta" name="fin" value="2019-07-22" min="2017-01-01" max="2019-12-31">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div>
                            <label>Selecciona el sensor a graficar</label>
                            <br>
                            <select name="slectSensor" id="selectSensor">
                                <option value="">---- Selecciona un sensor -----</option>
                                <option value="temperatura">Temperatura</option>
                                <option value="humedad">Humedad</option>
                                <option value="tempAgua">Temperatura agua</option>
                                <option value="luminosidad">Luminosidad</option>
                                <option value="ph">PH</option>
                            </select>
                        </div>
                        <br>

                        <button type="button" id="verGrafica">Enviar</button>
                    </form>

                </div>
                
            </section>
            <footer class="modal-card-foot">
                
                <button class="button" value="Cancelar">Cancelar
            </footer>
        </div>
    </div>

    <div class="modal" id="create-report" >
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head" style="background: #00C851">
                <p class="modal-card-title">Selecciona el rango de fechas para mostrar la gráfica</p>
                <button class="delete" aria-label="close" id="cerrar"></button>
            </header>
            <section class="modal-card-body">
                <br>
                <div class="row">
                    <form action="crearReporte.php" method="POST">
                        <div class="col-md-6">
                            <label for="start">Desde:</label>
    
                            <input type="date" id="desde" name="desde" value="2019-07-22" min="2017-01-01" max="2019-12-31">
                        </div>
                        <div class="col-md-6">
                            <label for="start">Hasta:</label>
    
                            <input type="date" id="hasta" name="hasta" value="2019-07-22" min="2017-01-01" max="2019-12-31">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div>
                            <label>Selecciona el sensor a graficar</label>
                            <br>
                            <select name="slectSensor" id="selectSensor">
                                <option value="">---- Selecciona un sensor -----</option>
                                <option value="temperatura">Temperatura</option>
                                <option value="humedad">Humedad</option>
                                <option value="tempAgua">Temperatura agua</option>
                                <option value="luminosidad">Luminosidad</option>
                                <option value="ph">PH</option>
                            </select>
                        </div>
                        <br>

                        <input type="submit">
                    </form>

                </div>
                
            </section>
            <footer class="modal-card-foot">
                
                <button class="button" value="Cancelar">Cancelar
            </footer>
        </div>
    </div>

   <div id="content-graph">
       <hr>
        <article class="panel is-success">
            <p class="panel-heading">
                Reporte de gráfica
                <span>
                    Fecha de creación: 
                    <?php
                        date_default_timezone_set('America/Mexico_City');
                                
                        echo(date("d-m-Y"))."
                        <button class='delete' aria-label='close' id='cerrar'></button>";
                    ?>
                </span>
                
            </p>
            <div id="graph"> </div>
        </article>
   </div>

    <?php require('../footer.html')?>

    

   <script>
       $(document).ready(function(){
        $('#content-graph').hide();
       });
       $('#verGrafica').click(function(){
           
           var desde = document.getElementById('desde').value;
           var hasta = document.getElementById('hasta').value;
           var sensor = document.getElementById('selectSensor').value;
           alert(sensor);

           var ruta = "des="+desde+"&has="+hasta+"&sensor="+sensor;

           $.ajax({
               url: 'estadisticas.php',
               type: 'POST',
               data: ruta,
           })
           .done(function(res){
                var n = res.indexOf("&");
                var x = res.length;
                var datos= res.substr(0,n);
                var fechas = res.substr(n+1,x);
                
                datosY = crearCadenaLineal(datos);
                datosX = crearCadenaFechas(fechas);
            
                function crearCadenaLineal(datos)
                {
                    var parsedDatos = JSON.parse(datos);
                    var arrDatos = [];
                    for(var x in parsedDatos)
                    {
                        arrDatos.push(parsedDatos[x]);
                    }
                    return arrDatos;
                }

                function crearCadenaFechas(fechas)
                {
                    var parsedFechas = JSON.parse(fechas);
                    var arrFechas = [];
                    for(var x in parsedFechas)
                    {
                        arrFechas.push(parsedFechas[x]);
                    }
                    return arrFechas;
                }

            
                var trace1 = {
                    x: datosX,
                    y: datosY,
                    type: 'scatter'
                };
            
                var data = [trace1];

                // delete trace1;
            
                Plotly.newPlot('graph', data);

               $('#solicitud').removeClass('is-active');
               $('#content-graph').show();
               
            //    $('#content-graph article #graph').html(res);
               
               $('#content-graph article p span #cerrar').click(function(){
                $('#content-graph').fadeOut('slow');
               });
               console.log("ok");
           });

       });
   </script>

    <script>
            function consultaReal() 
            {
                var datos = $.ajax ({
                    url: "../mostrarTabla.php",
                    dataType: "text",
                    async: false
                }).responseText;
                
                var contenido = document.getElementById('contenido');
                contenido.innerHTML = datos;

            }
            setInterval(consultaReal, 10000);
    </script>

    <script>
        function consultaReal() 
        {
            var datos = $.ajax ({
                url: "../alerta-boton.php",
                dataType: "text",
                async: false
            }).responseText;
            
            var contenido = document.getElementById('warning');
            contenido.innerHTML = datos;
        }
        setInterval(consultaReal, 10000);
    
    </script>
</body>
</html>