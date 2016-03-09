<?php 
//incluindo conexao
require('conexao.php');

// query para trazer todos os dados da tabela usuario
$sql = mysqli_query($conec,"SELECT * FROM usuario");

$base = array();

// enquanto estiver passando dados o mysqli_fetch_array transforma em array e manda para variaver $resultado
while($resultado = mysqli_fetch_array($sql)){

	// dados = esta recebendo os valores da variavel $resultados e passando para um array 
	$base[] = array('id'=>$resultado['id'],'nome'=>$resultado['nome'],'idade'=>$resultado['idade']);

}
return $base;

//var_dump($result);



?>