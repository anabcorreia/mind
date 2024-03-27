<?php
session_start();
include 'verfica_login.php';
   
require_once '../db/db.php';
require_once 'App/Controller/controller.php';

$artigosController = new artigosController($pdo);

//criar artigo
if (isset($_POST['titulo']) && 
    isset($_POST['conteudo']) &&
    isset($_POST['autor'])) 
{
    $artigosController->criarartigo($_POST['titulo'], $_POST['conteudo'], $_POST['autor']);
    header('Location: #');
}

// Atualiza artigo
if (isset($_POST['id']) && isset($_POST['atualizar_titulo']) && isset($_POST['atualizar_conteudo']) && isset($_POST['atualizar_autor'])) {
    $artigosController->atualizarartigo($_POST['id'], $_POST['atualizar_titulo'], $_POST['atualizar_conteudo'], $_POST['atualizar_autor']);
}

// Excluir artigo
if (isset($_POST['excluir_id'])) {
    $artigosController->excluirartigo($_POST['excluir_id']);
}

$artigos = $artigosController->listarArtigos();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/style2.css">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <title>Artigos</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
        <h1>Artigos</h1>
    </header>
    <form method="post">
        <input type="text" name="titulo" placeholder="Titulo" required>
        <input type="text" name="conteudo" placeholder="conteudo" required>
        <input type="text" name="autor" placeholder="autor" required>
        <button type="submit">Adicionar Artigo</button>
    </form>

    <?php
        $artigosController->exibirListaArtigos();
    ?>

<fieldset>
    <h2>Atualizar Artigo</h2>
    <form method="post">
        <select name="id">
            <?php foreach ($artigos as $artigo): ?>
                <option value="<?php echo $artigo['id']; ?>"><?php echo $artigo['id']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="atualizar_titulo" placeholder="Atualizar titulo" required>
        <input type="text" name="atualizar_conteudo" placeholder="Atualizar conteudo" required>
        <input type="text" name="atualizar_autor" placeholder="Atualizar autor" required>
        <button type="submit">Atualizar Artigo</button>
    </form>
    </fieldset>
    <h2>Excluir Artigo</h2>
    <form method="post">
        <select name="excluir_id">
            <?php foreach ($artigos as $artigo): ?>
                <option value="<?php echo $artigo['id']; ?>"><?php echo $artigo['id']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Artigo</button>
    </form>
</body>
</html>