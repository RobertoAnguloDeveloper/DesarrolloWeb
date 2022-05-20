<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="../assets/personal.css">

    <title>&lt;DESARROLLO WEB&gt;</title>
    
</head>

<body>
    <header class="header">
        <h1>&lt; DESARROLLO WEB &gt;</h1>
    </header>

    <ul class="menu-barra">
        <li>
            <a onmouseover="display();"href="#" >Actividad de aprendizaje 1</a>

            <!-- Lista despleglable -->
            <ul id="popup">
                <li><a href="#">Formulario 1</a></li>
                <li><a href="#">Formulario 1</a></li>
                <li><a href="#">Formulario 1</a></li>
            </ul>
        </li>

        <li><a href="#">Actividad de aprendizaje 2</a></li>
        <li><a href="#">Actividad de aprendizaje 3</a></li>
        <li><a href="#">Actividad de aprendizaje 4</a></li>
        <li><a href="#">Información del estudiante</a></li>
    </ul>

    <center><iframe src="../test.html" frameborder="1"></iframe></center>
    
        <form class="formulario" method="post">
            <fieldset>
                <legend><b>Formulario 1</b></legend>
                <label for="">Ingrese los datos solicitados</label>
                <br>    
                <input type="text" name="nombres" id="texto1" placeholder="Ingrese sus nombres">
                <br>
                <input type="text" name="apellidos" id="texto2" placeholder="Ingrese sus apellidos">
                <br>
                <input type="number" name="edad" id="texto3" placeholder="Ingrese su edad">
                <br><br>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>

    <br>
    <table class="tabla">
        <?php
            while (key($_POST) != null) {
                echo "<th><b>" . strtoupper(key($_POST)) . "</b></th>";
                next($_POST);
            }

            //Rebobina el puntero al principio del array
            reset($_POST);

            echo "<tr>";

            while (key($_POST) != null) {
                echo "<td>" . current($_POST) . "</td>";
                next($_POST);
            }

            echo "</tr>";
        ?>
    </table>
    <br>
    <br>
</body>

</html>

<script>
    function cerrar() {
        document.getElementsByClassName("ventana-modal")[0].style.display = "none";
    }

    function display() {
        var popup = document.getElementById("popup");
        var display = popup.style.display;
        if (display == "none") {
            popup.style.display = "block";
        } else {
            popup.style.display = "none";
        }


    }

    function noDisplay() {
        var popup = document.getElementById("popup");
            popup.style.display = "none";
    }

</script>

<!-- <?php
        $datos = json_encode($_POST);
        var_dump($_POST);

        $path = "./DATA/";

        if (!is_dir($path)) {
            mkdir($path, 0777, true);
            file_put_contents($path . 'form1.json', $datos);
        } else {
            file_put_contents($path . 'form1.json', $datos);
        }
    ?> -->
