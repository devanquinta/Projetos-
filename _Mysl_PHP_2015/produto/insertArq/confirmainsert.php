<?php
	include('checkSession.php');
	include('cab.php');
	include('conexaodb.php');
	$nome = $_REQUEST['nomeproduto'];
	$marca = $_REQUEST['marcaproduto'];
	$quantidade = $_REQUEST['quantproduto'];
	$precocompra = $_REQUEST['compraproduto'];
	$precovenda = $_REQUEST['vendaproduto'];
?>
	<div class="conteudo">
	<p>Ensirir dados?</p>
	<p>Produto: <?php echo $nome ?></p>
	<p>Marca: <?php echo $marca ?></p>
	<p>Quantidade: <?php echo $quantidade ?></p>
	<p>Preço de compra: <?php echo $precocompra ?></p>
	<p>Preço de venda: <?php echo $precovenda ?></p>
	<p><b>
		<a href="realupdate.php?n=<?php echo $nome ?>&m=<?php echo $marca ?>&q=<?php echo $quantidade ?>&p=<?php echo $precocompra ?>&v=<?php echo $precovenda ?>">SIM</a>
		&nbsp;&nbsp;
		<a href="select.php">NÃO</a>
	</b></p>
	</div>
	</body>
</html>