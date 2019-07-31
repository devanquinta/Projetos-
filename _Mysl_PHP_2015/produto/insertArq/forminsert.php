<?php
	include('checkSession.php');
	include('cab.php');
	include('conexaodb.php');
	$id = $_REQUEST['id'];
	$query="SELECT nome, marca, quantidade, pecocompra, precovenda FROM databasev WHERE id=$id";
	$recordset = mysql_query($query,$conn);
	$linha = mysql_fetch_assoc($recordset);
	$nome = $linha['nome'];
	$marca = $linha['marca'];
	$quantidade = $linha['quantidade'];	
	$precocompra = $linha['precocompra'];
    $precovenda = $linha['precovenda'];	
	?>
	<div class="conteudo">
		<form action="confirmainsert.php">
		    <br>
			Produto<br>
			<input class="conteudo2" type="text"  placeholder="Produto" name="nomeproduto"  value="<?php echo $nome ?>"><br><br>
			Marca<br>
			<input class="conteudo2" type="text"  placeholder="Marca"  name="marcaproduto" value="<?php echo $marca ?>"><br><br>
			Quantidade<br>
			<input class="conteudo2" type="number"  placeholder="Quantidade" name="quantproduto" value="<?php echo $quantidade ?>"><br><br>
			preço de compra<br>
			<input class="conteudo2" type="number" placeholder="Preço de compra"    name="compraproduto" value="<?php echo $precocompra ?>"><br><br>
			preço de venda<br>
			<input class="conteudo2" type="number" placeholder="Preço de venda"   name="vendaproduto" value="<?php echo $precovenda ?>"><br><br>
			<input class="botao2  botao2-blue" type="submit" value="Inserir!">
		</form>
	</div>
	</body>
</html>