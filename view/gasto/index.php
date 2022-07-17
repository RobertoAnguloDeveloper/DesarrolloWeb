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
    <div id="listaGastos">
        <h2 class="tituloForm">GASTOS</h2>
        <form method="post">
            <fieldset>
                <legend class="tituloForm">BUSCAR</legend>
                <table>
                    <tr>
                        <td>
                            <input type="number" name="id" placeholder="Escriba el ID de gasto a buscar">
                        </td>
                        <td>
                            <input type="submit" name="buscarGasto" value="Buscar">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <a href="agregar.php">AGREGAR</a>
        <table id="tablaUsuarios">
</body>

</html>

<?php
switch ($_REQUEST) {
    case isset($_REQUEST['agregarGasto']):
        echo "<script>alert('GASTO " . $_SESSION['nombre_gasto'] . " AGREGADO CON EXITO')</script>";
        echo "<script>window.location.href='agregar.php'</script>";
        break;

    case isset($_REQUEST['buscarGasto']):
        $_SESSION['id'] = $_REQUEST['id'];
        header("Location: ../../controller/ControladorGasto.php?buscarGasto=active");
        break;

    case isset($_REQUEST['gastoBuscado']):
        if ($_REQUEST['gastoBuscado'] == '1') {
            ?>

            <tr>
                <th>Id</th>
                <th>Usuario Id</th>
                <th>Fecha</th>
                <th>Valor total sin IVA</th>
                <th>IVA total</th>
                <th>Valor total con IVA</th>
                <th>Nombre del gasto</th>
                <th>Lugar</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td><input id='id' type='text' value='<?= $_SESSION['id'] ?>' disabled></td>
                <td><input id='usuario_id' type='text' value='<?= $_SESSION['usuario_id'] ?>' disabled></td>
                <td><input id='fecha' type='text' value='<?= $_SESSION['fecha'] ?>' disabled></td>
                <td><input id='valor_total_sin_iva' type='text' value='$<?= $_SESSION['valor_total_sin_iva'] ?>' disabled></td>
                <td><input id='iva_total' type='text' value='$<?= $_SESSION['iva_total'] ?>' disabled></td>
                <td><input id='valor_total_con_iva' type='text' value='$<?= $_SESSION['valor_total_con_iva'] ?>' disabled></td>
                <td><input id='nombre_gasto' type='text' value='<?= $_SESSION['nombre_gasto'] ?>' disabled></td>
                <td><input id='lugar' type='text' value='<?= $_SESSION['lugar'] ?>' disabled></td>
                <td><input id='descripcion' type='text' value='<?= $_SESSION['descripcion'] ?>' disabled></td>
                <script>
                    ids = ['usuario_id', 'fecha', 'valor_total_sin_iva', 'iva_total', 'valor_total_con_iva', 'nombre_gasto', 'lugar', 'descripcion'];
                </script>
                <td>
                    <a href='#' onclick="enableInputs(ids);"><img src='../img/edit.png'></a>
                    <a href='#' onclick="updateDB(ids);"><img src='../img/save.png'></a>
                    <a href='#' onclick="deleteDB(ids);"><img src='../img/erase.png'></a>
                </td>
            </tr>
            </table>
            </div>

<?php
        } else {
            echo "<script>alert('GASTO NO ENCONTRADO')</script>";
        }
        break;

    case isset($_REQUEST['editarGasto']):
        echo "<script>alert('GASTO " . $_SESSION['nombre_gasto'] . " EDITADO CON EXITO')</script>";
        echo "<script>window.location.href='editar.php'</script>";
        break;

    case isset($_REQUEST['eliminarGasto']):
        echo "<script>alert('GASTO " . $_SESSION['nombre_gasto'] . " ELIMINADO CON EXITO')</script>";
        echo "<script>window.location.href='eliminar.php'</script>";
        break;
}
?>