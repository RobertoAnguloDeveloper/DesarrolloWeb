<?php

    class UsuarioDAO{
        public static function agregar($usuario){
            try{
               return $usuario->save();
            }catch(Exception $e){
                echo "alert('$e->getMessage()')";
            }
        }

        public static function buscar($cedula){
            return Usuario::find_by_cedula($cedula);
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
