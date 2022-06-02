<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/assets/personal.css">
    <script src="../../view/assets/personal.js"></script>

    <title>Formulario 4</title>
</head>
<body>
    <div class="formulario">
        <form method="post">
            <fieldset>
                <legend><b>Formulario 4</b></legend>
                <label for="">Ingrese los datos solicitados</label>
                <br>    
                <input type="color" oninput="muestraValorColor();" name="color de piel" id="piel">
                <span id="valorPiel"></span>
                <br>
                <input type="file" name="adjunto" id="archivo">
                <br>
                <input type="range" onclick="muestraValor();" name="estatura" min="100" max="300" id="estatura">
                <!-- Mostrar el valor del range a un lado -->
                <span id="valor"></span>&nbsp;m
                <br>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">
            </fieldset>
        </form>
    </div>
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