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
            foreach ($_SESSION['usuarios'] as $usuario) {
                echo "<tr>";
                echo "<td>" . $usuario->getNombre() . "</td>";
                echo "<td>" . $usuario->getCedula() . "</td>";
                echo "<td>" . $usuario->getEmail() . "</td>";
                echo "<td>" . $usuario->getTelefono() . "</td>";
                echo "<td>";
                echo "<a href='../../controller/ControladorUsuario.php?editar=" . $usuario->getCedula() . "'>Editar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>

        </table>
    </div>
</body>

</html>

<?php
if (isset($_REQUEST['guardar'])) {
    $_SESSION['nombre'] = $_REQUEST['nombre'];
    $_SESSION['clave'] = $_REQUEST['clave'];
    $_SESSION['email'] = $_REQUEST['email'];
    $_SESSION['telefono'] = $_REQUEST['telefono'];

    header("Location: ../../controller/ControladorUsuario.php?editar");
}
?>