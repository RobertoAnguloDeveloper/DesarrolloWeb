<?php

    class UsuarioDAO{
        public static function agregar($usuario){
            try{
               return $usuario->save();
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                echo "<script>alert('No se pudo agregar el usuario')</script>";
            }
        }

        public static function buscar($cedula){
            try{
                return Usuario::find_by_cedula($cedula);
            }catch(Exception $e){
                echo "<script>console.log('Error: ".$e->getMessage()."')</script>";
                echo "<script>alert('No se pudo buscar el usuario')</script>";
            }
        }

        public static function editar($usuario){
            $usuario->save();
        }

        public static function eliminar($usuario){
            $usuario->delete();
        }

        public static function listar(){
            return Usuario::all();
        }
    }
