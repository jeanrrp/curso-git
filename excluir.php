<?php 

require('conexao.php');

$id_usuario = (isset($_GET["codigo"])) ? $_GET["codigo"] : null;
 
$sql = "DELETE FROM usuario  WHERE id = {$id_usuario}";
$resultado = mysqli_query($conec, $sql);


if ($resultado) {
	# code...
	echo "excluido com sucesso";
	require('index.php');
}else{
	echo"falha ao excluir";
}




?>