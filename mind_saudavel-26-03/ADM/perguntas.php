<?php
session_start();
include 'verfica_login.php';
   
require_once '../db/db.php';
require_once 'App/Controller/controller.php';

$perguntasController = new perguntasController($pdo);

//criar pergunta
if (isset($_POST['pergunta']) && 
    isset($_POST['resposta'])) 
{
    $perguntasController->criarpergunta($_POST['pergunta'], $_POST['resposta']);
    header('Location: #');
}

// Atualiza pergunta
if (isset($_POST['id']) && isset($_POST['atualizar_pergunta']) && isset($_POST['atualizar_resposta'])) {
    $perguntasController->atualizarpergunta($_POST['id'], $_POST['atualizar_pergunta'], $_POST['atualizar_resposta']);
}

// Excluir pergunta
if (isset($_POST['excluir_id'])) {
    $perguntasController->excluirpergunta($_POST['excluir_id']);
}

$perguntas = $perguntasController->listarPerguntas();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/style2.css">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <title>Perguntas</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
        <h1>Perguntas</h1>
    </header>
    <form method="post">
        <input type="text" name="pergunta" placeholder="Pergunta" required>
        <input type="text" name="resposta" placeholder="Resposta" required>
        <button type="submit">Adicionar Pergunta</button>
    </form>

    <?php
        $perguntasController->exibirListaPerguntas();
    ?>

<fieldset>
    <h2>Atualizar Pergunta</h2>
    <form method="post">
        <select name="id">
            <?php foreach ($perguntas as $pergunta): ?>
                <option value="<?php echo $pergunta['id']; ?>"><?php echo $pergunta['id']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="atualizar_pergunta" placeholder="Mudar Pergunta" required>
        <input type="text" name="atualizar_resposta" placeholder="Mudar Resposta" required>
        <button type="submit">Atualizar Pergunta</button>
    </form>
    </fieldset>
    <h2>Excluir Pergunta</h2>
    <form method="post">
        <select name="excluir_id">
            <?php foreach ($perguntas as $pergunta): ?>
                <option value="<?php echo $pergunta['id']; ?>"><?php echo $pergunta['id']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Pergunta</button>
    </form>
</body>
</html>