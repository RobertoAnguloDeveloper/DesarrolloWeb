<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personal.css">
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
                            <label for="genero">Genero</label>
                        </td>
                        <td>
                           <input type="radio" name="genero" id="genero" value="Masculino" checked> Masculino
                           <br>
                           <input type="radio" name="genero" id="genero" value="Femenino"> Femenino
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="hobbie1">Hobbies</label>
                        </td>
                        <td>
                            <input type="checkbox" name="hobbie_1" id="hobbie1" value="Leer"> Leer
                            <input type="checkbox" name="hobbie_2" id="hobbie2" value="Cine"> Cine
                            <input type="checkbox" name="hobbie_3" id="hobbie3" value="TV"> TV
                            <input type="checkbox" name="hobbie_4" id="hobbie4" value="Jugar"> Jugar
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