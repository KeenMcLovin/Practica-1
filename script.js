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
 
 function myFunction() {
   document.getElementById("myForm").reset();
 }
 
  // Write on keyup event of keyword input element
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
 