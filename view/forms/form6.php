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
                <select multiple name="idiomas[]" size="3" id="spinner2" multiple>
                    <option value=""></option>
                    <option value="Español">Español</option>
                    <option value="Inglés">Inglés</option>
                    <option value="Italiano">Italiano</option>
                    <option value="Francés">Francés</option>
                    <option value="Alemán">Alemán</option>
                    <option value="Chino">Chino</option>
                    <option value="Ruso">Ruso</option>
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

                if(is_array(current($_POST))){
                    echo "<td>";

                    foreach(current($_POST) as $idiomas){
                        echo $idiomas . "<br>";
                    }

                    echo "</td>";

                    next($_POST);
                }
            }

            echo "</tr>";
        ?>
    </table>
    <br>
    <br>
</body>
</html>