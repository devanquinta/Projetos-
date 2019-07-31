<?php
	include('checkSession.php');
	include('cab.php');
	include('conexaodb.php');
	
	
	?>
	<div class="conteudo">
		<form action="confirmainsert.php">
			
			Nome<br>
			<input  type="text" name="nomeproduto"><br><br>
			Marca<br>
			<input   type="text" name="marcaproduto"><br><br>
			Quantidade<br>
			<input  type="number" name="quantidadeproduto"><br><br>
			Preço de compra<br>
			<input  type="number" name="compraproduto"><br><br>
			Preço de venda<br>
			<input  type="number" name="vendaproduto"><br><br>
			<input    type="submit" value="Editar">
		</form>
	</div>
	</body>
</html>