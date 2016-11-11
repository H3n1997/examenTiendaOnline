<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>store</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="usu">
		<form method="Link" ACTION="index.html" id="sesion">
			<input type="submit" value="Cerrar sesion">
		</form>
	</div>
	<div class="sp">
		<form method="Link" action="usuario.php" id="sesion"><input type="submit" value="Refresh"></form>
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
		echo '<th>Cantidad Existente</th>';
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
	<div class="car">
		<form class="car">
			<h2>Inserta el id del producto</h2>
			<input type="number" placeholder="inserta el id del producto" required name="producto" id="nombre">
			<h2>Cantidad a comprar</h2>
			<input type="number" placeholder="Cantidad a comprar" value=1 id="can">
			<input type="submit" value="Añadir al carrito">
		</form>
	</div>
	<div class="ar">
		<?php
		include 'conecta.php';                                    
		$query='select st.stock_id, st.producto, st.precio, ca.cantidadCom from carrito as ca left join stock as st on ca.stock_id=st.stock_id';
		$muestra=mysql_query($query);
		echo '<h2 id="pro">carrito</h2>';
		echo '<table>';
		echo '<thead>';
		echo '<th>stock_id</th>';
		echo '<th>Cantidad a comprar</th>';
		echo '</thead>';
		while ($fila=mysql_fetch_array($muestra)) {
			echo '<tr>'; 
			echo '<td>'.$fila['stock_id'].'</td><td>'.$fila['cantidadCom'].'</td>'; 
			echo '</tr>';
		}
		echo '</table>';
		mysql_free_result($muestra);
		?>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="codigo.js"></script>
</body>
</html>