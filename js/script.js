const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function soloLetras(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	especiales = "8-37-39-46";
 
	tecla_especial = false
	for(var i in especiales){
		if(key == especiales[i]){
			 tecla_especial = true;
			 break;
		}
	}
 
	if(letras.indexOf(tecla)==-1 && !tecla_especial){
		 return false;
	}
}
 
function soloNumeros(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "0123456789";
	especiales = "8-37-39-46";
 
	tecla_especial = false
	for(var i in especiales){
		if(key == especiales[i]){
			 tecla_especial = true;
			 break;
		}
	}
 
	if(letras.indexOf(tecla)==-1 && !tecla_especial){
		 return false;
	}
}
 
function soloNumerosp(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "0123456789.";
	especiales = "8-37-39-46";
 
	tecla_especial = false
	for(var i in especiales){
		if(key == especiales[i]){
			 tecla_especial = true;
			 break;
		}
	}
 
	if(letras.indexOf(tecla)==-1 && !tecla_especial){
		 return false;
	}
}

$(document).ready(function(){
	 $("#search").keyup(function(){
		 _this = this;
		 // Show only matching TR, hide rest of them
		 $.each($("#mytable tbody tr"), function() {
			 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
				 $(this).hide();
			 else
				 $(this).show();
		 });
	 });
});
 
function enviarDatos(){
	var nombre 		= $('#nombre').val();
	var apaterno 	= $('#apaterno').val();
	var amaterno 	= $('#amaterno').val();
	var telefono 	= $('#telefono').val();
	var correo 		= $('#correo').val();
	var pwd 		= $('#pwd').val();

	if (nombre == '' || apaterno == '' || amaterno == '' || telefono == '' || correo == '' || pwd == '') {
		data = '<div class="alert alert-warning">Se deben llenar todos los campos antes</div>';
		$("#mensaje").html(data);
	}else{
		var envio = 'nombre='+nombre+'&apaterno='+apaterno+'&amaterno='+amaterno+'&telefono='+telefono+'&correo='+correo+'&pwd='+pwd;

		$.ajax({
			type: "POST",
			url: "./php/registro.php",
			data: envio,
			success:function(data){
				$("#mensaje").html(data);
			},
			error:function (){
				$("#error").text("Error fatal");
			}
		});
	}
}

function entrar(){
	var correo 		= $('#correoLogin').val();
	var pwd 		= $('#pwdLogin').val();
	
	var envio = 'correo='+correo+'&pwd='+pwd;

	$.ajax({
		type: "POST",
		url: "./php/login.php",
		data: envio,
		success:function(data){
			if (data == 'true') {
				var html = '<div class="alert alert-succes">Bienvenid@</div>';
				$("#mensaje").html(html);
				window.location.assign('inicio.php');
			}else{
				var html = '<div class="alert alert-warning">Usuario no encontrado</div>';
				$("#mensaje").html(html);
			}
		},
		error:function (){
		}
	});
}