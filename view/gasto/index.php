<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <a href="agregar.php">AGREGAR</a>
    <form method="post">
        <legend>BUSCAR</legend>
        <input type="number" name="buscar" placeholder="Escriba el ID de gasto a buscar">
        
        <input type="submit" name="buscarGasto" value="Buscar">
    </form>
    
</body>
</html>

<?php
    switch($_REQUEST) {
        case isset($_REQUEST['agregarGasto']):
            echo "<script>alert('GASTO ". $_SESSION['nombre_gasto']." AGREGADO CON EXITO')</script>";
            echo "<script>window.location.href='agregar.php'</script>";
            break;

        case isset($_REQUEST['buscarGasto']):
            header("Location: ../../controller/ControladorUsuario.php?buscarGasto=active");
            break;

        case isset($_REQUEST['editarGasto']):
            echo "<script>alert('GASTO ". $_SESSION['nombre_gasto']." EDITADO CON EXITO')</script>";
            echo "<script>window.location.href='editar.php'</script>";
            break;

        case isset($_REQUEST['eliminarGasto']):
            echo "<script>alert('GASTO ". $_SESSION['nombre_gasto']." ELIMINADO CON EXITO')</script>";
            echo "<script>window.location.href='eliminar.php'</script>";
            break;
        
        default:
            echo "NO HIZO NADA - INDEX->GASTO";
            break;
        
    }
?>