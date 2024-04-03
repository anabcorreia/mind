<?php
session_start();
include 'verfica_login.php';
   
require_once '../db/db.php';
require_once 'App/Controller/controller.php';

$noticiaController = new noticiaController($pdo);

if (isset($_FILES['imagem']) && !empty($_FILES['imagem'])) {
    $imagem = "../uploads/" . $_FILES['imagem']['name'];
    move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
}

//criar Noticia
if (isset($_POST['titulo']) && 
    isset($_POST['conteudo']) &&
    isset($_POST['data']) &&
    isset($_FILES['imagem'])) 
{
    $noticiaController->criarNoticia($_POST['titulo'], $_POST['conteudo'], $_POST['data'], $imagem);
    header('Location: #');
}

// Excluir Noticia
if (isset($_POST['excluir_id'])) {
    $noticiaController->excluirnoticia($_POST['excluir_id']);
}

$noticias = $noticiaController->listarNoticias();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/style2.css">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <title>Noticias</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
        <h1>Noticias</h1>
    </header>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="titulo" placeholder="Titulo" required>
        <input type="text" name="conteudo" placeholder="conteudo" required>
        <input type="date" name="data" placeholder="data" required>
        <input type="file" name="imagem" accept="image/*" required>
        <button type="submit">Adicionar Noticia</button>
    </form>

    <?php
        $noticiaController->exibirListaNoticia();
    ?>

    <h2>Excluir Noticia</h2>
    <form method="post">
        <select name="excluir_id">
            <?php foreach ($noticias as $noticia): ?>
                <option value="<?php echo $noticia['id']; ?>"><?php echo $noticia['id']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Noticia</button>
    </form>
</body>
</html>