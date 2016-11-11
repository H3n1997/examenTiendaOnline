$(function(){
	$('form.formP').on('submit', productos);
	$('form.eli').on('submit', elimina);
	$('form#fromUsuario').on('submit', altaUsuario);
	$('form.car').on('submit', carrito);
});
function productos(){
	var producto=$('input#producto').val();
	var precio=$('input#precio').val();
	var cantidad=$('input#cantidad').val();
	$.ajax({
		url: 'altas.php',
		type: 'POST',
		dataType: 'JSON',
		data: {producto:producto,precio:precio,cantidad:cantidad},
	})
	.done(function() {
		console.log("success");
	});
}
function altaUsuario(e){
	e.preventDefault();
	var usuario=$('input#usuario').val();
	var contra=$('input#contra').val();
	$('h2#new').append('Usuario Creado');
	$('h2#usu').append('Nombre del usuario: '+usuario);
	$('h2#con').append('password: '+contra);
	console.log(usuario);
	$.ajax({
		url: 'usu.php',
		type: 'POST',
		dataType: 'JSON',
		data: {usuario: usuario,contra: contra},
	})
	.done(function() {
		console.log("success");
	});
	$('form#fromUsuario').addClass('esconde');
	$('form#inicio').removeClass('esc');
}
function elimina(e){
	e.preventDefault();
	var elimina=$('input#elimina').val();
	$.ajax({
		url: 'elimina.php',
		type: 'POST',
		dataType: 'JSON',
		data: {elimina: elimina},
	})
	.done(function() {
		console.log("success");
	});
}

function carrito(e){
	e.preventDefault();
	var pro=$('input#nombre').val();
	var can=$('input#can').val();
	$.ajax({
		url: 'car.php',
		type: 'POST',
		dataType: 'JSON',
		data: {pro:pro,can:can},
	})
	.done(function() {
		console.log("success");
	});
}