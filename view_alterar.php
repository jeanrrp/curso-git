<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alterar</title>
</head>
<body>
	<?php require('alterar.php');  ?>
	
	
			<h3>Formulario de Alteração de usuario</h3>
			<form action="alterar.php" method="POST">
				<p>Nome Usuario:</p>
				<p><input type="text"maxlength"120" name="txtNomeUsuario" value="<?=$resultados['nome']?>"></p>


				<p>Idade:</p>
				<p><input type="text"maxlength"3" name="txtIdade" value="<?=$resultados['idade']?>"></p>

				<input type="submit" value="Altera Usuario">

				<input type="hidden" name="frmAlterar" value="<?=$resultados['id']?>">

				
			</form>


	

	<a href="index.php">Voltar</a>

	
</body>
</html>