<?php
    require_once './model/Usuario.php';
    require_once './model/UsuarioDAO.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        CEDULA: <input type="text" name="cedula"><br>
        CLAVE: <input type="password" name="clave"><br>
        NOMBRE: <input type="text" name="nombre"><br>
        TELFONO: <input type="text" name="telefono"><br>
        EMAIL: <input type="email" name="email"><br>
        <input type="submit" value="Agregar" name="agregar">
    </form>
    <br>
    <form method="post">
        CEDULA: <input type="text" name="cedula"><br>
        CLAVE: <input type="password" name="clave"><br>
        NOMBRE: <input type="text" name="nombre"><br>
        TELFONO: <input type="text" name="telefono"><br>
        EMAIL: <input type="email" name="email"><br>
        <input type="submit" value="Editar" name="editar">
    </form>
    <br>
    <form method="post">
        CEDULA: <input type="text" name="cedula"><br>
        <input type="submit" value="Buscar" name="buscar">
    </form>
    <br>
    <form method="post">
        CEDULA: <input type="text" name="cedula"><br>
        <input type="submit" value="Eliminar" name="eliminar">
    </form>
    <br>
    <form method="post">
        <input type="submit" value="Listar" name="listar">
    </form>
    <br>
    <?php
    // var_dump($_POST);

    while(key($_POST)){
        switch(key($_POST)){
            case 'agregar':
                $usuario = new Usuario();
                $usuario->cedula = $_POST['cedula'];
                $usuario->clave = $_POST['clave'];
                $usuario->nombre = $_POST['nombre'];
                $usuario->telefono = $_POST['telefono'];
                $usuario->email = $_POST['email'];
                UsuarioDAO::agregar($usuario);
                break;

            case 'editar':
                $usuario = UsuarioDAO::buscar($_POST['cedula']);
                $usuario->cedula = $_POST['cedula'];
                $usuario->clave = $_POST['clave'];
                $usuario->nombre = $_POST['nombre'];
                $usuario->telefono = $_POST['telefono'];
                $usuario->email = $_POST['email'];
                UsuarioDAO::editar($usuario);
                break;
            
            case 'buscar':
                $usuario = UsuarioDAO::buscar($_POST['cedula']);
                echo "CEDULA: ".$usuario->cedula."<br>";
                echo "CLAVE: ".$usuario->clave."<br>";
                echo "NOMBRE: ".$usuario->nombre."<br>";
                echo "TELFONO: ".$usuario->telefono."<br>";
                echo "EMAIL: ".$usuario->email."<br>";
                break;

            case 'eliminar':
                $usuario = UsuarioDAO::buscar($_POST['cedula']);
                UsuarioDAO::eliminar($usuario);
                break;

            case 'listar':
                $usuarios = UsuarioDAO::listar();
                foreach($usuarios as $usuario){
                    echo "CEDULA: ".$usuario->cedula."<br>";
                    echo "CLAVE: ".$usuario->clave."<br>";
                    echo "NOMBRE: ".$usuario->nombre."<br>";
                    echo "TELFONO: ".$usuario->telefono."<br>";
                    echo "EMAIL: ".$usuario->email."<br>";
                    echo "<br><br>";
                }
                break;

            default:
                break;
        }
        next($_POST);
    }
            
    ?>
</body>
</html>