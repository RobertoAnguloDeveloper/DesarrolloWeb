<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/assets/personal.css">
    <title>Formulario 3</title>
</head>
<body>
    <div class="formulario">
        <form method="post">
            <fieldset>
                <legend><b>Formulario 3</b></legend>
                <table>
                    <tr>
                        <td>
                            <label for="texto1">Fecha</label>
                        </td>
                        <td>
                            <input type="date" name="fecha" id="fecha">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="texto1">Fecha</label>
                        </td>
                        <td>
                            <input type="datetime" name="fecha y hora" id="fechaCompleta">
                        </td>
                    </tr>
                </table>
                
                <br>
                <input type="datetime" name="fecha y hora" id="fechaCompleta">
                <script>
                    var date = new Date();
                    //Translate Datetime in Spanish
                    var options = {
                        weekday: "long",
                        year: "numeric",
                        month: "long",
                        day: "numeric"
                    };
                    document.getElementById("fechaCompleta").value = date.toLocaleDateString("es-ES", options);
                </script>
                
                <br>
                <input type="month" name="mes" id="mes">
                <br>
                <input type="time" name="hora" id="hora">
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