<?php
    require_once '../model/UsuarioDAO.php';
    require_once '../model/Usuario.php';

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
        <input type="submit" value="Enviar">
    </form>

    <form method="post">
        CEDULA: <input type="text" name="cedula"><br>
        CLAVE: <input type="password" name="clave"><br>
        NOMBRE: <input type="text" name="nombre"><br>
        TELFONO: <input type="text" name="telefono"><br>
        EMAIL: <input type="email" name="email"><br>
        <input type="submit" value="Editar">
    </form>

    <!-- Formulario para buscar por Cedula -->
    <form method="post">
        CEDULA: <input type="text" name="cedula"><br>
        <input type="submit" value="Buscar">
    </form>

    <form method="post">
        CEDULA: <input type="text" name="cedula"><br>
        <input type="submit" value="Eliminar">
    </form>

    <form method="post">
        <input type="submit" value="Listar">
    </form>
    
    <?php
        if(count($REQUEST) != 0){
            $usuario = new Usuario();

            $usuario->cedula = $REQUEST['cedula'];
            $usuario->clave = $REQUEST['clave'];
            $usuario->nombre = $REQUEST['nombre'];
            $usuario->telefono = $REQUEST['telefono'];
            $usuario->email = $REQUEST['email'];

            UsuarioDAO::agregar($usuario);
        }
            
    ?>
</body>
</html>