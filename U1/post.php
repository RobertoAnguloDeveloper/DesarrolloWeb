<?php
    $datos = json_encode($_POST);

    $path = "./DATA/";
    
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
        file_put_contents($path.'form1.json', $datos);
    }else{
        file_put_contents($path.'form1.json', $datos);
    }
?>

<!-- <?php
        $datos = json_encode($_POST);
        var_dump($_POST);

        $path = "./DATA/";

        if (!is_dir($path)) {
            mkdir($path, 0777, true);
            file_put_contents($path . 'form1.json', $datos);
        } else {
            file_put_contents($path . 'form1.json', $datos);
        }
    ?> -->