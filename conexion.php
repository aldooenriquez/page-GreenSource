<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="greensource";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
        die("Falló la conexión con la base de datos." . $conn->conect_error);
    }

    mysqli_set_charset($conn, 'utf-8');


?>