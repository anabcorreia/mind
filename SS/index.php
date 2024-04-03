<?php
        session_start();
        include 'verfica_login.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/CSS/cab-rod.css">
    <link rel="stylesheet" href="public/CSS/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
            <div class="lado-e">
          <img src="public/Assets/saude-mental-dicas-importantes 1.png" alt="">
          </div>
          <div class="lado-d">
            <p class="ld-txt">
            Bem-vindo ao Mind Saudável!<br><br>
            No Mind Saudável, estamos comprometidos em fornecer recursos valiosos e apoio para promover o bem-estar mental e emocional. Navegue pelas nossas diversas seções para encontrar informações úteis, ferramentas interativas e produtos que podem ajudá-lo a cuidar da sua saúde mental.<br><br>
            Notícias: Fique atualizado com as últimas novidades e desenvolvimentos no campo da saúde mental. De artigos sobre técnicas de relaxamento a notícias sobre avanços na terapia, estamos aqui para mantê-lo informado.<br><br>
            Artigos: Explore uma variedade de artigos escritos por profissionais qualificados, abordando uma ampla gama de tópicos relacionados à saúde mental. Desde estratégias de enfrentamento até dicas para melhorar a autoestima, nossos artigos são projetados para educar, inspirar e capacitar.<br><br>
            Jogos: Descubra uma coleção de jogos e atividades projetados para promover a saúde mental de uma maneira divertida e interativa. De exercícios de mindfulness a quebra-cabeças cognitivos, nossos jogos são uma ótima maneira de relaxar e fortalecer sua mente.<br><br>
            Produtos: Explore nossa seleção cuidadosamente selecionada de produtos destinados a apoiar sua jornada de saúde mental. De livros inspiradores a ferramentas de autoajuda, estamos aqui para fornecer os recursos que você precisa para cultivar um Mind Saudável.
            Comece sua jornada para uma mente mais saudável hoje mesmo no Mind Saudável. Estamos aqui para ajudar você a se sentir bem por dentro e por fora.
            </p>
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