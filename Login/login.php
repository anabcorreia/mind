<?php
session_start();
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
    <title>Login</title>
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
            <div class="rede-b"><a href=""><img src="public/assets/facebook.png" alt=""></a></div>
                <div class="rede-b"><a href=""><img src="public/assets/insta.png" alt=""></a></div>
                <div class="rede-b"><a href=""><img src="public/assets/google.png" alt=""></a></div>
            </div>
            <div class="cad-txt">
                Nao tem uma conta?<a href="cadastro.php" class="no-underline">Cadastre-se!</a>
            </div>  
        </div>
        
        <div class="log">  
            <form action="loginconfig.php" method="POST">
                <div class="inp">
                    <div class="txt-inp">Email ou Nome de Usuário:</div>
                    <input type="text" name="email" placeholder="E-mail ou Nome de Usuário">
                </div>
                <div class="inp">
                <div class="txt-inp">Senha:</div>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="red-senha">
                    <a href="redefinir/index.php" class="no-underline red-senha-txt">Esqueceu sua senha?</a>
                </div>
                <div class="but">
                    <button type="submit">Logar</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>