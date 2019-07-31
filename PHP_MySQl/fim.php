<?php
session_start();
$nome = $_SESSION['nome'];
$telefone = $_SESSION['telefone'];
$nome_pessoa = explode(" ", $nome);
$nome_pessoa1 = strtolower($nome_pessoa[0].$nome_pessoa[1].$nome_pessoa[2].'@fundec.org.br');
$nome_pessoa2 = strtolower($nome_pessoa[1].$nome_pessoa[2].$nome_pessoa[0].'@fundec.org.br');
$nome_pessoa3 = strtolower($nome_pessoa[2].$nome_pessoa[0].$nome_pessoa[1].'@fundec.org.br');
$nome_pessoa4 = strtolower(substr($nome, 0, 3).$nome_pessoa[2].$nome_pessoa[0].'@fundec.org.br');
$nome_pessoa5 = strtolower(substr($nome, 0, 1).$nome_pessoa[0].$nome_pessoa[2].'@fundec.org.br');
$nome = $_POST['nome'];
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
/*swith*/
echo "<div class='alert-info' style='font-size:22px'>";
if ($nome=='1') 
{
    echo "<br>A criação de seu e-mail ($nome_pessoa1) será feita nos próximos minutos.<br>";
}
elseif ($nome=='2') 
{
    echo "<br>A criação de seu e-mail ($nome_pessoa2) será feita nos próximos minutos.<br>";
}
elseif ($nome=='3') 
{
    echo "<br>A criação de seu e-mail ($nome_pessoa3) será feita nos próximos minutos.<br>";
}
elseif ($nome=='4') {

    echo "<br>A criação de seu e-mail ($nome_pessoa4) será feita nos próximos minutos.<br>";
}
elseif ($nome=='5') {

    echo "<br>A criação de seu e-mail ($nome_pessoa5) será feita nos próximos minutos.<br>";
}
echo "Um SMS foi enviado para $telefone  com a sua senha de acesso.";
echo "<br><br></div>";
?>
    <div style="border:1px solid #DCDCDC">
        <h3>Duvidas entre em contato</h3>
        <p>Secretaria Administrativa: 2109-1650/1664</p>
        <p>Núcleo de Captação e Administração de Projetos: 2109-1668/1671/1674/1685/1687/1692/1693/</p>
        <p>Núcleo de Administração de Pessoal: 2109-1665/1675/1676/1678</p>
        <p>Gerência de Desenvolvimento Organizacional e Humano: 2109-1670</p>
        <p>Gerência de Contabilidade: 2109-1679/1690/1697</p>
        <p>Gerência Financeira: 2109-1658/1677/1695/1662/1663/1656</p> 
        <p>Gerência de Suprimentos: 2109-1659/1669/1680/1681/1683/1686/1689/1691</p> 
    </div>
</div>
    <div class="clearfix">
    </div>
</div>
</body>
</html>