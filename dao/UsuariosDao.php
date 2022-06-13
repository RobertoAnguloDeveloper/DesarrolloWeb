<?php
    require_once '../controller/conexionDB.php';
    require_once 'dao.php';

    $usuario = new Usuario($_POST['usuario'], $_POST['password'],$_POST['email'],$_POST['respuesta']);
    $usuarioDao = new UsuariosDao();
    
    $usuarioDao->create($usuario);
    
    class Usuario{
        public $username;
        public $password;
        public $email;
        public $respuesta;

        public function __construct($username, $password, $email, $respuesta){
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->respuesta = $respuesta;
        }
    }

    class UsuariosDao {
        public $conexion;

        public function __construct(){
            $this->conexion = new Conexion("root", "", "musica", "localhost", "3306");
        }

        public function create($obj){
            //Surround the following code with try/catch
            try{
                $this->conexion->conectar();
                $sql = "INSERT INTO usuarios (usuario, password, email, respuesta) VALUES (:usuario, :password, :email, :respuesta)";
                $stmt = $this->conexion->conexion->prepare($sql);
                $stmt->bindParam(':usuario', $obj->username);
                $stmt->bindParam(':password', $obj->password);
                $stmt->bindParam(':email', $obj->email);
                $stmt->bindParam(':respuesta', $obj->respuesta);
                $stmt->execute();
                echo "<script> alert('Usuario creado');</script>";
                $this->conexion->desconectar();
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }
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