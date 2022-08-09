<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personal.css">
    <title>Formulario 4</title>
</head>

<body>
    <div class="formulario">
        <form method="post">
            <fieldset>
                <legend><b>Formulario 4</b></legend>
                <table>
                    <tr>
                        <td>
                            <label for="fecha">Fecha</label>
                        </td>
                        <td>
                            <input type="date" name="fecha" id="fecha">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fechaCompleta">Fecha</label>
                        </td>
                        <td>
                            <input type="datetime" name="fecha y hora" id="fechaCompleta">
                            <script>
                                var date = new Date();
                                var options = {
                                    weekday: "long",
                                    year: "numeric",
                                    month: "long",
                                    day: "numeric"
                                };
                                //Traduce al español la fecha
                                document.getElementById("fechaCompleta").value = date.toLocaleDateString("es-ES", options);
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mes">Fecha</label>
                        </td>
                        <td>
                            <input type="month" name="mes" id="mes">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mes">Hora</label>
                        </td>
                        <td>
                            <input type="time" name="hora" id="hora">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">
            </fieldset>
        </form>
    </div>
    <br>
    <table class="tabla">
        <?php
            require_once 'tablas.php';
            tablaComun();
        ?>
    </table>
    <br>
    <br>
</body>

</html>