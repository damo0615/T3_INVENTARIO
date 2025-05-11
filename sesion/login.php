<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="login">
    <h2>Iniciar Sesion</h2>
        <form method="POST">
            <label for="">Usuario</label><br>
            <input type="text" name="user"><br>
            <label for="">Conraseña</label><br>
            <input type="password" name="clave"><br><br>
            <input type="submit" name="send">
        </form>
        <p><a href="recuperar.php?recuperar=0">¿Olvido su contraseña?</a></p>
    </div>
</body>
</html>