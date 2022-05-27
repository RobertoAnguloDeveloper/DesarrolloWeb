<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/assets/personal.css">
    <title>Formulario 1</title>
</head>
<body>
    <div class="formulario">
        <form method="post">
            <fieldset>
                <legend><b>Formulario 1</b></legend>
                <label for="">Ingrese los datos solicitados</label>
                <br>    
                <input type="text" name="nombres" id="texto1" placeholder="Ingrese sus nombres">
                <br>
                <input type="text" name="apellidos" id="texto2" placeholder="Ingrese sus apellidos">
                <br>
                <input type="number" name="edad" id="texto3" placeholder="Ingrese su edad">
                <br>
                <input type="submit" value="Enviar">
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