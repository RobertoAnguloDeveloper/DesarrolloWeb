<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="./assets/personal.css">

    <title>&lt;DESARROLLO WEB&gt;</title>
    
</head>

<body>
    <header class="header">
        <h1>&lt; DESARROLLO WEB &gt;</h1>
    </header>

    <ul class="menu-barra">
        <li>
            <a onmouseover="showPopup();" onmouseout="hidePopup();" href="#" >Actividad de aprendizaje 1</a>

            <!-- Lista despleglable -->
            <ul id="popup" onmouseover="showPopup();" onmouseout="hidePopup();">
                <li><a onclick="form1();" href="#">Formulario 1</a></li>
                <br>
                <li><a href="#">Formulario 2</a></li>
                <br>
                <li><a href="#">Formulario 3</a></li>
                <br>
                <li><a href="#">Formulario 4</a></li>
                <br>
                <li><a href="#">Formulario 5</a></li>
                <br>
                <li><a href="#">Formulario 6</a></li>
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

<script>
    function cerrar() {
        document.getElementsByClassName("ventana-modal")[0].style.display = "none";
    }

    function showPopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "block";
        
    }

    function hidePopup() {
        var popup = document.getElementById("popup");
            popup.style.display = "none";
    }

    function showIframe() {
        var iframe = document.getElementById("formsFrame");
        iframe.style.display = "block";
        
    }

    function form1() {
        showIframe();
        var iframe = document.getElementById("formsFrame");
        iframe.src = "../U1/forms/form1.php";
    }

</script>