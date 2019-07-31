
<?php		
	$conn = mysql_connect("localhost","aluno","aluno") or die("Servidor fora do ar");
	
	//$conn = mysql_connect("localhost","aluno","aluno") or die("Servidor fora do ar");  //isso em aula
	
	mysql_select_db("databasev",$conn) or die("Sem acesso ao banco");	
?>





