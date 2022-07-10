<?php
require_once '../model/UsuarioDAO.php';
var_dump($_REQUEST);
switch($_REQUEST){
    case isset($_REQUEST['usuarios']):
        header("Location: ../view/usuario/index.php");
        break;
//     case isset($_REQUEST['gastos']):
//         header("Location: ../view/gasto/index.php");
//         break;
//     case isset($_REQUEST['buscar']):
//         echo 'ENTRO BUSCAR';
//         break;
    case isset($_REQUEST['agregar']):
        header("Location: ../view/usuario/agregar.php");
        break;
    default:
        echo 'NO ENTRO';
        break;
}
// header("Location:  ../../view/usuario/index.php");
?>