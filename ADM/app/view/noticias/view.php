<!DOCTYPE html>
<html>
<head>
    <title>Lista de Noticias</title>
</head>
<body>
    <fieldset>
        <h1>Lista de Noticias</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Conteudo</th>
                        <th>Data</th>
                        <th>Imagem</th>
                    </tr>
                </thead>
                <?php foreach ($noticias as $noticia): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $noticia['id']; ?></td>
                            <td><?php echo $noticia['titulo']; ?></td>
                            <td><?php echo $noticia['conteudo']; ?></td>
                            <td><?php echo $noticia['data']; ?></td>
                            <td><?php echo $noticia['imagem']; ?></td>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>