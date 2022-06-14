<?php 
    class Conexion{
        private $user;
        private $pass;
        private $host;
        private $db;
        private $port;
        private $conexion;

        public function __construct($user, $pass, $db, $host, $port){
            $this->user = $user;
            $this->pass = $pass;
            $this->db = $db;
            $this->host = $host;
            $this->port = $port;
        }
        
        public function conectar(){
            //Surround the following code with try/catch
            try{
                $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "<script> alert('Conexion exitosa');</script>";
                return $this->conexion;
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }

        public function getUser(){
            return $this->user;
        }

        public function setUser($user){
            $this->user = $user;
        }

        public function getPass(){
            return $this->pass;
        }

        public function setPass($pass){
            $this->pass = $pass;
        }

        public function getHost(){
            return $this->host;
        }

        public function setHost($host){
            $this->host = $host;
        }

        public function getDb(){
            return $this->db;
        }

        public function setDb($db){
            $this->db = $db;
        }

        public function getPort(){
            return $this->port;
        }

        public function setPort($port){
            $this->port = $port;
        }

        public function getConexion(){
            return $this->conexion;
        }

        public function setConexion($conexion){
            $this->conexion = $conexion;
        }
    }