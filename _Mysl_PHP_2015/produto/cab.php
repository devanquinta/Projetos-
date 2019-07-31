<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
<body>
	<div class="cab">
		<a href="select.php"><img src="logo1.png"></a>&nbsp;&nbsp;<a href="logoff.php"><div class='sair'><img src="sair.png" width='30'>SAIR</div></a>
		<br>
		<?php
	    	session_start();
			  echo " Acc: ".$_SESSION['acc'];
			
		?>
	</div>