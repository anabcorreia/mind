<?php
if(!$_SESSION['usuarioEmail'] or !$_SESSION['usuarioNomedeUsuario']) {
    header('Location: ../Login/login.php');
    exit();
}

// Verifica se o tipo de usuário é 1
if($_SESSION['usuarioNiveisAcessoId'] == 2) {
    header('Location: ../SS/index.php'); // Página de erro para usuário com tipo 1
    exit();
}
?>