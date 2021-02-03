<?php

    require("../conexion.php");

    if(isset($_POST['des']) && isset($_POST['has']))
    {
        $valoresYTemp = array(); // DatosSensados
        $valoresYHum = array(); // DatosSensados
        $valoresYTempA = array(); // DatosSensados
        $valoresYLum = array(); // DatosSensados
        $valoresYPH = array(); // DatosSensados
        
        $fechaArray = array(); // DatosSensados
        
        $arrayEstadisticas = array(); // DatosSensados

        $cont = 0;
        
        if($_POST['sensor'] == 'temperatura')
        {
            $sql = "SELECT temperatura, fecha, id FROM datossensados WHERE fecha BETWEEN '".$_POST['des']."' AND '".$_POST['has']."'";
            $valrow = 'temperatura';
        }
        else if($_POST['sensor'] == 'humedad')
        {
            $sql = "SELECT humedad, fecha, id FROM datossensados WHERE fecha BETWEEN '".$_POST['des']."' AND '".$_POST['has']."'";
            $valrow = 'humedad';
        }
        else if($_POST['sensor'] == 'tempAgua')
        {
            $sql = "SELECT temperaturaAgua, fecha, id FROM datossensados WHERE fecha BETWEEN '".$_POST['des']."' AND '".$_POST['has']."'";
            $valrow = 'temperaturaAgua';
        }
        else if($_POST['sensor'] == 'luminosidad')
        {
            $sql = "SELECT luminosidad, fecha, id FROM datossensados WHERE fecha BETWEEN '".$_POST['des']."' AND '".$_POST['has']."'";
            $valrow = 'luminosidad';
        }
        else if($_POST['sensor'] == 'ph')
        {
            $sql = "SELECT ph, fecha, id FROM datossensados WHERE fecha BETWEEN '".$_POST['des']."' AND '".$_POST['has']."'";
            $valrow = 'ph';
        }

        $result = $conn->query($sql);
    
                                    
        if(mysqli_num_rows($result) > 0)
        {
            while($row = $result->fetch_assoc()) 
            {
                $valoresYTemp[] = $row[$valrow];
                $fechaArray[] = $row['fecha'];
            }
            
            echo json_encode($valoresYTemp).'&'.json_encode($fechaArray);
            
      
        }
    }

    
    ?>






    

