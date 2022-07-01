<?php
    require_once '../dao/dw/UsuarioDAO.php';

    $usuario = new UsuarioDAO();
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
    <form method="POST">
        USUARIO: <input type="text" name="usuario"><br>
        PASSWORD: <input type="password" name="password"><br>
        EMAIL: <input type="text" name="email"><br>
        RESPUESTA: <input type="text" name="respuesta"><br>
        ROL: <input type="number" min="0" max="1" name="rol"><br>
        <input type="button" value="Submit">
    </form>
    
    <?php
        if(count($_POST) != null){
            echo "ENTRO";
            $user = $_POST['usuario'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $respuesta = $_POST['respuesta'];
            $rol = $_POST['rol'];

            $usuario->crearUsuario($user, $password, $email, $respuesta, $rol);
        }
            
    ?>
</body>
</html>