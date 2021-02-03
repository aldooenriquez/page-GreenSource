<?php
                                
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="greensource";

    $cont = 0;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
    die("Falló la conexión con la base de datos." . $conn->conect_error);
    }
    mysqli_set_charset($conn, 'utf-8');
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

                    if ($row['temperatura'] > 30 || $row['temperaturaAgua'] > 30 || $row['humedad'] > 30 || $row['luminosidad'] > 10000 || $row['ph'] > 15)
                {
                    $cont++;
                }
            // }
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