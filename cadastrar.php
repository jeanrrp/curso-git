<?php 

// incluindo o arquivo conexao.php 
require('conexao.php');


// verificando se existwe o metodo post frmCadUsuario
 if(isset($_POST['frmCadUsuario']) && $_POST['nomeUsuario'] != "" && $_POST['idadeUsuario'] != ""){

 		// passando os valores para uma variavel atras do metodo post
		$nomeUsuario = $_POST['nomeUsuario'];
		$idadeUsuario = $_POST['idadeUsuario'];

		// inserindo dados ao bd 
		$sql = "INSERT INTO usuario (nome, idade) VALUES ('{$nomeUsuario}',{$idadeUsuario})";
		//verificando se o insert esta ok, e tambem a conexao, lembrando que a variavel conec veio do arquivo conexao
		$resultado = mysqli_query($conec,$sql);

		// se existir a variavel $resultado
		if (isset($resultado)){
			# code...
			echo "cadastro com sucesso";
			require('index.php');
		}else{
			$result =  "erro ao cadastrar";



		}

}else{
	echo "erro";	
}



?>