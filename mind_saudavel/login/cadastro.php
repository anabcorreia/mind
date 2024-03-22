<?php
session_start(); // Inicie a sessão no início do arquivo

require_once '../db/db.php';
require_once 'app/controller/UserController.php';

$userController = new UserController($pdo);

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $userController->criarUser($_POST['nome'], $_POST['email'], $_POST['senha']);
    header('Location: cadastro.php'); // Redirecione para a página de cadastro
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../mind_saudavel/resources/css/login.css">
    <title>Cadastro</title>
</head>
<body>
    <?php
    // Adicione esta parte para exibir a mensagem
    if (isset($_SESSION['mensagem'])) {
        echo '<div class="alert"><p>' . $_SESSION['mensagem'] . '</p></div>';
        unset($_SESSION['mensagem']); // Remova a mensagem da sessão
    }
    ?>
    <section">
        <div id="login">

            <div class="card">
                <div class="cadastro">
            <h2>Cadastro</h2>
            <img class="logo" src="../../mind_saudavel/resources/img/lg.png">
            </div>
            <div class="rs">
                <img class="img" src="../../mind_saudavel/resources/img/facebook.png">
                <img class="img" src="../../mind_saudavel/resources/img/insta.png">
                <img class="img" src="../../mind_saudavel/resources/img/google.png">
            </div>
            </div>

        <div class="linha"></div>

        <div class="card">
            <div class="card-content">
            <form method="post">
            <div class="card-content-area">
                <label for="usuario">Nome Completo:</label>
                <input type="text" name="nome" required>
            </div>

            <div class="card-content-area">
                <label for="usuario">Nome de Usuário:</label>
                <input type="text" name="nomeu" required>
            </div>

            <div class="card-content-area">
                <label for="usuario">Email:</label>
                <input type="text" name="email" required>
            </div>

            <div class="card-content-area">
                <label for="usuario">Senha:</label>
                <input type="password" name="senha" required>
            </div>

                <div class="card-footer">
                    <button class="submit" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
        </div>

        </div>
        </div>
    </section>
</body>
</html>