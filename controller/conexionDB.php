<?php 
    class Conexion{
        private $user;
        private $pass;
        private $host;
        private $db;
        private $conexion;

        //Build constructor
        public function __construct($user, $pass, $db, $host, $port){
            $this->user = $user;
            $this->pass = $pass;
            $this->db = $db;
            $this->host = $host;
            $this->port = $port;
        }
        
        public function conectar(){
            //Connect using PDO connection
            $dsn = "mysql:host=$this->host;dbname=$this->db;port=$this->port";
            $this->dbh = new PDO($dsn, $this->user, $this->pass);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
    }