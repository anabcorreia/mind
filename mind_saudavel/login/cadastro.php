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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Euphoria+Script&display=swap">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Aubrey">
    <script src="Public/Js/script.js"></script>
    <title>Cadastro</title>
</head>
<body style="background-image: url('Public/Assets/2108.w023.n001.891B.p1.891.jpg');">
    <?php
    // Adicione esta parte para exibir a mensagem
    if (isset($_SESSION['mensagem'])) {
        echo '<div class="alert"><p>' . $_SESSION['mensagem'] . '</p></div>';
        unset($_SESSION['mensagem']); // Remova a mensagem da sessão
    }
    ?>
    <section class="cadastro_section">
        <h1>sitezão</h1>
        <div class="cadastro_box">
            <h2>Cadastra-se</h2>
            <form method="post">
                <input type="text" name="nome" placeholder="Nome Usuário" required>
                <input type="text" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <div class="button"><button type="submit">Criar</button>
            </form>
            <form action="login.php">
                <button>Voltar</button>
            </form></div>
        </div>
    </section>
</body>
</html>