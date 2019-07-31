<?phpinclude('conexaodb.php'); ?>
<?php print $header; ?>
		<center>
			<font face="calibri" color="#197e2c">
			DELETE PRODUTO<br>
			<form action="delete.php">
				ID do PRODUTO<br>
				<input type="number" name="id">
				<input type="submit">
			</font>
		</center>
	</body>
</html>