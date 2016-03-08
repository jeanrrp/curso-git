<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<a href="view_cadastrar.php">Cadastrar Novo Usuario</a>
	<table border="1" cellpading="5" cellspacing="5" width="550">
		<tr>
			<td>ID</td>
			<td>NOME</td>
			<td>IDADE</td>
			<td>Excluir</td>
			<td>Alterar</td>
		</tr>

		<?php require('listar.php'); ?>
		<?php foreach ($base as $resultados) {  ?>
			
		<tr>
			<td><?=$resultados['id']?></td>
			<td><?=$resultados['nome']?></td>
			<td><?=$resultados['idade']?></td>
			<td><a href="excluir.php?codigo=<?=$resultados['id']?>">Excluir</a></td>
			<td><a href="view_alterar.php?codigo=<?=$resultados['id']?>">Alterar</a></td>
		</tr>

		<?php }?>
	</table>
</body>
</html>

