$(function(){
	$('form#fromUsuario').on('submit', altaUsuario);
});
function altaUsuario(e){
	e.preventDefault();
	var usuario=$('input#usuario').val();
	var contra=$('input#contra').val();
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
}