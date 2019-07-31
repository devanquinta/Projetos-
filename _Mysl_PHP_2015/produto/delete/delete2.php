<?php
include('checkSession.php');
include("cab.php");
include("conexaodb.php");

$idproduto = $_REQUEST['id'];

print "<div class='conteudo'>Vou apagar o produto de id $idproduto.<br><br>";
print "Confirma?<br><br>";
print "<div class='confirma'><a href='realdelete.php?id=$idproduto'>SIM</a></div>";
print "&nbsp;&nbsp;&nbsp;&nbsp;";
print "<div class='confirma'><a href='select.php'>NÂO</a></div></a>";


?>