<?php
include 'conecta.php';
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$query="insert into usuarios(nombre,password,tipo)values('$usuario','$contra',1)";
mysql_query($query);
?>