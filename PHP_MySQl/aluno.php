<?php
require_once('conecta.php');
$mat = $_POST['mat'];
/*fazer um post para enviar a matricula para esta pagina*/
$sql = "SELECT * FROM aluno WHERE matricula = $mat";//105473 matricula ativa, 100406 Inativa matricula = $mat
$objDb = new conecta();
$link = $objDb->conecta_mysql();
$resultado_id = mysqli_query($link, $sql);
if($resultado_id)
{
  $dados_usuario = array();
  while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC))
  {
    $dados_usuario[] = $linha;
  }
    $status = true;
  foreach($dados_usuario as $usuario)
  {
   $_SESSION['nome'] = $usuario['nome'];
   $_SESSION['status'] = $usuario['status'];
   $_SESSION['telefone'] = $usuario['telefone'];
   $_SESSION['matricula'] = $usuario['matricula'];
   $_SESSION['uffemail'] = $usuario['uffemail'];
  /*Sem tratamento ainda*/
  }
}
$nome = $_SESSION['nome'];
$matricula = $_SESSION['matricula'];
$status = $_SESSION['status'];
$nome_pessoa = explode(" ", $nome);//quebra de string
$nome_pessoa1 = strtolower($nome_pessoa[0].$nome_pessoa[1].$nome_pessoa[2].'@fundec.org.br');
$nome_pessoa2 = strtolower($nome_pessoa[1].$nome_pessoa[2].$nome_pessoa[0].'@fundec.org.br');
$nome_pessoa3 = strtolower($nome_pessoa[2].$nome_pessoa[0].$nome_pessoa[1].'@fundec.org.br');
$nome_pessoa4 = strtolower(substr($nome, 0, 3).$nome_pessoa[2].$nome_pessoa[0].'@fundec.org.br');
$nome_pessoa5 = strtolower(substr($nome, 0, 1).$nome_pessoa[0].$nome_pessoa[2].'@fundec.org.br');
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
  <title>Registro de email comercial</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">    
</head>
<body>
  <div class="container">
    <div class="jumbotron">
      <h1>Crie seu email constitucional</h1>
    </div>
    <br>
  <div style="border:1px solid #DCDCDC">
<?php
  $die = false;
  if (!$mat or $mat != $matricula) 
  {
    echo "<br>
    <div style='color:red;font-size:30px'>
    A matricula não existe ou não está preenchida.
    <a href='index.php'>Voltar</a>
    <br><br></div>";
    //die();
   $die=true;
  }elseif ($status == "Inativo") {
    echo "<br>
    <div style='color:red;font-size:30px'>
    Estatus negativo.
    Acesso negado!<a href='index.php'> Voltar</a>
    <br><br></div>";
    $die=true;
    //die();
  }elseif ($_SESSION['uffemail']) {
    echo "<br>
    <div style='color:red;font-size:30px'>
    Email corporativo já registrado!<a href='index.php'> Voltar</a>
    <br><br></div>";
    $die=true;
    //die();
  }
?>
<?php 
    if($die!=false){
     echo "
      <div style='border:1px solid #DCDCDC'>
      <h3>Duvidas entre em contato</h3>
      <p>Secretaria Administrativa: 2109-1650/1664</p>
      <p>Núcleo de Captação e Administração de Projetos: 2109-1668/1671/1674/1685/1687/1692/1693/</p>
      <p>Núcleo de Administração de Pessoal: 2109-1665/1675/1676/1678</p>
      <p>Gerência de Desenvolvimento Organizacional e Humano: 2109-1670</p>
      <p>Gerência de Contabilidade: 2109-1679/1690/1697</p>
      <p>Gerência Financeira: 2109-1658/1677/1695/1662/1663/1656</p> 
      <p>Gerência de Suprimentos: 2109-1659/1669/1680/1681/1683/1686/1689/1691</p> 
      </div>
      ";
    }
?>
<?php if ($die) {
      die();
}?>
  <form method="post" action="fim.php">
     <?php echo "<br><h2 class= 'alert-info'>$nome_pessoa[0], por favor escolha uma das opções abaixo para o seu e-mail institucional:</h2><br><br>"?>
     <span><input type="radio" name="nome" value= '1'><?php echo $nome_pessoa1 ?></span><br><br>
     <span><input type="radio" name="nome" value='2' ><?php echo $nome_pessoa2 ?></span><br><br>
     <span><input type="radio" name="nome" value='3' ><?php echo $nome_pessoa3 ?></span><br><br>
     <span><input type="radio" name="nome" value='4' ><?php echo $nome_pessoa4 ?></span><br><br>
     <span><input type="radio" name="nome" value='5' ><?php echo $nome_pessoa5 ?></span><br><br><br>
     <input  type="submit" class="alert-info">
  </form>
  </div>
    <div class="clearfix"></div>
  </div>
</body>
</html>