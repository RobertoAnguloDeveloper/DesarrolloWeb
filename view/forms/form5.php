<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personal.css">
    <script src="../js/personal.js"></script>

    <title>Formulario 5</title>
</head>
<body>
    <div class="formulario">
        <form method="post">
            <fieldset>
                <legend><b>Formulario 5</b></legend>
                <label for="">Escoja un color</label>
                <br>
                <input type="color" oninput="muestraValorColor();" name="color de piel" id="piel">
                <span id="valorPiel"></span>
                <br><br>
                <label for="">Adjunte su documentación en PDF</label>
                <br>
                <input type="file" accept=".pdf" name="adjunto" id="archivo">
                <br><br>
                <label for="">Desplace la barra para colocar su estatura en metros</label>
                <br>
                <input type="range" onclick="muestraValor();" name="estatura(m)" min="100" max="300" id="estatura">
                <!-- Mostrar el valor del rango a un lado -->
                <span id="valor"></span>&nbsp;m
                <br><br>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">
            </fieldset>
        </form>
    </div>
    <br>
    <table class="tabla">
        <?php
           require_once 'tablas.php';
           tablaColores();
        ?>
    </table>
    <br>
    <br>
</body>
</html>