<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/assets/personal.css">
    <script src="../../view/assets/personal.js"></script>

    <title>Formulario 5</title>
</head>

<body>
    <div class="formulario">
        <form method="post">
            <fieldset>
                <legend><b>Formulario 5</b></legend>
                <label for="spinner1">Estado civil</label>
                <br>
                <select name="estado_civil" size="1" id="spinner1">
                    <option value=""></option>
                    <option value="Casado">Casado</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Unión Libre">Unión libre</option>
                </select>
                <br><br>
                <label for="spinner2">Idiomas manejados</label>
                <br>
                <select name="idiomas" size="3" id="spinner2" multiple>
                    <option value=""></option>
                    <option value="Esp">Español</option>
                    <option value="Eng">Inglés</option>
                    <option value="Ita">Italiano</option>
                    <option value="Fr">Francés</option>
                    <option value="Ale">Alemán</option>
                    <option value="Chi">Chino</option>
                    <option value="Rus">Ruso</option>
                </select>
                <br><br>
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