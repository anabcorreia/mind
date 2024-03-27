<!DOCTYPE html>
<html>
<head>
    <title>Lista de Artigos</title>
</head>
<body>
    <fieldset>
        <h1>Lista de Artigos</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Conteudo</th>
                        <th>Autor</th>
                    </tr>
                </thead>
                <?php foreach ($artigos as $artigo): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $artigo['id']; ?></td>
                            <td><?php echo $artigo['titulo']; ?></td>
                            <td><?php echo $artigo['conteudo']; ?></td>
                            <td><?php echo $artigo['autor']; ?></td>
                <?php endforeach; ?>
                <tbody>
            </table>
            <a href="historico.php">Historico</a>
    </fieldset>
</body>
</html>