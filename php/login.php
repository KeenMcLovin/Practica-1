<?php
	include('conexion.php');

	$correo = $_POST['correo'];
	$pwd    = md5($_POST['pwd']);

	$query = "
        SELECT
            *
        FROM
            usuarios
        WHERE
            correo = '".$correo."'
        AND
            pwdUsuario = '".$pwd."'
        ;
	";

	$respuesta = mysqli_query($conn, $query);

	if (mysqli_num_rows($respuesta) > 0) {
		$usuario = mysqli_fetch_array($respuesta);
		session_start();
		$_SESSION['usuario'] = $usuario;
		echo "true";
	}else{
	    echo "false";
	}

	mysqli_close($conn);
?>