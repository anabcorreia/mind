<!DOCTYPE html>
<html>
<head>
    <title>Lista de Users</title>
</head>
<body>
    <fieldset>
        <h1>Lista de Users</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Completo</th>
                        <th>Nome de Usuario</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Níveis de Permissão</th>
                    </tr>
                </thead>
                <?php foreach ($users as $user): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['nome']; ?></td>
                            <td><?php echo $user['nome_u']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['senha']; ?></td>
                            <td><?php echo $user['tipo']; ?></td>
                        </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
            <a href="historico.php">Historico</a>
    </fieldset>
</body>
</html>