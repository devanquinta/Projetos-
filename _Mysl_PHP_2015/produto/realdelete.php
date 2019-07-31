<?php
include("config.php");
$conn = mysqli_connect($server, $user, $pw, $db);
// execução

$idproduto = $_REQUEST['id'];
$query = "DELETE FROM databasev WHERE id=$idproduto";
mysqli_query ($conn,$query);
header('location:select.php');

?>