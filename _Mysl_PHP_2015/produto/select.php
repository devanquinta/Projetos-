<?php

include('checkSession.php');

include('cab.php');
include('conexaodb.php');

$numlinha =1;
$quant = 10;
$precomin = $_REQUEST['precominimo'];
$orderby = $_REQUEST['orderby'];
$ini = $_REQUEST['ini'];

if($orderby=='')
{
	$orderby='id';
}

if($precomin=='')
{
	$precomin=100000;
}

if($ini=='')
{
	$ini=1;
}

$query="SELECT id,
				precovenda, 
				nome, 
				marca,
				quantidade,
				precocompra,
				precovenda
				FROM databasev
				WHERE precovenda < $precomin
				ORDER BY $orderby"; 	// 
				
// echo $query."<br><br>";
				
$recordset1 = mysql_query($query,$conn);
$numreg = mysql_num_rows($recordset1);

$query="SELECT id,
				precovenda, 
				nome, 
				marca,
				quantidade,
				precocompra,
				precovenda
				FROM databasev
				WHERE precovenda < $precomin
				ORDER BY $orderby
				LIMIT $ini, $quant"; 	// 
				
// echo $query."<br><br>";
				
$recordset = mysql_query($query,$conn);
echo "<br><br>";

echo "<table>";
echo "<tr class='cab'>";
//coloquei o insert aqui por enquanto
if(strpos($_SESSION['acc'],'I',0))
{
 	echo "<div class='inser'><a href='forminsert.php'><button class='btn5 btn5-b'>INSERIR</button></a>
</div>";
echo $teste;
}
//coloquei o insert aqui por enquanto

//coloquei o svg aqui

echo "<div class='svg'><a href='svg.php'><button class='btn4 btn4-b'>GRÁFICO</button></a></div>";		

//svg


//if(strpos($_SESSION['acc'],'D',0))
//{
	echo "<td><center><div class='btn3 btn3-b'>DELETAR<div></center>
		</td>";
//}
if(strpos($_SESSION['acc'],'U',0))
{
	echo "<td><center><div class='btn3 btn3-b'>INSERIR<div></center>
		</td>";
}
echo "<td><center><div class='btn3 btn3-b'>ID<div></center></td>";	
echo "<td height='30'><center><a href='select.php?orderby=nome'><button class='btn btn-b'>NOME</button> 
		</a></center></td>";
echo "<td><center><a href='select.php?orderby=marca'><button class='btn btn-b'>MARCA</button> 
		</a></center></td>";
echo "<td><center><a href='select.php?orderby=quantidade'><button class='btn btn-b'>QUANTIDADE</button> 
		</a></center></td>";
echo "<td align='right'><center><a href='select.php?orderby=precocompra'><button class='btn btn-b'>PREÇO DE COMPRA</button> 
		</a></center></td>";
echo "<td align='right'><center><a href='select.php?orderby=precovenda'> <button class='btn btn-b'>PREÇO DE VENDA</button> 
		</a></center></td>";
echo "</tr>";
	
	

while($linha = mysql_fetch_assoc($recordset))
{
	$resto = ($numlinha / 2) - intval($numlinha / 2);
	if($resto == 0)
	{ 
		$classe = "trpar";
	
	}
	else
	{
		$classe = "trimpar";
	}

	$nomeproduto = $linha['nome'];
	$marca=substr($nomeproduto,0,4);
	echo "<tr class='$classe'>";
	//if(strpos($_SESSION['acc'],'D',0))
	//{
		echo "<td align='center'><center><a href='delete.php?id=".$linha['id']."'><button class='btn2 btn2-b'>DELETAR</button> 
		</a><center></td>";
	//}
	if(strpos($_SESSION['acc'],'U',0))
	{
	 echo "<td align='center'><a href='formupdate.php?id=".$linha['id']."'><button class='btn2 btn2-b'>DELETAR</button></a></td>";		
	}
	
	
	echo "<td align='center'>".$linha['id']."</td>";
	echo "<td>".$nomeproduto."</td>";
	echo "<td align='center'>".$linha['marca']."</td>";
	echo "<td>".$linha['quantidade']."</td>";
	echo "<td width=100 align='right'>".$linha['precocompra']."</td>";
	echo "<td width=100 align='right'>".$linha['precovenda']."</td>";
	echo "</tr>";
	$numlinha++;
}
echo "</table><center><font color='white'><br>";


if($numreg > $quant)
{
	$numpags = $numreg/$quant + 1;
	
	for($k=1;$k<$numpags;$k++)
	{
		$ini = (($k-1)*$quant)+1;
		echo "<a href='select.php?ini=$ini'>$k</a> . ";
	}
}


?>
</body>
</html>


