<?php
    require_once '../model/Usuario.php';
    
    class UsuarioDAO{

        public function crearUsuario($usuario, $password, $email, $respuesta, $rol){
            $user = new Usuario();
            $user->usuario = $usuario;
            $user->password = $password;
            $user->email = $email;
            $user->respuesta = $respuesta;
            $user->rol = $rol;
            $user->save();
        }
    }