<?php

$dbhost = 'localhost';
$dbUsername = 'root';
$dbpassword = '';
$dbname = 'cadastro';

$conexao = new mysqli($dbhost, $dbUsername, $dbpassword, $dbname);

//if ($conexao->connect_errno) {
//    echo "Erro";
//} else {
//    echo "Conexão efetuada";
//}

if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];



    // Criptografa a senha
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,cpf) VALUES ('$usuario','$email','$senhaCriptografada','$telefone','$cpf')");

    header('Location: login.php');
}


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/cigarrofavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo/style.css">
    <title>Cadastro</title>
    <style>
        .main-login {
            width: auto;
        }

        .card-login {
            padding: 46px;
            margin: 0px;
            width: 1200px;

        }

        .btn-cadastro {
            display: center;
            width: 100%;
            padding: 16px 0px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            color: #ffffff;
            background: #059700;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #059700;

        }




        
    </style>
</head>

<body>
    <header>
        <div class="container">
            <a href="index.html">
                <img src="imagens/Logo123Pitus-removebg-preview.png">
            </a>
            <h5>Contato:(31) 97356-0336</h5>
        </div>
    </header>



        <form action="cadastro.php" method="POST" class="formulario">
            <div class="main-login">
                <div class="rigth-login">
                    <div class="card-login">
                        <h1 class="login">Cadastro</h1>
                        <div class="textfield-cadastro">
                            <label class = usuario for="usuario">Usuário</label>
                            <input style="width: 125%" class = usuario type="text" name="usuario" placeholder="Nome completo" id="usuario" required>
                        </div>
                        <div class="textfield-cadastro">
                            <label for="datanascimento">Data de nascimento </label>
                            <input type="date" name="datanascimento" placeholder="Digite sua data de nascimento"id="datanascimento" required>
                                
                        </div>
                        <div class="textfield-cadastro">
                            <label for="cpf">CPF </label>
                            <input type="text" name="cpf" placeholder="Digite seu CPF" id="cpf" required>
                        </div>
                        <div class="textfield-cadastro">
                            <label for="cep">CEP:</label>
                            <input type="text" id="cep" name="cep" required>
                        </div>
                        <button class=btn-cep type="button" onclick="buscarEndereco()">Buscar</button>
                        <div class="textfield-cadastro">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" placeholder="Digite seu E-mail" id="email" required>
                        </div>
                        <div class="textfield-cadastro">
                            <label for="telefone"> Telefone </label>
                            <input type="text" name="telefone" placeholder="Digite seu telefone" id="telefone" required>
                        </div>
                        <div class="textfield-cadastro">
                            <label for="estado">Estado:</label>
                            <input type="text" id="estado" name="estado" readonly>
                        </div>
                        <div class="textfield-cadastro">
                            <label for="cidade">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" readonly>
                        </div>
                        <div class="textfield-cadastro">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" placeholder="Senha" id="senha" required
                                autocomplete="current-password">
                        </div>
                        <div class="textfield-cadastro">
                            <label for="bairro">Bairro:</label>
                            <input type="text" id="bairro" name="bairro" readonly>
                        </div>
                        <div class="textfield-cadastro">
                            <label for="logradouro">Logadouro:</label>
                            <input margin="0px" type="text" id="logradouro" name="logradouro" readonly>
                        </div>
                        <div class="textfield-cadastro">
                            <label for="numero">Número:</label>
                            <input type="text" id="numero" name="numero" required>
                        </div>

                        <div class="btn-cad">
                            <input type="submit" name="submit" id="submit" class="btn-cadastro" style="width:300px">
                            <h5 class="text-login">Já tenho uma conta!<a href="login.php"> Login</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </form>
  

    <script>
        async function encontrarEnderecoPorCEP(cep) {
            try {
                const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
                const data = await response.json();
                return data;
            } catch (error) {
                console.error(error);
            }
        }

        function buscarEndereco() {
            const cep = document.getElementById('cep').value;
            encontrarEnderecoPorCEP(cep).then(endereco => {
                document.getElementById('logradouro').value = endereco.logradouro || '';
                document.getElementById('bairro').value = endereco.bairro || '';
                document.getElementById('cidade').value = endereco.localidade || '';
                document.getElementById('estado').value = endereco.uf || '';
            });
        }
    </script>
    </form>



</body>


</html>