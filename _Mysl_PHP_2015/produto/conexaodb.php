<?php	
	// conexao ao servidor (servidor, usuário e senha))
	$conn = mysql_connect("localhost","root","") or die("Servidor fora do ar");
	
	//$conn = mysql_connect("localhost","aluno","aluno") or die("Servidor fora do ar");  //isso em aula
	
	// identifica o banco de dados
	mysql_select_db("banco",$conn) or die("Sem acesso ao banco");
?>
