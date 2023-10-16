<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
{
    include_once('config.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE Nome = '$usuario'";

    $result = $conexao->query($sql);

    if($result && $result->num_rows == 1)
    {
        $row = $result->fetch_assoc();
        $senhaCriptografada = $row['senha'];

        // Verifica a senha usando password_verify
        if(password_verify($senha, $senhaCriptografada))
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;

            header('Location: sistema.php');
        }
        else
        {
            header('Location: login.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
}
else
{
    header('Location: login.php');
}
?>