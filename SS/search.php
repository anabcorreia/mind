<?php
        session_start();
        include 'verfica_login.php';
        require_once '../db/db.php';
        require_once 'app/Controller/controller.php';
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/CSS/cab-rod.css">
    <link rel="stylesheet" href="public/CSS/search.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Index</title>
</head>
<body>
<div class="grid">
        <header>
        <nav>
                <div class="logo">
                    <a class="logo-a" href="index.php">
                        <img src="public/Assets/logo.jpeg" alt="logo">
                    </a>
                </div>
                <div class="menu-nav">
                    <ul class="nav-list">
                        <li class="nav-button"><a href="artigo.php" class="nav-link">Artígos</a></li>
                        <li class="nav-button"><a href="noticias.php" class="nav-link">Notícias</a></li>
                        <li class="nav-button"><a href="jogos.php" class="nav-link">Jogos</a></li>
                        <li class="nav-button"><a href="produtos.php" class="nav-link">Produtos</a></li>
                        <li class="nav-button"><a href="mind-scrib.php" class="nav-link">MindScrib</a></li>
                        <li class="nav-button"><a href="ajuda.php" class="nav-link">Ajuda</a></li>
                    </ul>
                </div>
                <div class="search">
                    <a href="search.php">
                        <img class="search-img" src="public/Assets/search.png" alt="search-icon">
                    </a>
                </div>
                <div class="logout">
                    <a href="logout.php">
                        <img src="public/assets/logout.png" class="logout-img">
                    </a>
                </div>
            </nav>
        </header>
        <section>
            <div class="search">
                <form id="search-form">
                    <input type="search" id="search-input" placeholder="Pesquise Aqui">
                        <ul id="suggestions"></ul>
                </form>
                    
                <script src="public/js/search.js"></script>
            </div>
        </section>
        <footer>
            <div class="contato">
                <div class="rod-txt">
                    <p>Contato:</p>
                </div>
                <div class="rod-img">
                    <div class="rs"><img src="public/assets/facebook.png" alt="rs"></div>
                    <div class="rs"><img src="public/assets/insta.png" alt="rs"></div>
                    <div class="rs"><img src="public/assets/google.png" alt="rs"></div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>