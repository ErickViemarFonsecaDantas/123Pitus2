
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/cigarrofavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo/style.css">
    <title>login</title>
    <style>
        .rigth-login{
            width: 20vw;
        }
    </style>
</head>

<body>
     <header>
     <div class="container">
       <a href="index.html">
       <img src="imagens/Logo123Pitus-removebg-preview.png">
       </a>
       <h5>Contato: (31) 97356-0336</h5>
    </div>
    </header>

    <form action="testelogin.php" method="POST">
        <div class="main-login">
            <div class="left-login">
                <img src="imagens/login-2-4verde-removebg-preview.png">
                <h1>Realize o login<br>E comece a comprar</h1>
            </div>
            <div class="rigth-login">
                <div class="card-login">
                    <h1 class="login">LOGIN</h1>
                    <div class="textfield-login">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário cadastrado" id="usuario" required>
                    </div>
                    <div class="textfield-login">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha" id="senha" required>
                    </div>
                    <div class="end-login">
                        <a href= "cadastro.html">Esqueci minha senha</a>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Enviar" class="btn-login">
                    <div>
                    <h5>Ainda não tem uma conta?<a href="cadastro.php"> Cadastre-se</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>