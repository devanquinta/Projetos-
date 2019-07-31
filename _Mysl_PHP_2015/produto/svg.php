<?php

	include('cab.php');
	include('conexaodb.php');

	$query="SELECT precovenda, count(precovenda) as 'quant'
			FROM databasev
			GROUP BY precovenda
			ORDER BY precovenda"; 	
					
	$tamanhodabarra = 5;
	$x = 100;

	$recordset = mysql_query($query,$conn);
	echo mysql_num_rows($recordset);
?>
<svg width="500" height="500">
	<line x1="95" y1="300" x2="400" y2="300" style="stroke:rgb(255,255,255);stroke-width:1" />
	<line x1="95" y1="100" x2="95" y2="300" style="stroke:rgb(255,255,255);stroke-width:1" />	
<?php
	for($y=270;$y>90;$y=$y-30)
	{
		echo "<line x1='85' y1='$y' x2='400' y2='$y' style='stroke:rgb(80,80,80);stroke-width:1' />";
		$y2=400-$y;	
		$eixoy = ($y/5)/4;
		echo "<text x='60' y='$y2' fill='white'>$eixoy</text>";		
	}

	$cor=70;
	while($linha = mysql_fetch_assoc($recordset))
	{
		$precovenda = $linha['precovenda'];
		$quant = $linha['quant']*$tamanhodabarra;
		$y=300-$quant;
		$y2=$y-5;


		echo "<rect 
		 		x='".$x."' y='".$y."'
		 		width='30' height='".$quant."'
		 		fill=rgb(20,128,$cor) stroke='1'
		    	/>";
		echo "<text x='".$x."' y='".$y2."' fill='white'>".$ano."</text>";
		$x = $x + 40;
		$cor = $cor + 25;
	}
?>
</svg> 
 
</body>
</html>