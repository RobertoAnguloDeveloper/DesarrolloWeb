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
    <header class="header">
        <h1>&lt; DESARROLLO WEB &gt;</h1>
    </header>
    <img id="background" src="./view/img/udcPiedra.jpg" alt="UdC">
    <ul class="menu-barra">
            <a href="index.php"><img id="home-icon" src="./view/img/home.png"></a>
            <a href="#" onclick="controller();"><img id="login-icon" src="./view/img/login.png"></a>
            <li><a href="#" name="usuarios" onclick="controller();">INICIAR SESION</a></li>
            <li><a href="#" name="gastos" onclick="controller();">GASTOS</a></li>
        <!-- <li>
            <a onmouseover="showPopupAAU1();" onmouseout="hidePopupAAU1();" href="#">Actividad de aprendizaje 1</a>
            <ul id="AAU1" class="popup" onmouseover="showPopupAAU1();" onmouseout="hidePopupAAU1();">
                <li><a id="form1" onclick="form();" href="#">Formulario 1</a></li>
                <br>
                <li><a id="form2" onclick="form();" href="#">Formulario 2</a></li>
                <br>
                <li><a id="form3" onclick="form();" href="#">Formulario 3</a></li>
                <br>
                <li><a id="form4" onclick="form();" href="#">Formulario 4</a></li>
                <br>
                <li><a id="form5" onclick="form();" href="#">Formulario 5</a></li>
                <br>
                <li><a id="form6" onclick="form();" href="#">Formulario 6</a></li>
                <br>
                <li><a id="form7" onclick="form();" href="#">Formulario 7</a></li>
                <br>
                <li><a id="pruebaDao" onclick="prueba();" href="#">Prueba DAO</a></li>
            </ul>
        </li> -->

        <!-- <li><a onmouseover="showPopupAAU2();" onmouseout="hidePopupAAU2();" href="#">Actividad de aprendizaje 2</a>
            <ul id="AAU2" class="popup" onmouseover="showPopupAAU2();" onmouseout="hidePopupAAU2();">
                <li><a id="form1" onclick="form();" href="#">Formulario 1</a></li>
                <br>
                <li><a id="form2" onclick="form();" href="#">Formulario 2</a></li>
                <br>
                <li><a id="form3" onclick="form();" href="#">Formulario 3</a></li>
                <br>
                <li><a id="form4" onclick="form();" href="#">Formulario 4</a></li>
                <br>
                <li><a id="form5" onclick="form();" href="#">Formulario 5</a></li>
                <br>
            </ul>
        </li> -->
        <!-- <li><a href="#">Actividad de aprendizaje 3</a></li>
        <li><a href="#">Actividad de aprendizaje 4</a></li>
        <li id="basesDatos2"><a href="#">BASES DE DATOS II</a></li> -->
    </ul>

    
    <center><iframe id="formsFrame" style="display: none;" src="" frameborder="1"></iframe></center>

</body>
</html>

<script>
    window.onload = function() {
        showIframe();
        var iframe = document.getElementById("formsFrame");
        iframe.style.opacity = 0.1;
        iframe.src = "./view/datosEstudiante.php";
        fadeInEffect("formsFrame",0.5);
    }
</script>