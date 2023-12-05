<?php
	$servidor2 = "localhost";
	$usuario2 = "root";
	$senha2 = "";
	$dbname = "cadastro_geral";
	
	
	
	//Criar a conexao
	$conn = mysqli_connect($servidor2, $usuario2, $senha2, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		echo "Conexao realizada com sucesso";
	}	
?>