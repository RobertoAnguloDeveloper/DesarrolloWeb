<?php
    var_dump($_POST);
    $datos = json_encode($_POST);

    $path = "./DATA/";
    
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
        file_put_contents($path.'data.json', $datos);
    }else if(!file_exists($path.'data.json')){
        file_put_contents($path.'data.json', $datos);
    }else{
        $datos_antiguos = file_get_contents($path.'data.json');
        var_dump($datos_antiguos);
        //$nuevo_array = array_merge($datos_antiguos, $datos);
        //file_put_contents($path.'data.json', array_merge($datos_antiguos, $datos));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
</head>
<body>
    <a href="AAU1.php">ATRAS</a>
</body>
</html>