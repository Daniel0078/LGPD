<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--formulario css-->
		<link rel="stylesheet" href="assets/css/login.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="box">
        <div class="img-box">
             <img src="assets/images/form/img-formulario.png">	
        </div>
        <div class="form-box">
		 <a href="index.html">PÁGINA INICIAL</a>	
            <h2>FAZER LOGIN</h2>
            <p> Não tem uma conta? <a href="cadastro.php"> CADASTRAR AGORA </a> </p>
			
            <form method="POST" action="valida.php">
               
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group">
                    <button  type="submit">ENTRAR</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>