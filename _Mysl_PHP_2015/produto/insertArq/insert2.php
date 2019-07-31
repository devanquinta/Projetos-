<?php 

	
    include('conexaodb.php');

	
	$nomeform = $_REQUEST['nome'];
	$marcaform = $_REQUEST['marca'];	
	$quantidadeform = $_REQUEST['quantidade'];
	$precocompraform = $_REQUEST['precocompra'];
	$precovendaform = $_REQUEST['precovenda'];
	
	$query = "INSERT INTO databasev (nome, marca, quantidade, precocompra, precovenda) VALUES ('$nomeform','$marcaform', $quantidadeform, $precocompraform, $precovendaform)";
				
	print $query;

	
	mysql_query($query,$conn);
?>
