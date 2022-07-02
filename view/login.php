<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/personal.css">
    <script src="./js/personal.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="contenedor" id="log-in">
        <button id="btn-x" onclick="fadeOutEffect();">x</button>
        <div class="cuadro">
            <form method="POST">
                <h1>Iniciar Sesión</h1>
                <input type="text" name="user" placeholder="Usuario">
                <input type="password" name="password" placeholder="Contraseña">
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
    </div>
</body>
</html>
<script>
    window.onload = function() {
        fadeInEffect("log-inyy",1);
    }
</script>