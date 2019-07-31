<?php
include("conexaodb.php"); 

	$idproduto = $_REQUEST['id'];

	$query = "DELETE FROM databasev WHERE id=$idproduto";

	print $query;

	mysql_query($query,$conn);
header('location:select.php');

?>