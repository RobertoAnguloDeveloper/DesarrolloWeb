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
                            <input type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="text" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-justify: auto;">
                            <b>Pregunta secreta</b>
                            <br>
                            Cual es tu país favorito?
                        </td>
                        <td>
                            <input type="text" name="respuesta">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Enviar">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</body>

</html>