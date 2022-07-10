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
    <form method="POST" id="log-in" class="contenedorLogin">
        <a id="btn-x" onclick="fadeOutEffect('log-in',0.5);">x</a>
        <table>
            <tr>
                <br>
                <h2 id="sesion"><center>INICIAR SESION</center></h2>
                <br>
            </tr>
            <tr>
                <center>
                    <input type="text" name="user" placeholder="Introduzca su Cédula">
                    <input type="password" name="clave" placeholder="Introduzca su Contraseña">
                </center>
            </tr>
            <tr>
                <td>
                    <center>
                        <br>
                        <input type="submit" name="buscar" value="Iniciar sesión">
                        <input type="button" name="agregar" value="Registrarse"></a>
                    </center>
                </td>
            </tr>
        </table>
    </form>

    

    <?php
        if(count($_REQUEST)!=0){
            header("Location: ../../view/usuario/index.php");
        }
    ?>
</body>

</html>
<script>
    window.onload = function() {
        fadeInEffect('log-in', 0.5);
    }
</script>