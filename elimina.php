<?php
include 'conecta.php';
$elimina=$_POST['elimina'];
$query="delete from stock where stock_id=$elimina";
mysql_query($query);
?>