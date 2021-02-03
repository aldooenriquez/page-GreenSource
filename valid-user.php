<?php

    session_start();
	require('conexion.php');
	
	if (isset($_POST['correo']))
	{
		$sql = "SELECT * FROM usuarios WHERE correo='".$_POST['correo']."' AND password='" .$_POST['password']."'";
		
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) != 0) 
		{
            $row = $result->fetch_assoc();
            $_SESSION['usuario'] = $row['nombre'];
			header('Location: user-login/validar-sistema.php');
		}
		else
		{
			header('Location: login.php');
        }
        mysqli_free_resul($result);
        mysqli_close($conn);
	}

?>