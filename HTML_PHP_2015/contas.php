<html>

<head>

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css.css">

</head>

  <body bgcolor="#F5F5F5">
  <?php include("cabecalho.php"); ?>
  <?php include("menu1.php"); ?>
  <?php include("banner.php"); ?>
  <?php include("menu.php"); ?> 

  
  
  
  
  
  <div class="login">
 
 
 <h1 class="cadast">CADASTRE-SE</h1>
 
  <div class="contas">
   <form action="enviar.php">
   
   
    <input class="pesquisa2" type="text"  name="email"  placeholder="Digite seu E-mail">
  
    <input class="pesquisa2" type="text"  name="cpf"  placeholder="Digite seu CPF ou CNPJ">
  
    <input class="pesquisa2" type="text" name="nome" placeholder="Digite seu nome de usuário" >
   
    <input class="pesquisa2" type="text"  name="senha" placeholder="Crie uma senha" >
  
    <input class="pesquisa2" type="text" name="senhar" placeholder="Repita a senha" >
  
    <input class="botao2  botao2-blue" type="submit" value="CADASTRAR">
   </form>
  </div>
  
  <h1 class="cadast2">já é cadastrado?</h1>
  <h2 class="cadast3">Então entre com seus dados.</h2> 
   <form action="login.php">
    <input class="pesquisa3" type="text" name="logi" placeholder="Nome do usuário" >
	<input class="pesquisa3" type="password" name="logisenha" placeholder="SENHA" >
    <input class="botao3 botao3-blue" type="submit" value="Login">
   </form>
  </div>
  

  
 </div>
  
  
  
  
  
  
  
 </div>
 
 
 
 
 
  
  
  
  
  
  
  
  
  
 <?php include("rodape.php"); ?>
 
 

</body>




</html>
