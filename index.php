<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Bienvenido</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
	<link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imgs/icon.png">
</head>
<body>
    <br>
    <section id="mensaje" style="font-weight: bold;"></section>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form autocomplete="off">
				<h1>¡Registrate!</h1>
				<hr>
				<input type="text" placeholder="Nombre" name="nombre" id="nombre" required onkeypress="return soloLetras(event)"/>
				<input type="text" placeholder="Apellido Paterno" name="apaterno" id="apaterno" required onkeypress="return soloLetras(event)"/>
				<input type="text" placeholder="Apellido Materno" name="amaterno" id="amaterno" required onkeypress="return soloLetras(event)"/>
				<input type="text" placeholder="Telefono" maxlength="10" name="telefono" id="telefono" required onkeypress="return soloNumeros(event)"/>
				<input type="email" placeholder="Correo Electronico" name="correo" id="correo" required/>
				<input type="password" placeholder="Contraseña" name="pwd" id="pwd" required/>
				<br>
				<a class="btn btn-info" onclick="enviarDatos()"><b>Registrar</b></a>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form autocomplete="off">
				<h1>Iniciar Sesion</h1>
				<br>
				<input type="email" placeholder="Correo" name="correo" id="correoLogin" required/>
				<input type="password" placeholder="Contraseña"	name="pass" id="pwdLogin" required/>
				<br>
				<a class="btn btn-info" onclick="entrar()"><b>Entrar</b></a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Inicia con nosotros</h1>
					<p></p>
					<button class="ghost" id="signIn">Inicia con tu cuenta</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Registro</h1>
					<p>¿Ya tienes una cuenta?, registrate con nosotros</p>
					<p></p>
					<button class="ghost" id="signUp">Registrar una cuenta</button>
				</div>
			</div>
		</div>
	</div>

	<script	src="js/script.js"></script>

</body>
</html>
