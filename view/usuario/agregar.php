<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" id="sign-in" class="contenedorLogin">
        <a id="btn-x" onclick="fadeOutEffect('sign-in',0.5);">x</a>
        <table>
            <tr>
                <br>
                <h2 id="sesion">
                    <center>REGISTRAR USUARIO</center>
                </h2>
                <br>
            </tr>
            <tr>
                <center>
                    <input type="number" name="cedula" placeholder="Introduzca su Cédula">
                    <input type="password" name="clave" placeholder="Introduzca su Contraseña">
                    <input type="email" name="email" placeholder="Introduzca su email">
                    <input type="text" name="nombre" placeholder="Introduzca su nombre completo">
                    <input type="number" name="telefono" placeholder="Introduzca su telefono">
                </center>
            </tr>
            <tr>
                <td>
                    <center>
                        <input type="submit" value="Guardar">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>