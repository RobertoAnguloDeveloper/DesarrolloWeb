<?php
session_start();

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
    case isset($_REQUEST['guardar']):
        require_once '../model/UsuarioDAO.php';
        $usuario = new Usuario();
        $usuario->cedula = $_SESSION['cedula'];
        $usuario->clave = $_SESSION['clave'];
        $usuario->nombre = $_SESSION['nombre'];
        $usuario->telefono = $_SESSION['telefono'];
        $usuario->email = $_SESSION['email'];
        UsuarioDAO::agregar($usuario);
        break;
    default:
        echo 'NO ENTRO';
        break;
}
?>