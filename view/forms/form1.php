<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/assets/personal.css">
    <script src="../../view/assets/personal.js"></script>
    <title>Formulario 1</title>
</head>

<body>
    <div class="formulario">
        <form method="post" onsubmit="validarEdad();">
            <fieldset>
                <legend><b>Formulario 1</b></legend>
                <label for="texto1">Nombres&nbsp;</label>
                <input type="text" name="nombres" id="texto1" placeholder="Ingrese sus nombres">
                <br>
                <label for="texto2">Apellidos</label>
                <input type="text" name="apellidos" id="texto2" placeholder="Ingrese sus apellidos">
                <br>
                <label for="texto3">Edad</label>
                <input style="margin-left: 30px;" type="number" name="edad" id="texto3" min="18" max="130" placeholder="Ingrese su edad">
                <br>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
    <br>

    <!-- La tabla solo se muestra y crea cuando recive los datos del formulario -->
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