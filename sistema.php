<?php
session_start();
//print_r($_SESSION);

 if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
 {
     unset($_SESSION['usuario']);
     unset($_SESSION['senha']);
     header('Location: login.php');
 }
 $logado = $_SESSION['usuario'];



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/cigarrofavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo/style.css">
    <title>123Pitus</title>
</head>

<body>
 <header>
     <div class="container">

       <a href="#">
       <img src="imagens/Logo123Pitus-removebg-preview.png">
       </a>
       <h5>Contato:(31) 97356-0336</h5>
    </div>
    <div class = "d-flex ">
        <a href="sair.php" class = "btn-sair">Sair</a>

    </div>
    </header>
    <main>
        <br><br><br>
        <h1><a href="login.php"> Bem vindo ! <U>$logado</u> ,

        </a></h1>
    </main>
</body>

</html>