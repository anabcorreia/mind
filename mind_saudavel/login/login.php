<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../mind_saudavel/resources/css/login.css">
    <title>Login</title>
</head>
<body>
    <header>
    <?php
        if(isset($_SESSION['nao_autenticado'])):
            echo '<div class="alert">Usuário ou senha inválidos!</div>';
            unset($_SESSION['nao_autenticado']);
        endif;
        ?>
    </header>

    <section>
        <div id="login">

            <div class="card">
                <div class="cadastro">
            <h2>Login</h2>
            <img class="logo" src="../../mind_saudavel/resources/img/lg.png">
            </div>
            <div class="rs">
                <img class="img" src="../../mind_saudavel/resources/img/facebook.png">
                <img class="img" src="../../mind_saudavel/resources/img/insta.png">
                <img class="img" src="../../mind_saudavel/resources/img/google.png">
            </div>

            <div class="pqp">
                <p>Não tem uma conta? <a href="../../mind_saudavel/login/cadastro.php">Cadastre-se!</a></p>
            </div>

            </div>

        <div class="linha"></div>

        <div class="card">
            <div class="card-content">
            <form method="post">
            <div class="card-content-area">
                <label for="usuario">Email ou Nome de Usuário:</label>
                <input type="text" name="nome" required>
            </div>

            <div class="card-content-area">
                <label for="usuario">Senha:</label>
                <input type="password" name="senha" required>
            </div>

                <div class="card-footer">
                    <button class="submit" type="submit">Logar</button>
                    <a href="#" class="recuperar_senha">Esqueceu a senha?</a>
                </div>
            </form>
        </div>
        </div>

        </div>
        </div>
    </section>
</body>
</html>