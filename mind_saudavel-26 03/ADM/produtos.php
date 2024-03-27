<?php
session_start();
include 'verfica_login.php';
   
require_once '../db/db.php';
require_once 'App/Controller/controller.php';

$produtosController = new ProdutosController($pdo);

if (isset($_POST['nome']) && 
    isset($_POST['descricao']) &&    
    isset($_POST['preco']) &&
    isset($_POST['tipo'])) 
{
    $produtosController->criarproduto($_POST['nome'], $_POST['descricao'], $_POST['preco'], $_POST['tipo']);
    header('Location: #');
}

// Atualiza produto
if (isset($_POST['id']) && isset($_POST['atualizar_nome']) && isset($_POST['atualizar_descricao']) && isset($_POST['atualizar_preco']) && isset($_POST['atualizar_tipo'])) {
    $produtosController->atualizarproduto($_POST['id'], $_POST['atualizar_nome'], $_POST['atualizar_descricao'], $_POST['atualizar_preco'], $_POST['atualizar_tipo']);
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

<fieldset>
    <h2>Atualizar Produto</h2>
    <form method="post">
        <select name="id">
            <?php foreach ($produtos as $produto): ?>
                <option value="<?php echo $produto['id']; ?>"><?php echo $produto['id']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="atualizar_nome" placeholder="Novo Nome do Produto" required>
        <input type="text" name="atualizar_descricao" placeholder="Nova Descricao do Produto" required>
        <input type="text" name="atualizar_preco" placeholder="Novo Preco" required>
        <input type="text" name="atualizar_tipo" placeholder="Novo Tipo de Produto" required>
        <button type="submit">Atualizar Produto</button>
    </form>
    </fieldset>
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