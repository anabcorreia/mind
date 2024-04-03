<?php
session_start();
include 'verfica_login.php';
   
require_once '../db/db.php';
require_once 'App/Controller/controller.php';

$produtosController = new ProdutosController($pdo);

if (isset($_POST['nome']) && 
    isset($_POST['descricao']) &&    
    isset($_POST['preco']) &&
    isset($_POST['tipo']) &&
    isset($_FILES['imagem'])) 
{
    $artigosController->criarArtigo($_POST['titulo'], $_POST['conteudo'], $_POST['autor'], $imagem);
    header('Location: #');
}


// Excluir produto
if (isset($_POST['excluir_id'])) {
    $produtosController->excluirproduto($_POST['excluir_id']);
}

$produtos = $produtosController->listarProdutos();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/style2.css">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <title>Produtos</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
        <h1>Produtos</h1>
    </header>
    <form method="post">
        <input type="text" name="nome" placeholder="Nome do Produto" required>
        <input type="text" name="descricao" placeholder="Descricao do Produto" required>
        <input type="text" name="preco" placeholder="Preco" required>
        <input type="text" name="tipo" placeholder="Tipo do produto">
        <button type="submit">Adicionar Produto</button>
    </form>

    <?php
        $produtosController->exibirListaProdutos();
    ?>

    <h2>Excluir Produto</h2>
    <form method="post">
        <select name="excluir_id">
            <?php foreach ($produtos as $produto): ?>
                <option value="<?php echo $produto['id']; ?>"><?php echo $produto['nome']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Produto</button>
    </form>
</body>
</html>