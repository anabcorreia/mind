<?php
        session_start();
        include 'verfica_login.php';
    ?>
    <h2>Sejá bem-vindo, <?php echo $_SESSION['usuarioNomedeUsuario'] , "!"; ?> </h2>
    <button><a href="logout.php">logout</a></button>
    <div class="container">
        <a href="produtos.php">Produtos</a>
        <a href="user.php">Users</a>
        <a href="perguntas.php">Perguntas</a>
        <a href="artigos.php">Artigos</a>
        <a href="noticias.php">Notícias</a>
    </div>