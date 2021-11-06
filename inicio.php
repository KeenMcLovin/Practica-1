<?php
    session_start();

	if (!isset($_SESSION['usuario']['id_usuario']) && empty($_SESSION['usuario']['id_usuario'])) {
		header("Location: index.php");
	}else{
		include('php/conexion.php');

        $nombreCompleto = $_SESSION['usuario']['nombre']." ".$_SESSION['usuario']['aPaterno']." ".$_SESSION['usuario']['aMaterno'];
		?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <title>Inicio</title>
            <link rel="shortcut icon" href="imgs/icon.png">
        </head>
        <body>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><?php echo $nombreCompleto;?></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                    </ul>
                </div>
            </nav>
        </body>
        </html>
		<?php
		mysqli_close($conn);
	}
?>