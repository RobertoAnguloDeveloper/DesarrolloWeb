<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personal.css">
    <script src="../js/personal.js"></script>
</head>

<body>
    <div id="listaUsuarios">
        <h2 class="tituloForm">USUARIOS</h2>
        <table>
            <tr>
                <th>Cédula</th>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>
            <?php
            
            // for ($i=0; $i < count($_SESSION['usuarios']); $i++) {
            //     echo "<tr>";
            //     echo "<td>" . $_SESSION['usuarios'][$i]->cedula . "</td>";
            //     echo "<td>" . $_SESSION['usuarios'][$i]->clave . "</td>";
            //     echo "<td>" . $_SESSION['usuarios'][$i]->nombre . "</td>";
            //     echo "<td>" . $_SESSION['usuarios'][$i]->email . "</td>";
            //     echo "<td>" . $$_SESSION['usuarios'][$i]->telefono . "</td>";
            //     echo "</tr>";
            // }
            ?>

        </table>
    </div>
</body>

</html>

<?php
switch ($_REQUEST){
    case isset($_REQUEST['adminCuentas']):
        header("Location: ../../controller/ControladorUsuario.php?listar");
        break;
}
?>