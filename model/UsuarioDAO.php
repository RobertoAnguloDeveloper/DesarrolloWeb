<?php
    require_once 'Usuario.php';
    
    class UsuarioDAO{
        public static function agregar($usuario){
            try{
                echo "<script>console.log('USUARIO AGREGADO CORRECTAMENTE')</script>";
                return $usuario->save();
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
            }
        }

        public static function buscar($usuario){
            try{
                if(!is_null(Usuario::find_by_cedula($usuario->cedula))){
                    if(Usuario::find_by_cedula($usuario->cedula)->clave == $usuario->clave){
                        echo "<script>console.log('CREDENCIALES CORRECTAS')</script>";
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
            }
        }

        public static function editar($usuario){
            try{
                $usuario->save();
                echo "<script>alert('USUARIO EDITADO CORRECTAMENTE')</script>";
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                echo "<script>alert('No se pudo editar el usuario')</script>";
            }
        }

        public static function eliminar($usuario){
            try{
                $usuario->delete();
                echo "<script>alert('USUARIO ELIMINADO CORRECTAMENTE')</script>";
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                echo "<script>alert('No se pudo eliminar el usuario')</script>";
            }
        }

        public static function listar(){
            try{
                $usuarios = Usuario::all();
                return $usuarios;
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                echo "<script>alert('No se pudo listar los usuarios')</script>";
            }
        }
    }
