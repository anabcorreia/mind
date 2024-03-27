<?php
        session_start();
        include 'verfica_login.php';
        require_once '../db/db.php';
    
include_once 'C:\xampp\htdocs\mind_saudavel\SS\app\controller\controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/CSS/cab-rod.css">
    <link rel="stylesheet" href="public/CSS/mind-scrib.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Mind Scrib</title>
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
        </header>
        <section>
            <div class="chat">
                <div class="respostas">
                    <?php
                        // Verifica se uma pergunta foi selecionada
                        if(isset($_POST['pergunta'])) {
                            $perguntaSelecionada = $_POST['pergunta'];    
                        
                            // Consulta ao banco de dados para obter a resposta da pergunta selecionada
                            $stmt = $pdo->prepare("SELECT resposta FROM perguntas WHERE id = ?");
                            $stmt->execute([$perguntaSelecionada]);
                            $resposta = $stmt->fetchColumn();
                        
                            if($resposta) {
                                echo $resposta;
                            } else {
                                echo "Resposta não encontrada.";
                            }
                        } else {
                            echo "Olá, essas são as perguntas presentes no site nesse momento. Faça suas perguntas!";
                        }
                    ?>
                </div>
                <div class="perguntas">
                    <form method="POST">
                        <?php
                            // Consulta ao banco de dados para obter todas as perguntas
                            $stmt = $pdo->query("SELECT id, pergunta FROM perguntas");
                            $perguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            //perguntas
                            foreach ($perguntas as $pergunta) {
                                echo '<button class="button-p" type="submit" name="pergunta" value="' . $pergunta['id'] . '">' . $pergunta['pergunta'] . '</button><br>';
                            }
                        ?>
                    </form>
                </div>
            </div>
        </section>
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
