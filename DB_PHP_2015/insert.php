<?php 

	
	include("conexaodb.php"); 

	
	$data_de_compraform = $_REQUEST['data_de_compra'];
	$nomeform = $_REQUEST['nome'];
	$marcaform = $_REQUEST['marca'];	
	$modeloform = $_REQUEST['modelo'];
	$quantidadeform = $_REQUEST['quantidade'];
	$detalhesform = $_REQUEST['detalhes'];
	$preco_de_compra = $_REQUEST['preco_de_compra'];
	$preco_de_vendaform = $_REQUEST['preco_de_venda'];
	
	$query = "	INSERT INTO databasev (data_de_compra,nome, marca, modelo, quantidade, detalhes, preco_de_compra, preco_de_venda)
				VALUES ('$data_de_compraform','$nomeform','$marcaform','$modeloform', $quantidedaform,'$detalhesform', $preco_de_compraform, $preco_de_vendaform)";
				
	print $query;

	
	mysql_query($query,$conn);
?>