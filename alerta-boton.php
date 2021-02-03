<?php
               
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="greensource";

    $tempe = 0;
    $humedad = 0;
    $tempeAgua = 0;
    $luminosidad = 0;
    $ph = 0;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
    die("Falló la conexión con la base de datos." . $conn->conect_error);
    }
    mysqli_set_charset($conn, 'utf-8');

    $sql = "SELECT * FROM datossensados ORDER BY fecha DESC LIMIT 10";
    $result = $conn->query($sql);
    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = $result->fetch_assoc()) {
            
            // if ($row['id'] <= 10)
            // {
//////////////////V TEMPERATURA ///////////////            
                if ($row['temperatura'] > 30)
                {
                    $tempe++;
                }
                if($row['temperatura'] < 10)
                {
                    $tempe--;
                }

////////////////// HUMEDAD ////////////////////
                if($row['humedad'] > 30)
                {
                    $humedad++;
                }
                if($row['humedad'] < 10)
                {
                    $humedad--;
                }

////////////////// TEMPERARTURA AGUA //////////////
                if($row['temperaturaAgua'] > 30)
                {
                    $tempeAgua++;
                }
                if($row['temperaturaAgua'] < 10)
                {
                    $tempeAgua--;
                }

////////////////// LUMINOSIDAD //////////////////                
                if($row['luminosidad'] > 10000)
                {
                    $luminosidad++;
                }
                if($row['luminosidad'] < 10)
                {
                    $luminosidad--;
                }

///////////////// PH ////////////////////////                
                if($row['ph'] > 15)
                {
                    $ph++;
                }
                if($row['ph'] < 2)
                {
                    $ph--;
                }
            // }
        }

        

/////////////////////////////    EN CASO DE QUE UN DATO SE MAYOR AL LÍMITE   ////////////////////////////////

        if(($tempe > 0) && (($humedad == 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph == 0)))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta </a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }
        if(  ($humedad > 0) && ($tempe == 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph == 0)  )
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }



        if(($tempeAgua > 0) && ($humedad == 0) && ($tempe == 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }
        if(($tempeAgua == 0) && ($humedad == 0) && ($tempe == 0) && ($luminosidad > 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>  
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }
        if(  ($tempeAgua == 0) && ($humedad == 0) && ($tempe == 0) && ($luminosidad == 0) && ($ph > 0)  )
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>  
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }

        if( ($tempe > 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad > 0) && ($ph > 0) )
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temperatura alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }


//////////////////////// EN CASO DE QUE UN DATO SEA MENOR AL LÍMITE   /////////////////////////////////

        if(($tempe < 0) && (($humedad == 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph == 0)))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja </a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(  ($humedad < 0) && ($tempe == 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph == 0)  )
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempeAgua < 0) && ($humedad == 0) && ($tempe == 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempeAgua == 0) && ($humedad == 0) && ($tempe == 0) && ($luminosidad < 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>  
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }
        if(  ($tempeAgua == 0) && ($humedad == 0) && ($tempe == 0) && ($luminosidad == 0) && ($ph < 0)  )
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>  
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }

        if( ($tempe < 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad < 0) && ($ph < 0) )
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temperatura baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        if(($tempe > 0) && ($humedad > 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad == 0) && ($tempeAgua > 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad == 0) && ($tempeAgua == 0) && ($luminosidad > 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad == 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }


/////////////////////////////////   NIVELES BAJOS   ////////////////////////////////////////////////////

        if(($tempe < 0) && ($humedad < 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad == 0) && ($tempeAgua < 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad == 0) && ($tempeAgua == 0) && ($luminosidad < 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad == 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        if(($tempe == 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad > 0) && ($tempeAgua == 0) && ($luminosidad > 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad > 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }



/////////////////////////////   NIVELES BAJOS    /////////////////////////////////////////////////////////////////

        if(($tempe == 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad < 0) && ($tempeAgua == 0) && ($luminosidad < 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura baja</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad < 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        if(($tempe == 0) && ($humedad == 0) && ($tempeAgua > 0) && ($luminosidad > 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad == 0) && ($tempeAgua > 0) && ($luminosidad == 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }


//////////////////////////////   NIVELES BAJOS   ////////////////////////////////////////////////////////////

        if(($tempe == 0) && ($humedad == 0) && ($tempeAgua < 0) && ($luminosidad < 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad == 0) && ($tempeAgua < 0) && ($luminosidad == 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        if(($tempe == 0) && ($humedad == 0) && ($tempeAgua == 0) && ($luminosidad > 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }

///////////////////////////  NIVELES BAJOS   /////////////////////////////////////////////////////////////////

        if(($tempe == 0) && ($humedad == 0) && ($tempeAgua == 0) && ($luminosidad < 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        if(($tempe > 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad > 0) && ($tempeAgua == 0) && ($luminosidad > 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad > 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad == 0) && ($tempeAgua > 0) && ($luminosidad > 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp.agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad == 0) && ($tempeAgua > 0) && ($luminosidad == 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp.agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad == 0) && ($tempeAgua == 0) && ($luminosidad > 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }


////////////////////////////    NIVELES BAJOS    ///////////////////////////////////////////////////////

        if(($tempe < 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad == 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad < 0) && ($tempeAgua == 0) && ($luminosidad < 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad < 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad == 0) && ($tempeAgua < 0) && ($luminosidad < 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp.agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad == 0) && ($tempeAgua < 0) && ($luminosidad == 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp.agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad == 0) && ($tempeAgua == 0) && ($luminosidad < 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temp. baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        if(($tempe == 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad > 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad == 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad </a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PHa alto</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad > 0) && ($tempeAgua == 0) && ($luminosidad > 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }


///////////////////////   NIVELES BAJOS    //////////////////////////////////////////////////////////////////

        if(($tempe == 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad < 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad == 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad </a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PHa bajo</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad < 0) && ($tempeAgua == 0) && ($luminosidad < 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        if(($tempe == 0) && ($humedad == 0) && ($tempeAgua > 0) && ($luminosidad > 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto </a></div>
                        
                    </li>
                </ul>";
        }


//////////////////////////////////////   NIVELES BAJOS     ///////////////////////////////////////////

        if(($tempe == 0) && ($humedad == 0) && ($tempeAgua < 0) && ($luminosidad < 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo </a></div>
                        
                    </li>
                </ul>";
        }
        ////////////////////////////////////     //////////////////////      /////////////////////////

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        if(($tempe > 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad > 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temperatura alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad == 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-danger'>Temperatura alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad > 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad == 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad == 0) && ($tempeAgua > 0) && ($luminosidad > 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temperatura alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe > 0) && ($humedad > 0) && ($tempeAgua == 0) && ($luminosidad > 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temperatura alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad > 0) && ($tempeAgua > 0) && ($luminosidad > 0) && ($ph > 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua alta</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad alta</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH alto</a></div>
                        
                    </li>
                </ul>";
        }


////////////////////////////////////////    NIVELES BAJOS    //////////////////////////////////////////////

        if(($tempe < 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad < 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temperatura baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad == 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-danger'>Temperatura baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad < 0) && ($ph == 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad == 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad == 0) && ($tempeAgua < 0) && ($luminosidad < 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temperatura baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe < 0) && ($humedad < 0) && ($tempeAgua == 0) && ($luminosidad < 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-warning1'></span><a class='temp btn btn-danger'>Temperatura baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }

        if(($tempe == 0) && ($humedad < 0) && ($tempeAgua < 0) && ($luminosidad < 0) && ($ph < 0))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='tempA btn btn-danger'>Temp. agua baja</a></div>

                    </li>
                    <li>
                        <div><span class='icon-warning1'></span><a class='hum btn btn-danger'>Humedad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>Luminosidad baja</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-warning1'></span><a class='lum btn btn-danger'>PH bajo</a></div>
                        
                    </li>
                </ul>";
        }


        


        if(($tempe == 0) && (($humedad == 0) && ($tempeAgua == 0) && ($luminosidad == 0) && ($ph == 0)))
        {
            echo "
            <h3>Alertas</h3>
            <hr>
                <ul>
                    <li>
                        <div><span class='icon-check1'></span><a class='temp btn btn-success'>Temperatura </a></div>

                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='tempA btn btn-success'>Temperatura agua</a></div>
        
                    </li>
                    <li>
                        <div><span class='icon-check1'></span><a class='hum btn btn-success'>Humedad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>Luminosidad</a></div>
                        
                    </li>

                    <li>
                        <div><span class='icon-check1'></span><a class='lum btn btn-success'>PH</a></div>
                        
                    </li>
                </ul>";
        }
    
    }
    else
    {
        echo "No hay datos para mostrar";
    }
?>