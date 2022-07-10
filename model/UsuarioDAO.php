<?php
    require_once 'Usuario.php';
    
    class UsuarioDAO{
        public static function agregar($usuario){
            try{
                $usuario->save();
                echo "<script>alert('USUARIO AGREGADO CORRECTAMENTE')</script>";
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                echo "<script>alert('No se pudo agregar el usuario')</script>";
            }
        }

        public static function buscar($cedula){
            try{
                Usuario::find_by_cedula($cedula);
                echo "<script>alert('USUARIO ENCONTRADO')</script>";
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                echo "<script>alert('No se pudo buscar el usuario')</script>";
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
