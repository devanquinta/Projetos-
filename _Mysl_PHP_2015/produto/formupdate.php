<?php
	include('checkSession.php');
	include('cab.php');
	include('conexaodb.php');
	$id = $_REQUEST['id'];
	$query="SELECT nome, marca, quantidade,precocompra, precovenda FROM databasev WHERE id=$id";
	$recordset = mysql_query($query,$conn);
	$linha = mysql_fetch_assoc($recordset);
	$nome = $linha['nome'];
	$marca = $linha['marca'];
	$quantidade = $linha['quantidade'];	
	$precocompra = $linha['precocompra'];	
	$precovenda = $linha['precovenda'];	
	?>
	<br><br>
	<div class="conteudo">
		<form action="confirmaupdate.php">
			ID =
			<?php echo $id ?><br><br>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			Nome<br>
			<input class="conteudo2" type="text" name="nomeproduto"  value="<?php echo $nome ?>"><br><br>
			Marca<br>
			<input class="conteudo2"  type="text" name="marcaproduto"  value="<?php echo $marca ?>"><br><br>
			Quantidade<br>
			<input class="conteudo2" type="number" name="quantidadeproduto" value="<?php echo $quantidade ?>"><br><br>
			Preço de compra<br>
			<input class="conteudo2" type="number" name="compraproduto" value="<?php echo $precocompra ?>"><br><br>
			Preço de venda<br>
			<input class="conteudo2"  type="number" name="vendaproduto" value="<?php echo $precocompra ?>"><br><br>
			<input class="botao2  botao2-blue"   type="submit" value="Editar">
		</form>
	</div>
	</body>
</html>