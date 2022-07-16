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
    <?php
    switch ($_REQUEST) {
        case isset($_REQUEST['sesion']):
            echo "<script>console.log('indexU->sesion')</script>";
            header("Location: login.php");
            break;
        case isset($_REQUEST['buscar']):
            if (isset($_SESSION['respuesta']) && $_SESSION['respuesta'] == true) {
                if ($_SESSION['cedula'] == '123456789') {
                    $_SESSION['logStatus'] = true;
                    $_SESSION['admin'] = '1';
                    echo "<script>alert('BIENVENIDO " . $_SESSION['nombre'] . "')</script>";
                    echo "<script>window.top.location.reload();</script>";
                } else {
                    $_SESSION['logStatus'] = true;
                    echo "<script>alert('BIENVENID@ " . $_SESSION['nombre'] . "')</script>";
                    /*Recarga la pagina principal, el index.php de la raiz del proyecto */
                    echo "<script>window.top.location.reload();</script>";
                }
            } else {
                echo "<script>alert('CREDENCIALES INVALIDAS, revise su usuario y contraseña')</script>";
                session_destroy();
                echo "<script>window.location.href='login.php';</script>";
            }
            break;
        case isset($_REQUEST['registrar']):
            header("Location: agregar.php");
            break;
        case isset($_REQUEST['respuesta']):
            if ($_REQUEST['respuesta'] == '1') {
                echo "<script>alert('GRACIAS POR TU REGISTRO " . $_SESSION['nombre'] . "')</script>";
            } else {
                echo "<script>alert('LO SENTIMOS, NO PUDIMOS REALIZAR TU REGISTRO')</script>";
            }
            break;
        case isset($_REQUEST['datosCuenta']):
            header("Location: editar.php");
            break;
        default:
            echo "NO HIZO NADA";
            break;
    }
    if (isset($_REQUEST['editar'])){
        $_SESSION['nombre'] = $_REQUEST['nombre'];
        $_SESSION['clave'] = $_REQUEST['clave'];
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['telefono'] = $_REQUEST['telefono'];
        
        header("Location: ../../controller/ControladorUsuario.php?guardar");
    }
    ?>
</body>

</html>