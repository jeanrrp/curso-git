<?php 

require('conexao.php');

	//require('conexao.php');
	//require('view_alterar.php');

// se existir frmAlterar o id que vier atravez do metodo post sera armazenado em uma variavel, senao vira atras da variavel codigo vindo 
// da URL 
if (isset($_POST['frmAlterar'])) {
			# code...
	$id = $_POST['frmAlterar'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	
	

	// se existir a variavel $resultado
	if (isset($resultado)) {
		# code...
		echo "Alterado com Sucesso!";
		require('index.php');
	}else{
		$result =  "erro ao alterar";

	}
}else{
	$id = $_GET['codigo'];

}

// fazendo uma query para trazer o usuario com o id selecionado 
$query = ("SELECT id,nome,cpf,tipo_funcionario,rua,bairro,cidade,numero,telefone,email FROM funcionario WHERE idFuncionario = {$id}");

// o função mysqli_query esta fazendo uma consulta ao banco de dados, e passando o resultado para uma variavel
$a = mysqli_query($conexao,$query);

//$array_dados = array();

while($resultados = mysqli_fetch_array($a))
{ 

	//$array_dados[] = array('id'=>$resultados['id'],'nome'=>$resultados['nome'],'idade'=>$resultados['idade']); 

	return $resultados;


}


?>