<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            font: 50px sans-serif; text-align: center; 
            }
        a {
            width: 300px;
        }

    </style>
</head>
<body>
    <h1 class="my-5">Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bem vindo a pagina de Escolha.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Resetar a Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sair da Conta</a>
        <a href="index3.php" class="btn btn-info">Entrar no site</a>
    </p>
</body>
</html>