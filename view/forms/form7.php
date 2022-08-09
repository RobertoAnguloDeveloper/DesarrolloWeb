<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personal.css">

    <title>Formulario 7</title>
</head>

<body>
    <div class="formulario">
        <form method="post">
            <fieldset>
                <legend><b>Formulario 7</b></legend>
                <label for="comentarios"><b>COMENTARIOS</b></label>
                <br>
                <textarea name="comentarios" id="comentarios" cols="40" rows="5" placeholder="Escriba aquí sus comentarios"></textarea>
                <br>
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