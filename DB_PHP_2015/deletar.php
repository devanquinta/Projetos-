<?php 

	include("conexaodb.php"); 

	$idqveiodoform = $_REQUEST['idform'];

	$query = "DELETE FROM databasev WHERE id=$idqveiodoform";

	print $query;

	mysql_query($query,$conn);
	
	
	?>