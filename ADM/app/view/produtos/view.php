<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <fieldset>
        <h1>Lista de Produtos</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>Preco</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <?php foreach ($produtos as $produto): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $produto['id']; ?></td>
                            <td><?php echo $produto['nome']; ?></td>
                            <td><?php echo $produto['descricao']; ?></td>
                            <td><?php echo $produto['preco']; ?></td>
                            <td><?php echo $produto['tipo']; ?></td>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>