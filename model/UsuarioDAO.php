<?php
    require_once 'Usuario.php';
    
    class UsuarioDAO{
        public static function agregar($usuario){
            try{
                $usuario->save();
                echo "<script>console.log('USUARIO AGREGADO CORRECTAMENTE')</script>";
                return true;
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                return false;
            }
        }

        public static function buscar($usuario){
            try{
                if(!is_null(Usuario::find_by_cedula($usuario->cedula))){
                    if(Usuario::find_by_cedula($usuario->cedula)->clave == $usuario->clave){
                        echo "<script>console.log('CREDENCIALES CORRECTAS');</script>";
                        return Usuario::find_by_cedula($usuario->cedula);
                    }else{
                        echo "<script>console.log('CONTRASEÑA INVALIDA');</script>";
                        return false;
                    }
                }else{
                    echo "<script>console.log('USUARIO INVALIDO');</script>";
                    return false;
                }
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
            }
        }

        public static function buscarPorCedula($cedula){
            try{
                if(!is_null(Usuario::find_by_cedula($cedula))){
                    echo "<script>console.log('USUARIO EXISTENTE');</script>";
                    return Usuario::find_by_cedula($cedula);
                }else{
                    echo "<script>console.log('USUARIO NO EXISTENTE');</script>";
                    return false;
                }
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
            }
        }

        public static function editar($usuario){
            try{
                $usuario->save();
                echo "<script>console.log('USUARIO EDITADO CORRECTAMENTE');</script>";
                return true;
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."');</script>";
                echo "<script>console.log('No se pudo editar el usuario');</script>";
                return false;
            }
        }

        public static function eliminar($usuario){
            try{
                $usuario->delete();
                echo "<script>console.log('USUARIO ELIMINADO CORRECTAMENTE')</script>";
                return true;
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                echo "<script>console.log('No se pudo eliminar el usuario')</script>";
                return false;
            }
        }

        public static function listar(){
            try{
                $usuarios = new Usuario();
                $usuarios = Usuario::find('all');
                return $usuarios;
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                echo "<script>console.log('No se pudo listar los usuarios')</script>";
                return false;
            }
        }
    }
