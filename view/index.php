<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="./assets/personal.css">
    <script src="./assets/personal.js"></script>

    <title>&lt;DESARROLLO WEB&gt;</title>
    
</head>

<body>
    <header class="header">
        <h1>&lt; DESARROLLO WEB &gt;</h1>
    </header>
    <!-- Simple Login Modal Window with JS -->
    
    
    <ul class="menu-barra">
        <li>
            <a onmouseover="showPopup();" onmouseout="hidePopup();" href="#" >Actividad de aprendizaje 1</a>

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
        <li><a href="#">Información del estudiante</a></li>
    </ul>

    <center><iframe id="formsFrame" style="display: none;" src="" frameborder="1"></iframe></center>
    
</body>

</html>