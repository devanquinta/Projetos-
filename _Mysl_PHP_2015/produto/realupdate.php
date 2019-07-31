<?php
	include('conexaodb.php');

	$id = $_REQUEST['i'];
	$nome = $_REQUEST['n'];
	$marca = $_REQUEST['m'];
	$quantidade = $_REQUEST['q'];
	$precocompra = $_REQUEST['p'];
	$precovenda = $_REQUEST['v'];

	$query = "UPDATE databasev 
			  SET 	nome='$nome',
			        marca='$marca',
			  		quantidade=$quantidade,
			  		precocompra=$precocompra,
					precovenda=$precovenda
			  WHERE id=$id";

	//echo $query;
	mysql_query($query,$conn);
	header('Location: select.php');
?>
