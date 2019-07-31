<html>
<head>
<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="css.css">
</head>
  <body bgcolor="#F5F5F5">
   <?php include("cabecalho.php"); ?> 
    <div class="login">
     <h1 class="cadast">NOVO PRODUTO</h1>
    <div class="contas"> 
     <form action='insert.php'>    
		<h3 style="color:#CCFFFF">DATA DE COMPRA</h3>
		<br>
		<input class="pesquisa2"  name='data_de_compra' type='text' placeholder="Data de compra"><br>
		<h3 style="color:#CCFFFF "> NOME</h3><br>
		<input  class="pesquisa2" name='nome' type='text' placeholder="Nome" ><br>
		<h3 style="color:#CCFFFF ">MARCA</h3><br>
		<input class="pesquisa2"  name='marca' type='text' placeholder="Marca"><br>
		<h3 style="color:#CCFFFF ">MODELO</h3><br>
		<input class="pesquisa2" name='modelo' type='text' placeholder="Modelo"><br>
		<h3 style="color:#CCFFFF ">QUANTIDADE</h3><br>
		<input class="pesquisa2"  name='quantidade' type='number' placeholder="Quantidade"><br>
		<h3 style="color:#CCFFFF ">DETALHES</h3><br>
		<input class="pesquisa2"  name='detalhes' type='text' placeholder="Detalhes"><br>
		<h3 style="color:#CCFFFF ">PREÇO DE COMPRA</h3><br>
		<input class="pesquisa2"  name='preco_de_compra' type='number' placeholder="Preço de compra" ><br>
		<h3 style="color:#CCFFFF ">PRECO DE VENDA</h3><br>
		<input  class="pesquisa2"  name='preco_de_venda' type='number'placeholder="preço de venda" ><br>
		<br>
		<input  class="botao2  botao2-blue"  type='submit' value='inserir!'>
	  </form>  
   </div> 
      <h1 class="cadast2">DELETAR PRODUTOS</h1>
     <form name="del" action="deletar.php">
		<h3  style="color:#FFFF99; margin-top:20px; margin-left:290px">Insira o id do produto:</h3>
		<input class="pesquisa3"  type="text" name="idform" size="3" placeholder="ID do produto">
		<input class="botao3 botao3-blue" type="submit" value="D E L E T A R">
	 </form>
   </div> 
 </div> 
 </div>
</body>
</html>
