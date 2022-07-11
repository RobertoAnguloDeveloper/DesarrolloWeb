<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personal.css">
    <script src="../js/personal.js"></script>
</head>

<body>
    <form method="post" id="sign-in" class="contenedorSignin">
        <a id="btn-x" onclick="fadeOutEffect('sign-in',0.5);">x</a>
        <table>
            <tr>
                <br>
            </tr>
            <tr>
                <h2 id="regUsuario">
                    <center>REGISTRAR USUARIO</center>
                </h2>
                <input type="number" name="cedula" placeholder="Introduzca su Cédula">
                <input type="password" name="clave" placeholder="Introduzca su Contraseña">
                <input type="email" name="email" placeholder="Introduzca su email">
                <input type="text" name="nombre" placeholder="Introduzca su nombre completo">
                <input type="number" name="telefono" placeholder="Introduzca su telefono">
                <tr>
                    <td>
                        <input type="submit" name="agregar" value="Guardar">
                    </td>
                </tr>
            </tr>
        </table>
    </form>
    <?php
        if(count($_REQUEST)!=0){
            session_start();
            $_SESSION['cedula'] = $_REQUEST['cedula'];
            $_SESSION['clave'] = $_REQUEST['clave'];
            $_SESSION['email'] = $_REQUEST['email'];
            $_SESSION['nombre'] = $_REQUEST['nombre'];
            $_SESSION['telefono'] = $_REQUEST['telefono'];

            header("Location: ../../controller/ControladorUsuario.php?".array_keys($_REQUEST)[5]);
        }
    ?>
</body>

</html>