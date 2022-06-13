<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="UsuariosDao.php" method="post">
        Nombre de usuario: <input type="text" name="usuario">
        <br>
        Contraseña: <input type="password" name="password">
        <br>
        Email: <input type="text" name="email">
        <br><br>
        <label for="respuesta">Pregunta secreta</label>
        <br><br>
        Cual es el nombre de tu país favorito?
        <br>
        <input type="text" name="respuesta">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>