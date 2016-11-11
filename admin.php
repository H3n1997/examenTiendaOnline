<?php
session_start();
if($_SESSION['admin']==false){
	if($_SESSION['admin']!=0){
		header('location:index.html');
	}
}
else{
	header('location:index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de Adnministrador</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Panel de Adnministrador</h1>
		<form method="Link" action="index.html" id="sesion"><input type="submit" value="Cerrar sesion"></form>
	</header>
	<section class="stock">
		<div class="productos">
			<form class="formP">
				<input type="text" placeholder="Producto" required name="producto" id="producto">
				<input type="number" placeholder="Precio" required name="precio" id="precio">
				<input type="number" placeholder="Cantidad Existente" required name="Cantidad Existente" id="cantidad">
				<input type="submit" value="Dar Alta">
			</form>
			<form method="Link" action="admin.php" id="sesion"><input type="submit" value="Refresh"></form>
		</div>
	</section>
	<div class="sp">
		<?php
		include 'conecta.php';                                    
		$query='select * from stock';
		$muestra=mysql_query($query);
		echo '<h2 id="pro">Productos</h2>';
		echo '<table>';
		echo '<thead>';
		echo '<th>stock_id</th>';
		echo '<th>Producto</th>';
		echo '<th>Precio</th>';
		echo '<th>Cantidad</th>';
		echo '</thead>';
		while ($fila=mysql_fetch_array($muestra)) {
			echo '<tr>'; 
			echo '<td>'.$fila['stock_id'].'</td><td>'.$fila['producto'].'</td><td>'.'$'.$fila['precio'].'</td><td>'.$fila['cantidad'].'</td>'; 
			echo '</tr>';
		}
		echo '</table>';
		mysql_free_result($muestra);
		?>
	</div>
	<div class="elimina">
		<form class="eli">
			<input type="number" placeholder="Elimina producto" required name="elimina" id="elimina">
			<input type="submit" value="Elimar?">
		</form>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="codigo.js"></script>
</body>
</html>