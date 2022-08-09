<?php
session_start();

include_once '../model/UsuarioDAO.php';

switch($_REQUEST){
    case isset($_REQUEST['userMenu']):
        header("Location: login.php");
        break;
    case isset($_REQUEST['usuarios']):
        echo "<script>console.log('Ctrl->usuarios')</script>";
        header("Location: ../view/usuario/index.php?sesion=active");
        break;

    case isset($_REQUEST['sesion']):
        echo "<script>console.log('Ctrl->sesion')</script>";
        header("Location: ../view/usuario/buscar.php?sesionBuscar");
        break;

    case isset($_REQUEST['datosCuenta']):
        header("Location: ../view/usuario/index.php?datosCuenta");
        break;

    case isset($_REQUEST['buscar']):
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

    case isset($_REQUEST['agregar']):
        $usuario = new Usuario();
        $usuario->cedula = $_SESSION['cedula'];
        $usuario->clave = $_SESSION['clave'];
        $usuario->nombre = $_SESSION['nombre'];
        $usuario->telefono = $_SESSION['telefono'];
        $usuario->email = $_SESSION['email'];
        $respuesta = UsuarioDAO::agregar($usuario);
        header("Location: ../view/usuario/index.php?respuesta=".$respuesta);
        break;

    case isset($_REQUEST['editar']):
        if (isset($_REQUEST['list'])){
            $usuario = new Usuario();
            $usuario = UsuarioDAO::buscarPorCedula($_REQUEST['cedula']);
            $usuario->clave = $_REQUEST['clave'];
            $usuario->nombre = $_REQUEST['nombre'];
            $usuario->telefono = $_REQUEST['telefono'];
            $usuario->email = $_REQUEST['email'];
            $respuesta = UsuarioDAO::editar($usuario);
            header("Location: ../view/usuario/listar.php?editOk&cedula=".$_REQUEST['cedula']);
        }else{
            $usuario = new Usuario();
            $usuario = UsuarioDAO::buscarPorCedula($_SESSION['cedula']);
            $usuario->cedula = $_SESSION['cedula'];
            $usuario->clave = $_SESSION['clave'];
            $usuario->nombre = $_SESSION['nombre'];
            $usuario->telefono = $_SESSION['telefono'];
            $usuario->email = $_SESSION['email'];
            $respuesta = UsuarioDAO::editar($usuario);
            header("Location: ../view/usuario/index.php?respuesta=".$respuesta);
        }
        break;

    case isset($_REQUEST['adminCuentas']):
        header("Location: ../view/usuario/listar.php?adminCuentas");
        break;

    case isset($_REQUEST['listar']):
        $usuarios = new Usuario();

        $usuarios = UsuarioDAO::listar();
        $usuarios = serialize($usuarios);

        $_SESSION['usuarios'] = $usuarios;
        
        header("Location: ../view/usuario/listar.php?listar");
        break;

    case isset($_REQUEST['eliminar']):
        $usuario = new Usuario();
        $usuario = UsuarioDAO::buscarPorCedula($_REQUEST['cedula']);
        $usuario->cedula = $_REQUEST['cedula'];
        $usuario->clave = $_REQUEST['clave'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->telefono = $_REQUEST['telefono'];
        $usuario->email = $_REQUEST['email'];
        $respuesta = UsuarioDAO::eliminar($usuario);
        header("Location: ../view/usuario/listar.php?eliminar=".$respuesta);
        break;

    case isset($_REQUEST['recovery']):
        $usuario = new Usuario();
        $usuario = UsuarioDAO::buscarPorCedula($_REQUEST['cedula']);
        
        if($usuario->cedula != null){
            require_once 'PasswordRecovery.php';
            
            $mail = new PasswordRecovery($usuario->email, $usuario->nombre, $usuario->cedula, $usuario->clave);
            
            $respuesta = $mail->send();
            $res = [];
            $res = explode("?", $respuesta);
            header("Location: ../view/usuario/index.php?recovery=".$res[1]."&mensaje=".$res[0]);
        }else{
            header("Location: ../view/usuario/index.php?recovery=fail");
        }
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