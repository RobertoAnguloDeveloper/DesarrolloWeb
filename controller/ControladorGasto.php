<?php
session_start();

include_once '../model/GastoDAO.php';

$rootPath = $_SERVER['DOCUMENT_ROOT'].'/desarrolloweb/';

switch($_REQUEST){
    case isset($_REQUEST['gastos']):
        header("Location: ../view/gasto/index.php?gastos=active");
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

    default:
        echo 'NO ENTRO CONTROLADOR GASTO';
        break;
}
?>