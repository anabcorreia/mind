<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover Password</title>
</head>
<body>
    <h2>Recover Password</h2>
    <form action="send_recovery_email.php" method="post">
        <label for="email">Digite seu Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Recover Password">
    </form>
</body>
</html>