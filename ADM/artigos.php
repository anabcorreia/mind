<?php
session_start();
include 'verfica_login.php';
   
require_once '../db/db.php';
require_once 'App/Controller/controller.php';

$artigosController = new artigosController($pdo);

if (isset($_FILES['imagem']) && !empty($_FILES['imagem'])) {
    $imagem = "../uploads/" . $_FILES['imagem']['name'];
    move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
}
//criar artigo
if (isset($_POST['titulo']) && 
    isset($_POST['conteudo']) &&
    isset($_POST['autor']) &&
    isset($_FILES['imagem'])) 
{
    $artigosController->criarArtigo($_POST['titulo'], $_POST['conteudo'], $_POST['autor'], $imagem);
    header('Location: #');
}

// Excluir artigo
if (isset($_POST['excluir_id'])) {
    $artigosController->excluirArtigo($_POST['excluir_id']);
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
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="titulo" placeholder="Titulo" required>
        <input type="text" name="conteudo" placeholder="conteudo" required>
        <input type="text" name="autor" placeholder="autor" required>
        <input type="file" name="imagem" required>
        <button type="submit">Adicionar Artigo</button>
    </form>

    <?php
        $artigosController->exibirListaArtigos();
    ?>

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