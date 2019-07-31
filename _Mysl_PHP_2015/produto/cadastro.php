<?php
 
$login = $_POST['user'];
$access = $_POST['access'];
$senha = MD5($_POST['pw']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('banco');
$query_select = "SELECT user FROM usuarios WHERE user = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['user'];
 
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
 
        }else{
            if($logarray == $login){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
                die();
 
            }else{
                $query = "INSERT INTO usuarios (user,pw,access) VALUES ('$login','$senha','$access')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
                }
            }
        }
?>

