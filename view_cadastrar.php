<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<h3>Formulario de Cadastro de usuario</h3>
	<form action="cadastrar.php" method="POST">
		<p>Nome Usuario:</p>
		<p><input type="text"maxlength"120" name="nomeUsuario"></p>

		<p>Idade:</p>
		<p><input type="text"maxlength"3" name="idadeUsuario"></p>

		<input type="hidden" name="frmCadUsuario">
		<input type="submit" value="Cadastrar Novo Usuario">

		<a href="index.php">Voltar</a>
	</form>
</body>
</html>

