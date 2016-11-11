<?php
include 'conecta.php';
$pro=$_POST['pro'];
$can=$_POST['can'];
$query="insert into carrito(stock_id,cantidadCom)values('$pro','$can')";
mysql_query($query);
?>