<!DOCTYPE html>
<html>
<head>
    <title>Lista de Perguntas</title>
</head>
<body>
    <fieldset>
        <h1>Lista de Perguntas</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pergunta</th>
                        <th>Resposta</th>
                    </tr>
                </thead>
                <?php foreach ($perguntas as $pergunta): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $pergunta['id']; ?></td>
                            <td><?php echo $pergunta['pergunta']; ?></td>
                            <td><?php echo $pergunta['resposta']; ?></td>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>