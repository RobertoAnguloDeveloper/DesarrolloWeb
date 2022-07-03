<?php
    require_once 'Usuario.php';
    
    class UsuarioDAO{

        public static function crearUsuario($usuario){
            try{
                $usuario->save();
            } catch(Exception $e){
                throw new Exception("ERROR *** No se pudo");
            }
            
        }
    }