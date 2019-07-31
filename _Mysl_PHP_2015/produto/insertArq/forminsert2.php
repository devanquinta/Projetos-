<html>
<head>
<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="css.css">
</head>
  <body bgcolor="#F5F5F5">
  
    <?php
    include('checkSession.php');
	include('cab.php');
	?>
	
    <div class="login">
     <h1 class="cadast">NOVO PRODUTO</h1>
    <div class="contas"> 
     <form action='insert.php'>    
		<h3 style="color:#CCFFFF "> NOME</h3><br>
		<input  class="conteudo2" name='nome' type='text' placeholder="Nome" ><br>
		<h3 style="color:#CCFFFF ">MARCA</h3><br>
		<input class="conteudo2"  name='marca' type='text' placeholder="Marca"><br>
		<h3 style="color:#CCFFFF ">QUANTIDADE</h3><br>
		<input class="conteudo2"  name='quantidade' type='number' placeholder="Quantidade"><br>
		<h3 style="color:#CCFFFF ">PREÇO DE COMPRA</h3><br>
		<input class="conteudo2"  name='precocompra' type='number' placeholder="Preço de compra" ><br>
		<h3 style="color:#CCFFFF ">PRECO DE VENDA</h3><br>
		<input  class="conteudo2"  name='precovenda' type='number' placeholder="preço de venda" ><br>
		<br>
		<input  class="botao2  botao2-blue"  type='submit' value='inserir!'>
	  </form>  
   </div> 
   </html>
   
   