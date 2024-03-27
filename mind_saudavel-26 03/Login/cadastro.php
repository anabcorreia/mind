<?php
    session_start(); // Inicie a sessão no início do arquivo

    require_once '../db/db.php';
    require_once 'C:\xampp\htdocs\mind_saudavel\Login\app\controller\controller.php';

    $userController = new UserController($pdo);

    if (isset($_POST['nome']) && isset($_POST['nome_u']) && isset($_POST['email']) && isset($_POST['senha'])) {
        $userController->criarUser($_POST['nome'], $_POST['nome_u'], $_POST['email'], $_POST['senha']);
        header('Location: cadastro.php'); // Redirecione para a página de cadastro
        exit();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/CSS/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <section>
        <div class="cad">
            <div class="l">
                <div class="logo-txt">Login</div>
                <div class="logo">
                    <img src="public/assets/logo.jpeg" alt="Logo">
                </div>
            </div>
            <div class="redes">
                <div class="rede-b"><a href=""></a></div>
                <div class="rede-b"><a href=""></a></div>
                <div class="rede-b"><a href=""></a></div>
            </div>
            <div class="cad-txt">
                Já possui uma conta?<a href="login.php" class="no-underline">Logue nela!</a>
            </div>  
         </div>
        <div class="log">
            <form method="post">
                            <div class="inp">
                                <div class="txt-inp">Nome Completo:</div>
                                <input type="text" name="nome" placeholder="Nome Completo" required>
                            </div>
                            <div class="inp">
                                <div class="txt-inp">Nome de Usuário:</div>
                                <input type="text" name="nome_u" placeholder="Nome de Usuario" required>
                            </div>
                            <div class="inp">
                                <div class="txt-inp">Email:</div>
                                <input type="email" name="email" placeholder="E-mail" required>
                            </div>
                            <div class="inp">
                                <div class="txt-inp">Senha:</div>
                                <input type="password" name="senha" placeholder="Senha" required>
                            </div>
                            <div class="but">
                                <button type="submit">Criar</button>
                            </div>
                        </div>
                    <?php
                    if (isset($_SESSION['mensagem'])) {
                        echo '<div class="alert"><p>' . $_SESSION['mensagem'] . '</p></div>';
                        unset($_SESSION['mensagem']);
                    }
                    ?>
        </div>
    </section>
</body>
</html>