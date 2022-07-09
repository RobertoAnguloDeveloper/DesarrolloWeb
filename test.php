
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Formulaio simple -->
    <form method="post">
        USUARIO: <input type="text" name="usuario"><br>
        PASSWORD: <input type="password" name="password"><br>
        EMAIL: <input type="text" name="email"><br>
        RESPUESTA: <input type="text" name="respuesta"><br>
        ROL: <input type="number" min="0" max="1" name="rol"><br>
        <input type="submit" name="boton" value="Enviar">
    </form>
    <?php
        var_dump($_REQUEST);
        echo "<table>";
        echo "<tr>";
        echo "<td>MENSAJE</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".key($_REQUEST)."</td>";
    ?>
</body>
</html>