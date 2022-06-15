<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="./assets/personal.css">
    <script src="./assets/personal.js"></script>

    <title>&lt;DESARROLLO WEB&gt;</title>

</head>

<body>
    <header class="header">
        <h1>&lt; DESARROLLO WEB &gt;</h1>
    </header>
    <img id="background" src="./assets/img/udcPiedra.jpg" alt="UdC">
    <ul class="menu-barra">
        <li>
            <a onmouseover="showPopup();" onmouseout="hidePopup();" href="#">Actividad de aprendizaje 1</a>

            <ul id="popup" onmouseover="showPopup();" onmouseout="hidePopup();">
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
                <li><a id="pruebaDao" onclick="prueba();" href="#">Prueba DAO</a></li>
            </ul>
        </li>

        <li><a href="#">Actividad de aprendizaje 2</a></li>
        <li><a href="#">Actividad de aprendizaje 3</a></li>
        <li><a href="#">Actividad de aprendizaje 4</a></li>
        <li id="basesDatos2"><a href="#">BASES DE DATOS II</a></li>
    </ul>

    <div class="contenedor" id="log-in">
        <a id="btn-x" onclick="fadeOutEffect();">x</a>
        <div class="cuadro">
            <form method="POST">
                <h1>Iniciar Sesión</h1>
                <input type="text" name="user" placeholder="Usuario">
                <input type="password" name="password" placeholder="Contraseña">
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
    </div>
    <center><iframe id="formsFrame" style="display: none;" src="" frameborder="1"></iframe></center>

</body>

</html>