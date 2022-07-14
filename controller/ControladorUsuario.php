<?php
session_start();

switch($_REQUEST){
    case isset($_REQUEST['userMenu']):
        header("Location: login.php");
        break;
    case isset($_REQUEST['usuarios']):
        header("Location: ../view/usuario/index.php?sesion=active");
        break;

    case isset($_REQUEST['sesion']):
        header("Location: ../view/usuario/buscar.php");
        break;

    case isset($_REQUEST['datosCuenta']):
        header("Location: ../view/usuario/buscar.php?datosCuenta=active");
        break;

    case isset($_REQUEST['buscar']):
        require_once '../model/UsuarioDAO.php';
        $usuario = new Usuario();
        $usuario->cedula = $_SESSION['cedula'];
        $usuario->clave = $_SESSION['clave'];
        $respuesta = UsuarioDAO::buscar($usuario);

        if($respuesta){
            $_SESSION['cedula'] = $respuesta->cedula;
            $_SESSION['clave'] = $respuesta->clave;
            $_SESSION['nombre'] = $respuesta->nombre;
            $_SESSION['telefono'] = $respuesta->telefono;
            $_SESSION['email'] = $respuesta->email;
            $_SESSION['respuesta'] = true;
            header("Location: ../view/usuario/index.php?buscar=active");
        }else{
            header("Location: ../view/usuario/index.php?buscar=active&respuesta=$respuesta");
        }
        break;

    case isset($_REQUEST['registrar']):
        header("Location: ../view/usuario/agregar.php");
        break;

    case isset($_REQUEST['gastos']):
        echo "ENTRO POR GASTOS";
        header("Location: ../view/gasto/index.php");
        break;

    case isset($_REQUEST['agregar']):
        require_once '../model/UsuarioDAO.php';
        $usuario = new Usuario();
        $usuario->cedula = $_SESSION['cedula'];
        $usuario->clave = $_SESSION['clave'];
        $usuario->nombre = $_SESSION['nombre'];
        $usuario->telefono = $_SESSION['telefono'];
        $usuario->email = $_SESSION['email'];
        $respuesta = UsuarioDAO::agregar($usuario);
        header("Location: ../view/usuario/index.php?respuesta=".$respuesta);
        break;

    case isset($_REQUEST['cerrarSesion']):
        session_destroy();
        echo "<script>alert('HASTA PRONTO ". $_SESSION['nombre']."')</script>";
        echo "<script>window.top.location.reload();</script>";
        break;
    default:
        echo 'NO ENTRO';
        break;
}
?>