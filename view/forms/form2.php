<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personal.css">
    <title>Formulario 2</title>
</head>
<body>
    <div class="formulario">
        <form method="post">
            <fieldset>
                <legend><b>Formulario 2</b></legend>
                <table>
                    <tr>
                        <td>
                            <label for="codigo">Código</label>
                        </td>
                        <td>
                           <input type="number" name="codigo" id="codigo" placeholder="Ingrese el código">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Contraseña&nbsp;</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" placeholder="Ingrese su correo electrónico">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="celular">Celular</label>
                        </td>
                        <td>
                        <input type="tel" name="celular" id="celular" placeholder="Ingrese su teléfono celular">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="busqueda">Búsqueda</label>
                        </td>
                        <td>
                        <input type="search" name="busqueda" id="busqueda" placeholder="Ingrese su busqueda">
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