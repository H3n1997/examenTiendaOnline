<?php
include 'conecta.php';
$producto=$_POST['producto'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$query="insert into stock(producto,precio,cantidad) values ('$producto','$precio','$cantidad')";
mysql_query($query);
?>