<?php
    session_start();
?>

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
    <form method="post" id="log-in" class="contenedorLogin">
        <a id="btn-x" onclick="fadeOutEffect('log-in',0.5);">x</a>
        <table>
            <tr>
                <br>
                <h2 id="iniSesion">INICIAR SESION</h2>
                <br>
            </tr>
            <tr>
                <center>
                    <input type="text" name="cedula" placeholder="Introduzca su Cédula">
                    <input type="password" name="clave" placeholder="Introduzca su Contraseña">
                </center>
            </tr>
            <tr>
                <td>
                    <center>
                        <input type="submit" name="sesion" value="Iniciar sesión">
                        <input type="submit" name="registrar" value="Registrarse">
                        <br>
                        <a id="recoveryPass" href="recoverypass.php">Olvidaste tu contraseña?</a>
                    </center>
                </td>
            </tr>
        </table>
    </form>

    <?php
    
        if(count($_REQUEST) != 0){
            switch($_REQUEST){
                case isset($_REQUEST['sesion']):
                    $_SESSION['cedula'] = $_REQUEST['cedula'];
                    $_SESSION['clave'] = $_REQUEST['clave'];
                    header("Location: ../../controller/ControladorUsuario.php?sesion=active");
                    break;
                case isset($_REQUEST['registrar']):
                    header("Location: ../../controller/ControladorUsuario.php?registrar=active");
                    break;
                // case isset($_REQUEST['buscar']):
                //     var_dump($_SESSION);
                //     /*Verify if $_SESSION is empty */

                //     if(count($_SESSION) != 0){
                //         echo "<script>alert('BIENVENIDO ". $_SESSION['nombre']."')</script>";
                //     }else{
                //         echo "<script>alert('CREDENCIALES INVALIDAS, revise su usuario y contraseña')</script>";
                //     }
                //     break;
                // case isset($_REQUEST['registrar']):
                //     header("Location: agregar.php");
                //     break;
                default:
                    echo "NO HIZO NADA";
                    break;
            }
        }
    ?>
</body>

</html>
<script>
    window.onload = function() {
        fadeInEffect('log-in', 0.5);
    }
</script>