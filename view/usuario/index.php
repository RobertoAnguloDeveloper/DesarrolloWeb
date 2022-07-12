<?php
    session_start();
    require_once 'logeo.php';
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
        switch($_REQUEST){
            case isset($_REQUEST['sesion']):
                header("Location: login.php");
                break;
            case isset($_REQUEST['buscar']):
                if(isset($_SESSION['respuesta'])){
                    echo "<script>alert('BIENVENIDO ". $_SESSION['nombre']."')</script>";
                    echo "<script>window.location.href='../../index.php'</script>";
                }else{
                    echo "<script>alert('CREDENCIALES INVALIDAS, revise su usuario y contraseña')</script>";
                    echo "<script>window.location.href='login.php'</script>";
                }
                break;
            case isset($_REQUEST['registrar']):
                header("Location: agregar.php");
                break;
            case isset($_REQUEST['respuesta']):
                if($_REQUEST['respuesta'] == '1'){
                    $_SESSION['logStatus'] = "1";
                    echo "<script>alert('GRACIAS POR TU REGISTRO ". $_SESSION['nombre']."')</script>";
                }else{
                    echo "<script>alert('LO SENTIMOS, NO PUDIMOS REALIZAR TU REGISTRO')</script>";
                    $_SESSION['logStatus'] = "0";
                }
                break;
            default:
                echo "NO HIZO NADA";
                break;
        }
    ?>
</body>

</html>
