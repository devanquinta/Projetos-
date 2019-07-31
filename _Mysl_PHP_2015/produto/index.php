<?php

include('cab.php');
session_start();
?>
 <div class='botao'><a href='cadastro.html'>Cadastra-se</a></div>
	<center>
		<form action="login.php">
			<div class="index"><?php echo $_SESSION['msg']; ?>
				<br><br>
				Usuário<br>
				<input  class="conteudo2" type="text" placeholder="entre com o seu usuário" name="user"><br><br>
				Senha<br>
				<input class="conteudo2" type="password" placeholder="entre com a sua senha" name="pw"><br><br>
				<input class="botao2  botao2-blue" type="submit" value="LOGIN">		<br><br>
			</div>
		</form>

	</center>
</body>
</html>
