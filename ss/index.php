<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/CSS/cab-rod.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
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
                        <li class="nav-button"><a href="" class="nav-link">Ártigos</a></li>
                        <li class="nav-button"><a href="" class="nav-link">Notícias</a></li>
                        <li class="nav-button"><a href="" class="nav-link">Jogos</a></li>
                        <li class="nav-button"><a href="" class="nav-link">Produtos</a></li>
                        <li class="nav-button"><a href="" class="nav-link">MindScrib</a></li>
                        <li class="nav-button"><a href="" class="nav-link">Ajuda</a></li>
                    </ul>
                </div>
                <div class="search">
                    <a href="search.php">
                        <img src="public/Assets/search.png" alt="search-icon">
                    </a>
                </div>
            </nav>
            <?php
        session_start();
        include 'verfica_login.php';
    ?>
<button><a href="logout.php">logout</a></button>   

        </header>
        <footer>
            <div class="contato">
                <div class="rod-txt">
                    <p>Contato:</p>
                </div>
                <div class="rod-img">
                    <div class="rs"><img src="" alt="rs"></div>
                    <div class="rs"><img src="" alt="rs"></div>
                    <div class="rs"><img src="" alt="rs"></div>
                </div>
            </div>
        </footer>
    </div>


</body>
</html>