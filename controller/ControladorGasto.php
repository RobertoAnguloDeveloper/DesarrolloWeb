<?php
session_start();

include_once '../model/GastoDAO.php';

$rootPath = $_SERVER['DOCUMENT_ROOT'].'/desarrolloweb/';

switch($_REQUEST){
    case isset($_REQUEST['gastos']):
        $gastos = new Gasto();
        $gastos = GastoDAO::buscarPorCedula($_SESSION['cedula']);
        $gastos = serialize($gastos);
        $_SESSION['gastosUsuario'] = $gastos;
        header("Location: ../view/gasto/index.php?gastosUsuario=active");
        break;

    case isset($_REQUEST['agregarGasto']):
        $gasto = new Gasto();
        $gasto->usuario_id = $_SESSION['usuario_id'];
        $gasto->fecha = $_SESSION['fecha'];
        $gasto->valor_total_sin_iva = $_SESSION['valor_total_sin_iva'];
        $gasto->iva_total = $_SESSION['iva_total'];
        $gasto->valor_total_con_iva = $_SESSION['valor_total_con_iva'];
        $gasto->nombre_gasto = $_SESSION['nombre_gasto'];
        $gasto->lugar = $_SESSION['lugar'];
        $gasto->descripcion = $_SESSION['descripcion'];

        $respuesta = GastoDAO::agregar($gasto);
        header("Location: ../view/gasto/index.php");
        break;

    case isset($_REQUEST['buscarGasto']):
        $gasto = new Gasto();
        $gasto->id = $_SESSION['id'];
        $respuesta = GastoDAO::buscar($gasto);
        if($respuesta){
            $_SESSION['id'] = $respuesta->id;
            $_SESSION['usuario_id'] = $respuesta->usuario_id;
            $_SESSION['fecha'] = $respuesta->fecha;
            $_SESSION['valor_total_sin_iva'] = $respuesta->valor_total_sin_iva;
            $_SESSION['iva_total'] = $respuesta->iva_total;
            $_SESSION['valor_total_con_iva'] = $respuesta->valor_total_con_iva;
            $_SESSION['nombre_gasto'] = $respuesta->nombre_gasto;
            $_SESSION['lugar'] = $respuesta->lugar;
            $_SESSION['descripcion'] = $respuesta->descripcion;

            header("Location: ../view/gasto/index.php?gastoBuscado=1");
        }else{
            header("Location: ../view/gasto/index.php?gastoBuscado=0");
        }
        break;

    case isset($_REQUEST['editar']):
        $gasto = new Gasto();
        $gasto->id = $_REQUEST['id'];
        $gasto = GastoDAO::buscar($gasto);
        $gasto->usuario_id = $_REQUEST['usuario_id'];
        $gasto->fecha = $_REQUEST['fecha'];
        $gasto->valor_total_sin_iva = $_REQUEST['valor_total_sin_iva'];
        $gasto->iva_total = $_REQUEST['iva_total'];
        $gasto->valor_total_con_iva = $_REQUEST['valor_total_con_iva'];
        $gasto->nombre_gasto = $_REQUEST['nombre_gasto'];
        $gasto->lugar = $_REQUEST['lugar'];
        $gasto->descripcion = $_REQUEST['descripcion'];
        $respuesta = GastoDAO::editar($gasto);
        $_SESSION['nombre_gasto'] = $_REQUEST['nombre_gasto'];
        header("Location: ../view/gasto/index.php?gastoEditado=1");
        break;
    
    case isset($_REQUEST['listar']):
        $_SESSION['gastosTodos'] = serialize(GastoDAO::listar());
        header("Location: ../view/gasto/index.php?gastosTodos=active");
        break;

    case isset($_REQUEST['eliminar']):
        $gasto = new Gasto();
        $gasto->id = $_REQUEST['id'];
        $_SESSION['nombre_gasto'] = $_REQUEST['nombre_gasto'];
        $respuesta = GastoDAO::eliminar($gasto);
        if($respuesta){
            header("Location: ../view/gasto/index.php?gastoEliminado=1");
        }else{
            header("Location: ../view/gasto/index.php?gastoEliminado=0");
        }
        break;

    default:
        echo 'NO ENTRO CONTROLADOR GASTO';
        break;
}
?>