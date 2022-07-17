<?php
    require_once 'Gasto.php';
    
    class GastoDAO{
        public static function agregar($gasto){
            try{
                $gasto->save();
                echo "<script>console.log('GASTO AGREGADO CORRECTAMENTE')</script>";
                return true;
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                return false;
            }
        }

        public static function buscar($gasto){
            try{
                if(!is_null(gasto::find_by_id($gasto->id))){
                    echo "<script>console.log('GASTO ENCONTRADO');</script>";
                    return gasto::find_by_id($gasto->id);
                }else{
                    echo "<script>console.log('GASTO NO ENCONTRADO');</script>";
                    return false;
                }
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
            }
        }

        // public static function buscarPorCedula($cedula){
        //     try{
        //         if(!is_null(gasto::find_by_cedula($cedula))){
        //             echo "<script>console.log('gasto EXISTENTE');</script>";
        //             return gasto::find_by_cedula($cedula);
        //         }else{
        //             echo "<script>console.log('Gasto NO EXISTENTE');</script>";
        //             return false;
        //         }
        //     }catch(Exception $e){
        //         echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
        //     }
        // }

        // public static function editar($gasto){
        //     try{
        //         $gasto->save();
        //         echo "<script>console.log('Gasto EDITADO CORRECTAMENTE');</script>";
        //         return true;
        //     }catch(Exception $e){
        //         echo "<script>console.log('Error: ".$e->getMessage()."');</script>";
        //         echo "<script>console.log('No se pudo editar el gasto');</script>";
        //         return false;
        //     }
        // }

        // public static function eliminar($gasto){
        //     try{
        //         $gasto->delete();
        //         echo "<script>console.log('gasto ELIMINADO CORRECTAMENTE')</script>";
        //         return true;
        //     }catch(Exception $e){
        //         echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
        //         echo "<script>console.log('No se pudo eliminar el gasto')</script>";
        //         return false;
        //     }
        // }

        // public static function listar(){
        //     try{
        //         $gastos = new gasto();
        //         $gastos = gasto::find('all');
        //         return $gastos;
        //     }catch(Exception $e){
        //         echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
        //         echo "<script>console.log('No se pudo listar los gastos')</script>";
        //         return false;
        //     }
        // }
    }
