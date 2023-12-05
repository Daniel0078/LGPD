<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--formulario css-->
        <link rel="stylesheet" href="assets/css/cadastro.css">
    <title>Formulario responsivo com html e css</title>
</head>

<body>
    <div class="box">
        <div class="img-box">
            <img src="assets/images/form/img-formulario.png">	
        </div>
        <div class="form-box">
			 <a href="index.html">PÁGINA INICIAL</a>		
            <h2>Criar Conta</h2>
            <p> Já é um membro? <a href="login.php"> Login </a> </p>
			
			
            <form action="cadastro.php" method="post">
                <div class="input-group">
                    <label for="nome"> Nome Completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o seu nome completo" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone"  name="telefone" maxlength="14" placeholder="Digite o seu telefone" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha"  name="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group w50">
                    <label for="Confirmarsenha">Confirmar Senha</label>
                    <input type="password" id="Confirmarsenha"  name="Confirmarsenha" placeholder="Confirme a senha" required>
                </div>

                <div class="input-group">
                    <button>Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
<?php
	// Verifica se o formulário foi enviado
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
		//Incluindo a conexão com banco de dados
		include_once("conexao.php");
		
    // Obtém os dados do formulário
	
	$nome = mysqli_escape_string ($conn, $_POST['nome']);
	$email = mysqli_escape_string ($conn, $_POST['email']);
	$telefone = mysqli_escape_string ($conn, $_POST['telefone']);
    $senha = mysqli_escape_string ($conn, $_POST['senha']);
	
	
    // Valida os dados do formulário
    if (empty($nome) || empty($email) || empty($telefone) || empty($senha)) {
        echo "Por favor, preencha todos os campos do formulário.";
    } else {
			
	//Incluindo a conexão com banco de dados
		include_once("conexao.php");
		
		$conn = new mysqli($servidor2, $usuario2, $senha2, $dbname);
    
    // Verifica se a conexão foi bem sucedida
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

    // Insere os dados do usuário no banco de dados
	
		$niveis_acesso_id = 3;
		
        $sql = "INSERT INTO usuarios (nome, email, telefone, senha, niveis_acesso_id) VALUES ('$nome', '$email','$telefone', '$senha', '$niveis_acesso_id')";

        if ($conn->query($sql) === TRUE) {
            
			echo "Usuário cadastrado com sucesso!";
			header("Location: login.php");
			
        } else {
            echo "Erro ao cadastrar usuário: " . $conn->error;
			header("Location: cadastro.php");
        }

     // Fecha a conexão com o banco de dados
        $conn->close();
    }
}
?>
