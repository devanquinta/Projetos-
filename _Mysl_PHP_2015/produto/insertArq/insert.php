 <?php
							
	     include('conexaodb.php');		
					
	     $nome = $_REQUEST['n'];
	     $marca = $_REQUEST['m'];
	     $quantidade = $_REQUEST['q'];
	     $precocompra = $_REQUEST['p'];
	     $precovenda = $_REQUEST['v'];
						
		$query="INSERT INTO databasev (nome, marca, quantidade, precocompra, precovenda) VALUES ('$nome','$marca',$quantidade,$precocompra,$precovenda)";
						
		 mysql_query($query,$conn);	
					
	     header('Location: select.php');
?>