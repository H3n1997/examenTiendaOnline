<?php
session_start();
include 'conecta.php';
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$query="select tipo from usuarios where nombre='$usuario' and password='$contra'";
$resultado=mysql_query($query);
if ($campo=mysql_fetch_array($resultado)){
	if ($campo['tipo']==0){
		$_SESSION['admin']=0;
		header('location:admin.php');
	}
	elseif ($campo['tipo']==1){
		$_SESSION['usuario']=1;
		header('location:usuario.php');
	}
}
else{
	header('location:index.html');
}
?>