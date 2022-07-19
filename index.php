<?php
session_start();
require_once 'view/usuario/logeo.php';
$rootPath = $_SERVER['DOCUMENT_ROOT'].'/desarrolloweb/';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/personal.css">
    <script src="./view/js/personal.js"></script>

    <title>&lt;DESARROLLO WEB&gt;</title>
</head>

<body>
    <header id="header">
        <h1>&lt; DESARROLLO WEB &gt;</h1>
    </header>
    <img id="background" src="./view/img/udcPiedra.jpg" alt="UdC">
    <ul id="barra" class="menu-barra">
        <a class="barra-elementos" href="index.php"><img id="home-icon" class="barra-elementos" src="./view/img/home.png"></a>
        <a href="#" class="barra-elementos" id="userMenu" name="userMenu" onclick="clicks('userMenu');"><img id="login-icon" src="./view/img/login.png"></a>
        <a href="#" class="barra-elementos" id="sesion" name="usuarios" onclick="userController();">INICIAR SESION</a>
        <a href="#" class="barra-elementos" id="gastos" name="gastos" onclick="gastoController();">GASTOS</a>
    </ul>
    
    <ul id="logData" class="popup">
        <li>BIENVENID@ <p id="nombreUsuario"><?= $_SESSION['nombre'] ?></p></li>
        <hr>
        <li><a href="#" name="datosCuenta" onclick="userController();">Datos de la cuenta</a></li>
        <hr>
        <li><a href="#" id="adminCuentas" name="adminCuentas" onclick="userController();">Admin cuentas</a></li>
        <hr>
        <li><a href="#" id="cerrarSesion" name="cerrarSesion" onclick="userController();">Cerrar sesión</a></li>
        <hr>
    </ul>

    <center><iframe id="formsFrame" style="display: none;" src="" frameborder="1"></iframe></center>

    <footer id="footer">
        <h1>&lt; DESARROLLO WEB &gt;</h1>
    </footer>
</body>

</html>

<script>
    var iframe = document.getElementById("formsFrame");
    window.onload = function() {
        showIframe();
        iframe.style.opacity = 0.1;
        iframe.src = "./view/datosEstudiante.php";
        fadeInEffect("formsFrame", 0.5);
    }
    
</script>

<?php
    status();
?>