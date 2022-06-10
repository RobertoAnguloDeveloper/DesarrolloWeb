<?php
    require_once '../controller/conexionDB.php';
    require_once 'dao.php';

    class UsuariosDao implements DAO{
        private $conexion;

        public function __construct(){
            $this->conexion = new Conexion("root", "", "musica", "localhost", "3306");
        }
        
        public function create($obj){
            $this->conexion->conectar();
            $sql = "INSERT INTO usuarios (usuario, pass, email, respuesta) VALUES (:usuario, :pass, :email, :respuesta)";
            $stmt = $this->conexion->dbh->prepare($sql);
            $stmt->bindParam(':usuario', $obj->usuario);
            $stmt->bindParam(':pass', $obj->pass);
            $stmt->bindParam(':email', $obj->email);
            $stmt->bindParam(':respuesta', $obj->respuesta);
            $stmt->execute();
            $this->conexion->dbh = null;
        }

        public function read($obj){
            $this->conexion->conectar();
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $stmt = $this->conexion->dbh->prepare($sql);
            $stmt->bindParam(':id', $obj->id);
            $stmt->execute();
            $this->conexion->dbh = null;
            return $stmt->fetch();
        }

        public function update($obj){
            $this->conexion->conectar();
            $sql = "UPDATE usuarios SET usuario = :usuario, pass = :pass, email = :email, respuesta = :respuesta WHERE id = :id";
            $stmt = $this->conexion->dbh->prepare($sql);
            $stmt->bindParam(':usuario', $obj->usuario);
            $stmt->bindParam(':pass', $obj->pass);
            $stmt->bindParam(':email', $obj->email);
            $stmt->bindParam(':respuesta', $obj->respuesta);
            $stmt->bindParam(':id', $obj->id);
            $stmt->execute();
            $this->conexion->dbh = null;
        }

        public function delete($obj){
            $this->conexion->conectar();
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $stmt = $this->conexion->dbh->prepare($sql);
            $stmt->bindParam(':id', $obj->id);
            $stmt->execute();
            $this->conexion->dbh = null;
        }
            
    }