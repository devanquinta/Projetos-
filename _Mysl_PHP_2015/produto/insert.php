<?php 

	
	include("conexaodb.php"); 

	

	$nome = $_REQUEST['nome'];
	$marca = $_REQUEST['marca'];	
	$quantidade = $_REQUEST['quantidade'];
	$precocompra = $_REQUEST['precocompra'];
	$precovenda = $_REQUEST['precovenda'];
	
	$query = "	INSERT INTO databasev (nome, marca, quantidade, precocompra, precovenda)
				VALUES ('$nome','$marca', $quantidade, $precocompra, 
				$precovenda)";
				
	print $query;
	mysql_query($query,$conn);
	header('Location: select.php');
?>