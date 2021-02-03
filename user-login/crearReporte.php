<?php

     
if(isset($_POST['desde']) && isset($_POST['hasta']))
{
    if($_POST['slectSensor'] == 'temperatura')
    {
        header("Content-Type:aplication/xls");
        header("Content-Disposition: attachment; filename=Reporte_Temperatura.xls");
        require("../conexion.php");  

        $sql = "SELECT id, temperatura, fecha FROM datossensados WHERE fecha BETWEEN '".$_POST['desde']."' AND '".$_POST['hasta']."'";
        $valrow = 'temperatura';
    }
    else if($_POST['slectSensor'] == 'humedad')
    {
        header("Content-Type:aplication/xls");
        header("Content-Disposition: attachment; filename=Reporte_Humedad.xls");
        require("../conexion.php");  

        $sql = "SELECT humedad, fecha, id FROM datossensados WHERE fecha BETWEEN '".$_POST['desde']."' AND '".$_POST['hasta']."'";
        $valrow = 'humedad';
    }
    else if($_POST['slectSensor'] == 'tempAgua')
    {
        header("Content-Type:aplication/xls");
        header("Content-Disposition: attachment; filename=Reporte_TempAgua.xls");
        require("../conexion.php");  

        $sql = "SELECT temperaturaAgua, fecha, id FROM datossensados WHERE fecha BETWEEN '".$_POST['desde']."' AND '".$_POST['hasta']."'";
        $valrow = 'temperaturaAgua';
    }
    else if($_POST['slectSensor'] == 'luminosidad')
    {
        header("Content-Type:aplication/xls");
        header("Content-Disposition: attachment; filename=Reporte_Luminosidad.xls");
        require("../conexion.php");  

        $sql = "SELECT luminosidad, fecha, id FROM datossensados WHERE fecha BETWEEN '".$_POST['desde']."' AND '".$_POST['hasta']."'";
        $valrow = 'luminosidad';
    }
    else if($_POST['slectSensor'] == 'ph')
    {
        header("Content-Type:aplication/xls");
        header("Content-Disposition: attachment; filename=Reporte_PH.xls");
        require("../conexion.php");  

        $sql = "SELECT ph, fecha, id FROM datossensados WHERE fecha BETWEEN '".$_POST['desde']."' AND '".$_POST['hasta']."'";
        $valrow = 'ph';
    }

    $result = $conn->query($sql);

?>

<table>
    <tr>
        <th>ID</th>
        <th><?php echo $valrow?></th>
        <th>Fecha</th>
    </tr>

    <?php
        while($row = $result->fetch_assoc()) 
        {
    ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row[$valrow];?></td>
                <td><?php echo $row['fecha'];?></td>
            </tr>
    <?php
        }
    ?>
</table>
<?php
}
?>
