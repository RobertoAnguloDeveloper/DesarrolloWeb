<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="../assets/personal.css">


    <title>Actividad de aprendizaje # 1</title>
</head>

<body>
    <h1 style="text-align:center">ACTIVIDAD DE APRENDIZAJE # 1</h1>
    <h4 style="text-align:center">Asignatura &lt;DESARROLLO WEB&gt;</h4>
    <table >
        <tr>
            <td>
                <form method="post" style="width: 40%;">
                    <fieldset>
                        <legend><b>Formulario 1</b></legend>
                        <label for="">Ingrese los datos solicitados</label>
                        <input type="text" name="nombres" id="texto1" placeholder="Ingrese sus nombres">
                        <input type="text" name="apellidos" id="texto2" placeholder="Ingrese sus apellidos">
                        <br><br>
                        <input type="submit" value="Enviar">
                    </fieldset>
                </form>
            </td>
            <td>
                <table class="tabla">

                    <!-- Crea una tabla com los datos del formulario  -->
                    <?php
                        while(key($_POST)!=null){
                            echo "<th><b>".strtoupper(key($_POST))."</b></th>";
                            next($_POST);
                        }

                        //Rebobina el puntero al principio del array
                        reset($_POST);

                        echo "<tr>";

                        while(key($_POST)!=null){
                            echo "<td>".current($_POST)."</td>";
                            next($_POST);
                        }

                        echo "</tr>";
                    ?>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <br>
    
</body>

</html>

<!-- <?php
$datos = json_encode($_POST);
var_dump($_POST);

$path = "./DATA/";

if (!is_dir($path)) {
    mkdir($path, 0777, true);
    file_put_contents($path . 'form1.json', $datos);
} else {
    file_put_contents($path . 'form1.json', $datos);
}
?> -->