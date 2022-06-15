<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/assets/personal.css">
    <script src="../view/assets/personal.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="formulario">
        <fieldset>
            <legend><b>Creación de usuario</b></legend>
            <form action="UsuariosDao.php" method="post">
                <table>
                    <tr>
                        <td>
                            Nombre de usuario:
                        </td>
                        <td>
                            <input type="text" name="usuario">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contraseña:
                        </td>
                        <td>
                            <input type="password" name="contraseña">
                        </td>
                    </tr>
                </table>
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
        </fieldset>
    </div>
</body>

</html>