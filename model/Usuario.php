<?php
    require_once '../orm/config.php';

    class Usuario extends ActiveRecord\Model{
        public static $table_name = 'usuarios';
        public static $primary_key = 'id';
        public static $unique = 'usuario';


        // public function prueba(){
        //     $lista = Usuario::all();
        //     var_dump($lista);
        //     for($i=0; $i<count($lista); $i++){
        //         echo $lista[$i]->id."<br>";
        //         echo $lista[$i]->usuario."<br>";
        //         echo $lista[$i]->password."<br>";
        //         echo $lista[$i]->email."<br>";
        //         echo $lista[$i]->respuesta."<br>";
        //         echo $lista[$i]->rol."<br>";
        //     }
            
        // }
    }

    // $prueba = new Usuario();
    // $prueba->prueba();
