<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/assets/personal.css">
    <title>Formulario 2</title>
</head>
<body>
    <div class="formulario">
        <form method="post">
            <fieldset>
                <legend><b>Formulario 2</b></legend>
                <label for="">Ingrese los datos solicitados</label>
                <br>    
                <input type="number" name="codigo" id="codigo" placeholder="Ingrese el código">
                <br>
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                <br>
                <input type="email" name="email" id="email" placeholder="Ingrese su correo electrónico">
                <br>
                <input type="tel" name="celular" id="celular" placeholder="Ingrese su teléfono celular">
                <br>
                <input type="search" name="busqueda" id="busqueda" placeholder="Ingrese su busqueda">
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